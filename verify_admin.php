<?php
include "connection.php";
session_start();
$s = "select * from admins";
$result = mysqli_query($conn, $s);
$flag=0;
while ($row=mysqli_fetch_array($result)){
    if($row[0]==$_POST["textbox1"] && $row[1]==$_POST["textbox2"]){
        $flag=1;
        break;
    }
}
if($flag==0){
    header("location: login_admin.php");
}
else {
    $_SESSION["adminName"]=$_POST["textbox1"];
    header("location: home_admin.php");


}
