<?php
session_start();

$s="update `products` set `description`='".$_POST["textbox2"]."', `supplier_id`='".$_POST["supplierId"]."',`stock`= '".$_POST["textbox3"]."', `photo`='".$_POST["fileToUpload"]."', `selling_price`='".$_POST["sell"]."',`tax_id`='".$_POST["str"]."',`mrp`='".$_POST["mrp"]."' where `name`='".$_POST["textbox1"]."'";
include "connection.php";
mysqli_query($conn, $s);
echo $s;
//header("location: view_product.php");
?>