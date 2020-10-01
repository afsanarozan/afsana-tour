<?php 
	session_start();
	require_once 'koneksi.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone =$_POST['phone'];
	$msg = $_POST['message'];


	mysqli_query($conn,"INSERT INTO traveling VALUES ('','$name','$email','$phone','$msg')");
	header('location:../#section');
 ?>