<?php
include "connection.php";
session_start();
$s = "select * from public_signup";
$result = mysqli_query($conn, $s);
$flag=0;
while ($row=mysqli_fetch_array($result)){
    if($row[0]==$_POST["textbox1"] && $row[1]==$_POST["textbox2"]){
        $flag=1;
        break;
    }
}
if($flag==0){
    header("location: login_user.php");
}
else{
    $_SESSION["username"]=$_POST["textbox1"];
    header("location: home_user.php");
}
