<?php
session_start();
include "connection.php";
$s="delete from `items` WHERE `item_name` ='".$_GET['item']."'";

mysqli_query($conn,$s);
header("location: view_items.php");
?>