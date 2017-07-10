<?php
include "connection.php";
session_start();
$s = "select * from admins";
$result = mysqli_query($conn, $s);
$email=$_POST["textbox1"];
$pwdOld=$_POST["textbox2"];
$pwdNew=$_POST["textbox3"];
$confirm=$_POST["textbox4"];
$flag=0;
while ($row=mysqli_fetch_array($result)){
    if($row[1] == $pwdOld && $pwdNew == $confirm){
        $flag=1;
        break;
    }
}

if($flag==1){
    $s="update `admins` set `password`='".$pwdNew."' where `email`='".$email."'";
    mysqli_query($conn, $s);
    header("location: logout_admin.php");
}
else{
    header("location: pwd_admin.php");
}
?>