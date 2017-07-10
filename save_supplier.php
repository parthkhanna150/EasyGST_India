<?php
session_start();

$s="update `suppliers` set `Name`='".$_POST["textbox1"]."', `address`='".$_POST["textbox3"]."', `mobile_no`='".$_POST["textbox5"]."',`email`= '".$_POST["textbox6"]."' where `GST_no`='".$_POST["textbox2"]."'";
include "connection.php";
mysqli_query($conn, $s);

header("location: view_supplier.php");
?>