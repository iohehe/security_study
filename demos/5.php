<?php
/**
 * 转义
 */

//RIPS: 漏报 
function foo() {
    $a = $_GET[1];
    echo $a++."<br />"; // True
}

//RIPS: 正报
function bar() {
    $a = $_GET[1];
    echo ++$a."<br />"; // True
}

//RIPS: 正略
function woo() {
    $a = $_GET[1];
    $a = $a+1; //$a+=1;
    echo $a."<br />"; // False
}

//RIPS: 误报
function moo() {
    $a = $_GET[1];
    $b = 200;
    $c = $a + $b; //False
    echo $c;
}


foo();
bar();
woo();
moo();
?>
