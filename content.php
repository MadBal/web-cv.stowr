<?php
if(!empty($_GET["menu"])){
	include_once($_GET["menu"].".php");
	
}else{
	include"header.php";
}
?>