<?php 
 
$koneksi = mysqli_connect("localhost","root","root","born-digital");
 
// Check connection
if (mysqli_connect_errno()){
	echo "Error Connection" . mysqli_connect_error();
}
 
?>