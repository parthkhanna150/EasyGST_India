<?php
session_start();
include "connection.php";
$image = $_FILES['image']['tmp_name']; //SQL Injection defence!
$image_name = $_FILES['image']['name'];
//$size=$_FILES['photo']['size'];
$path='images/'.$image_name;

echo $image ." ". $image_name;

$ext = pathinfo($image_name, PATHINFO_EXTENSION);

echo "<br>".$ext."<br>";

if ($ext=='jpg' || $ext=='gif' || $ext=='png') {
    move_uploaded_file($image, "$path");
//    header("location: view_product.php");
}
//$s1="UPDATE `products` SET `name`=[value-2],`description`=[value-3],`supplier_ID`=[value-4],
//`stock`=[value-5],`photo`=[value-6],`selling_price`=[value-7],`tax_id`=[value-8],`mrp`=[value-9],`user_email`=[value-10] WHERE `product_id`='".."'";
    $s = "update `products` set `description`='" . $_POST["textbox2"] . "', `supplier_ID`='" . $_POST["supplierId"] . "',`stock`= '" . $_POST["textbox3"] . "', `photo`='" . $path . "', `selling_price`='" . $_POST["sell"] . "',`tax_id`='" . $_POST["str"] . "',`mrp`='" . $_POST["mrp"] . "',`user_email`='" . $_SESSION["username"] . "' where `name`='" . $_POST["textbox1"] . "'";
    mysqli_query($conn, $s);
    header("location: view_product.php");

?>