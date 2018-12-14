<?php
require 'conn.php';
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$Email=$_POST['email'];
$Addy=$_POST['address'];
$phone=$_POST['phone'];
$pwd=sha1($_POST['password']);
$acctype=$_POST['acctype'];
$result=mysqli_query($conn, "insert into customer_tb(firstname, lastname, email, address, phone, password)values('$fname', '$lname','$Email','$Addy','$phone', '$pwd')");
if($result){
	$select= mysqli_query($conn,"select * from customer_tb where email='$Email'");
	while ($row=mysqli_fetch_array($select)){
	$id=$row['customer_id'];
	$acc= mysqli_query($conn, "insert into account(acctype_id,customer_id) values ('$acctype','$id')") or die(mysqli_error($conn));
	if($acc){
	$selet= mysqli_query($conn,"select * from account where customer_id='$id'") or die(mysqli_error($conn));
		while($l=mysqli_fetch_array($selet)){
		echo "<script> alert(".$l['account_id']." 'This is your account number');</script>;";
		include'index.php';


	}

}

}
}
?>