<?php
session_start();
include "connection.php";
$s="delete from `suppliers` WHERE `ID` ='".$_GET['supp']."'";

mysqli_query($conn,$s);
header("location: view_supplier.php");
?>