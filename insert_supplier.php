<?php
session_start();
include "connection.php";
$s = "select * from suppliers";
$result = mysqli_query($conn, $s);
while ($row=mysqli_fetch_array($result)){
    if($row[1]==$_POST["textbox1"]){
        $flag=1;
        break;
    }
}
if($flag==1){
    header("location: add_supplier.php?names=Supplier with same name already present");
}
else{
    $s1 = "insert into suppliers values(null,'".$_POST["textbox1"]."','".$_POST["textbox2"]."','".$_POST["textbox3"]."','".$_POST["textbox4"]."','".$_POST["textbox5"]."','".$_POST["textbox6"]."','".$_SESSION["username"]."')";
    mysqli_query($conn, $s1);
    header("location: view_supplier.php");
}
