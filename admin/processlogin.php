<?php session_start();
$_SESSION['id']=session_id();
$_SESSION['email']=$_POST['email'];
$_SESSION['password']=sha1($_POST['password']);               
if(isset($_SESSION['email'])&& (isset($_SESSION['password']))){	
require("conn.php");
$result=mysqli_query($conn, "select * from admin_tb where email='$_SESSION[email]' and password='$_SESSION[password]'");
$flag= true;

	while($row=mysqli_fetch_array($result)){
		$flag= false;
		$fn= $row['firstname'];
		$ln= $row['lastname'];
		$full= $fn." ".$ln;
	}
if($flag){
		$errorMsg="Incorrect Email or Password";
		include("login.php");
}else{
		
		include("index.php");
	}


}else{
	
	}
?>