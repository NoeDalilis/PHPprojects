<?php

$txt = "Hello World!";
$number = 101;

echo $txt;  
echo $number; 

$somevar = 15;
function addit() {
GLOBAL $somevar;
$somevar++;
print "Somevar is $somevar";
}
addit();

?>