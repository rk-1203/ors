'use strict';
var requiredAlternative = {
	n: 'groupMissing',
	req: [
		'text','search','url','tel','email','password','datetime','date','month','week','time','number','checkbox','file',
		'textarea',
		'select-one','select-multi'
	],
	// limited to elements that may be @required, excluding radio buttons / radioNodeList
	message: function(){
		var msgs = {
			'en': ["All the", "At least ", " field", " fields", " of this section ", "is required", "are required"],
			'fr': ["Toutes les", "Au moins ", " zone", " zones", " de cette section ", "doit être renseignée", "doivent être renseignées"],
			'it': ["Tutti i", "Almeno ", " campo", " campi", " di questa sezione ", "è obbligatorio", "sono obbligatori"]
		}
		var testlang = [navigator.language || navigator.userLanguage, document.documentElement.lang];
		var msg;
		var i = 0; 
		while(!msg && testlang[i]){
			msg = (testlang[i]) ? msgs[testlang[i].split('-')[0].toLowerCase()] || false : false;
			i++;
		}
		return msg || msgs['en'];
	},
	setMsg: function(required,length){
		var msg;
		if(required == length){
			msg = this.msg[0] + this.msg[3] + this.msg[4] + this.msg[6];
		} else {
			var k = (required > 1);
			msg = this.msg[1] + required + this.msg[2 + k] + this.msg[4] + this.msg[5 + k];
		}
		return msg;
	},
	cycle: function(callback,extend,haystack,storeVar){
		var list = haystack.querySelectorAll('button, fieldset, input, keygen, output, object, select, textarea');
		// element.validity will be fixed on all elements supporting it. They call it consistency.
		var result = 0;
		var elm;
		for(var i = 0; i < list.length; i++){
			elm = list[i];
			if(requiredAlternative.req.indexOf(elm.type) > -1){
				result += this[callback](elm);
				if(storeVar !== undefined){
					storeVar.push(elm);
				}
			} else if(extend){
				this[callback](elm);
			}
		}
		return result;
	},
	check: function(elm){
		return (elm.type == 'checkbox') ? elm.checked : Boolean(elm.value);
	},
	getFieldset: function(node){
		var fieldset;
		do {
			if(node.tagName == 'FIELDSET'){
				fieldset = node;
				break;
			}
			node = node.parentElement;
		} while(node.tagName != 'FORM' && node.tagName != 'BODY');
		return fieldset;
	},
	getGroup: function(fieldset){
		var r = {'required': 0, 'filled': 0, 'stack': []};
		if(fieldset){
			r.required = fieldset.dataset.required || (fieldset.hasAttribute('required')) ? fieldset.getAttribute('required') : 0;
			r.filled = this.cycle('check',false,fieldset,r.stack)
			r.required = (r.required == '' || isNaN(r.required)) ? r.stack.length : Math.min(r.stack.length, parseInt(r.required));
		}
		return r;
	},
	action: function(node,k){
		var fieldset = (node.tagName == 'FIELDSET') ? node : this.getFieldset(node);
		var result = this.getGroup(fieldset);
		if(result.required){
			var newMsg = this.setMsg(result.required,result.stack.length);
			var oldMsg = (k) ? this.setMsg(result.required, result.stack.length - k) : newMsg;
			// at this point allow for error definition in parent fieldset, too
			result.stack.push(fieldset);
			var valid = (result.filled == result.required);
			var elm;
			for(var z = 0; z < result.stack.length; z++){
				elm = result.stack[z];
				if(!elm.validity.customError || elm.validationMessage == oldMsg){
					// sets groupMissing error. Also removes it from controls which have been filled in
					if(!valid && !this.check(elm)){
						// this loop will not be done on error messages initialisation
						elm.setCustomValidity(newMsg);
					} else {
						elm.setCustomValidity('');
					}
				}
				elm.validity[this.n] = !valid;
			}
		}
	},
	setEvent: function(elm){
		var type = elm.type;
		elm.addEventListener('change', function(ev){
			requiredAlternative.action(this);
		});
	},
	setProperty: function(elm){
		var done;
		try {
			Object.defineProperty(elm, 'validity', {
				// prevents UAs from reassigning 'validity' on Invalid event
				value: {}
			});
			Object.defineProperty(elm.validity, 'valid', {
				// validity according to new groupMissing
				enumerable: true,
				get: function(){
					var result = true;
					for(var prop in this){
						if(this[prop] && prop != 'valid'){
							result = false;
							break;
						}
					}
					return result;
				}
			});
		} catch(e){
			done = true;
		}
		if(!done){
			Object.defineProperty(elm.validity, this.n, {
				// extends validity state for all elements implementing it
				enumerable: true,
				writable: true,
				value: false
			});
		};
	},
	setElement: function(elm){
		this.setEvent(elm);
		this.setProperty(elm);
	},
	setFieldset: function(fieldset){
		fieldset.dataRequired = this.getGroup(fieldset).required || false;
		try {
			Object.defineProperty(fieldset, 'required', {
				// required in fieldset returns the minimum number of required fields
				enumerable: true,
				get: function(){
					return this.dataRequired;
				},
				set: function(val){
					this.dataRequired = Math.min(requiredAlternative.getGroup(this).stack.length, parseInt(val)) || false;
				}
			});
		} catch(e){}
	},
	initElements: function(list){
		var add;
		if(list.tagName){
			this.cycle('setElement',true,list);
			list = list.getElementsByTagName('FIELDSET');
		} else {
			add = true;
		}
		for(var i = 0; i < list.length; i++){
			if(add){
				this.cycle('setElement',true,list[i]);
			}
			this.setFieldset(list[i]);
			this.action(list[i]);
		}
	},
	/* These methods are to be invoked in case a new control or a new form are inserted into the document */
	init: function(haystack){
		if(haystack === undefined){
			haystack = document.body;
			this.msg = requiredAlternative.message();
		}
		this.initElements(haystack);
	},
	insertControls: function(){
		// if a control has been added, the message to match is computed differently
		var sets = {
			'el': [],
			'n': []
		};
		var elm,fieldset,k;
		for(var i in arguments){
			elm = arguments[i];
			this.setElement(elm);
			fieldset = this.getFieldset(elm);
			k = sets['el'].indexOf(fieldset);
			if(k == -1){
				sets['el'].push(fieldset);
				sets['n'].push(1);
			} else {
				sets['n'][k] += 1;
			}
		}
		for(var i = 0;i < sets.el.length;i++){
			console.log(sets.el[i] +','+ sets.n[i]);
			this.action(sets.el[i],sets.n[i]);
		}
	},
	insertFieldsets: function(){
		this.initElements(arguments);
	},
	insertForms: function(){
		for(var i in arguments){
			this.init(arguments[i]);
		}
	}
}
document.addEventListener('DOMContentLoaded', function(done) {
	requiredAlternative.init();
});
