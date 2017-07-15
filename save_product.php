<?php
session_start();

$photo = addslashes($_FILES['image']['name']);
$tmp= addslashes(file_get_contents($_FILES['image']['tmp_name']));
//$size=$_FILES['photo']['size'];
$path='images/'.$photo;

$ext = pathinfo($photo, PATHINFO_EXTENSION);
//echo $ext ." ". $tmp;
if($ext=='jpg' || $ext=='gif' || $ext=='png'){
    move_uploaded_file($tmp, $path);
    echo "Name is ".$photo."<br>";
}

$s="update `products` set `description`='".$_POST["textbox2"]."', `supplier_id`='".$_POST["supplierId"]."',`stock`= '".$_POST["textbox3"]."', `photo`='".$path."', `selling_price`='".$_POST["sell"]."',`tax_id`='".$_POST["str"]."',`mrp`='".$_POST["mrp"]."' where `name`='".$_POST["textbox1"]."'";
include "connection.php";
mysqli_query($conn, $s);
//    echo $s1;
//    echo $path;
header("location: view_product.php");
//header("location: view_product.php");
?>