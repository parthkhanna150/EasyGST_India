<?php
session_start();
include "connection.php";
$s="delete from `items` WHERE `Item Name` ='".$_GET['item']."'";

mysqli_query($conn,$s);
header("location: view_items.php");
?>