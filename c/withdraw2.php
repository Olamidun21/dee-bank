<?php
require("conn.php");
$debit="Debit";
$Amt=$_POST['amount'];
$withdraw = mysqli_query($conn, "insert into transaction (account_id, transaction_type,amount, name, Date) values ('$_POST[accountno]','$debit','$_POST[amount]','$_POST[name]','$_POST[date]')");
if($withdraw){
	$accbal= mysqli_query($conn, "select * from account where account_id ='$_POST[accountno]'");
	while($r=mysqli_fetch_array($accbal)){
		$acbal= $r['Account_balance'];
		$total= $acbal - $Amt;
		$enter = mysqli_query($conn, "update account set Account_balance ='$total' where account_id ='$_POST[accountno]'" );
		
		};
	echo"<script>alert('Successful');</script>";
	$Msg = "your New Account Balance Is ".$total;
	include("index.php");	
	
}
?>