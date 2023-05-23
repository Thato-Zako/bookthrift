<?php
 $conn = mysqli_connect("localhost","root","","bookstore");

//checking connectivity
if($conn === false){
	die("Error: Could not connect. " . mysqli_connect_error());
}
?>