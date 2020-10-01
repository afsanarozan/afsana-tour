<?php  
$conn = mysqli_connect('localhost','root','','traveling');

if (mysqli_connect_errno()) {
	echo "koneksi databse gagal".mysqli_connect_error();
}

?>