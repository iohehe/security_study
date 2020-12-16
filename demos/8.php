<?php
/**
 * 数据库过程间
 */
$conn = mysqli_connect("localhost", "root", "root", "miniBBS");

$query = "select * from user where user_name='".$_GET[1]."'";
$res = mysqli_query($conn, $query);
// rips误报
echo ($res);
?>
