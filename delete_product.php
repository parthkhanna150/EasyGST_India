<?php
session_start();
include "connection.php";
$s="delete from `products` WHERE `product_id` ='".$_GET['prod']."'";

mysqli_query($conn,$s);
header("location: view_product.php");
?>