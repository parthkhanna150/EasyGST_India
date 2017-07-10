<?php
session_start();
include "connection.php";

//  Get Foreign keys:
//  supplier ID
//  tax ID
$s = "select * from products";
$result = mysqli_query($conn, $s);
while ($row=mysqli_fetch_array($result)){
    if($row[0]==$_POST["textbox1"]){
        $flag=1;
        break;
    }
}
if($flag==1){
    header("location: add_product.php");
}
else{
    $s1 = "insert into products values(null,'".$_POST["textbox1"]."','".$_POST["textbox2"]."','".$_POST["supplierId"]."','".$_POST["textbox3"]."','".$_POST["fileToUpload"]."','".$_POST["sell"]."','".$_POST["str"]."','".$_POST["mrp"]."')";
    mysqli_query($conn, $s1);
    header("location: view_product.php");
}
