<?php
include("connect.php");
if($_GET['id'] and $_GET['data'])
{
	$tabla = $_GET['vn']; 
	$id = $_GET['id'];
	$data = $_GET['data'];
	$key = $_GET['key'];
if(mysqli_query($connect,"update $tabla set $key='$data' where id='$id'"))
	echo 'success';
}
?>


