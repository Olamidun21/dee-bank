<?php session_start();
require("conn.php");
$Credit="Credit";
$Amt=$_POST['amount'];
$deposit = mysqli_query($conn, "insert into transaction (account_id, transaction_type,amount, name, Date) values ('$_POST[accountno]','$Credit','$_POST[amount]','$_POST[name]','$_POST[date]')")or die(mysqli_error($conn));
if($deposit){
	$accbal= mysqli_query($conn, "select * from account where account_id ='$_POST[accountno]'")or die(mysqli_error($conn));
	while($r=mysqli_fetch_array($accbal)){
		$acbal= $r['Account_balance'];
		$total= $acbal + $Amt;
		$enter = mysqli_query($conn, "update account set Account_balance ='$total' where account_id ='$_POST[accountno]'" )or die(mysqli_error($conn));
		
		};
	echo"<script>alert('Successful');</script>";
	$Msg = "your New Account Balance Is ".$total;
	include("index.php");	
	
}
?>