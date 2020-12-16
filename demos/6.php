<?
/**
 * build-in 函数
 */
function foo() {
	$path = $_GET[1];
	$content = "./".file_get_contents($path).".php";
	echo $content;
}

foo();
?>
