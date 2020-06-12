<?php
foreach ($_POST as $name => $val)
{
     echo htmlspecialchars($name . ': ' . $val) . "\n";
}
?>