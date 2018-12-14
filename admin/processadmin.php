<?php
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$Email=$_POST['email'];
$Addy=$_POST['address'];
$phone=$_POST['phone'];
$pwd=sha1($_POST['password']);
$img=$_FILES['file']['name'];
//$imgs=$_FILES['file']['size'];
//$imgtn=$_FILES['file']['tmp_name'];
//$imgt=$_FILES['file']['type'];
require("conn.php");
if($fname==""|| $lname==""||$Email==""||$Addy==""||$phone==""||$pwd=="")
{
	echo"Incomplete information".mysqli_error($conn);	
}
else{
	$move= move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$_FILES['file']['name']);
$result=mysqli_query($conn, "insert into admin_tb(firstname, lastname, email, address, phone, password, passport)values('$fname', '$lname','$Email','$Addy','$phone', '$pwd', '$img')");
if($result){
	//$move= move_uploaded_file($_FILES['file']['tmp_name'],"uploads/".$_FILES['file']['name'])or die(mysqli_error($conn));
	//if($move){
	echo"<script>window.location='login.php'</script>";
	//}

}
}
?>