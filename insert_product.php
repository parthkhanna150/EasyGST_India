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

if ($ext=='jpg' || $ext=='gif' || $ext=='png')
{
    move_uploaded_file($image, "$path");
    //header("location: add_product.php?er=1");
}

$s = "select * from products where user_email='".$_SESSION["username"]."'";
$result = mysqli_query($conn, $s);
$flag=0;
while ($row=mysqli_fetch_array($result)){
    if($row[1]==$_POST["textbox1"]){
        $flag=1;
        break;
    }
}

if($flag==1){
   header("location: add_product.php?er=3");
}
else
{
        $s1 = "insert into products values(null,'".$_POST["textbox1"]."','".$_POST["textbox2"]."','".$_POST["supplierId"]."','".$_POST["textbox3"]."','".$path."','".$_POST["sell"]."','".$_POST["str"]."','".$_POST["mrp"]."','".$_SESSION["username"]."')";
        mysqli_query($conn, $s1);

        header("location: add_product.php?er=2");

}
