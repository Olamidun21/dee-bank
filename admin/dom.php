<?php
header("content-Type: application/json; charset=UTF-8");
require("conn.php");
$select = mysqli_query($conn, "select *from customer_tb join account using (customer_id)where customer_id ='$_POST[x]'");
while($r=mysqli_fetch_array($select)){
$id=$r['account_id'];
$name= $r['firstname'];
$transact= mysqli_query($conn,"select * from transaction where account_id ='$id'");
$data = mysqli_fetch_all($transact,MYSQLI_ASSOC);
}
$jdata=json_encode($data);
echo "[".$jdata."]";
?>