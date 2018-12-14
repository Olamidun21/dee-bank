<?php 
include("conn.php");
$id= $_GET['id'];
$delete = mysqli_query($conn, "delete from admin_tb where admin_id = '$id'");
if($delete){
	echo"<script> window.location='view.php';</script>";
	};
?>