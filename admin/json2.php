<?php
header("content-Type: application/json; charset=UTF-8");
require("conn.php");
$select = mysqli_query($conn, "select *from customer_tb");
$data = mysqli_fetch_all($select, MYSQLI_ASSOC);
$jdata=json_encode($data);
echo $jdata;
?>