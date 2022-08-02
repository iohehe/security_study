<?
/**
 * 条件传值
 */
function foo() {
	$a = $_GET[1];
	if ($b = $a)
	{
		echo $b;
	}
}

function bar() {
        $a = $_GET[1];
	foreach($a as $k=>$v)
	{
	    echo $a;
	}
}

foo();
bar();
?>
