<?php
$id=$_POST['id'];
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$Email=$_POST['email'];
$Addy=$_POST['address'];
$phone=$_POST['phone'];
//$pwd=sha1($_POST['password']);
$update= mysqli_query($conn, "update admin_tb set firstname='$fname', lastname='$lname', email='$Email', address='$Addy', phone='$phone' where admin_id='$id'");
if($update){
	echo"<script>window.location='view.php';</script>";
	};


?>