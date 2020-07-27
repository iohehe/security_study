<?php 
class A{
    public function foo($var){
	$a = $var;
        echo $a;
    }
}

$obj = new A();
$obj->foo($_GET['id']);
?>
