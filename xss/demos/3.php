<?php
function foo($var){
   $a = $var; 
   echo $a;
}

function bar(){
    foo($_GET['id']);
}
bar();
?>
