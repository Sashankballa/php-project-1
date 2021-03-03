<?php
session_start();
$con = mysqli_connect("localhost","root","","bookstorecreator");
	if(!$con){
		die("Connection Failed!");
	}
?>