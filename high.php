<?php
$con=mysqli_connect("localhost","root","","deebank");
$p=$_POST['high'];
$request=mysqli_query($con,"select * from customer_tb where firstname like '%".$p."%'or lastname like '%".$p."%' or email like '%".$p."%' ");
$data = mysqli_fetch_all($request,MYSQLI_ASSOC);
$jdata = json_encode($data);
echo $jdata;
?>