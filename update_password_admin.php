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
    if($row[1] != $pwdOld){
        $flag=1;
        break;
    }
    if($pwdNew != $confirm) {
        $flag=2;
        break;
    }
}

if($flag==1) {
    header("location: pwd_admin.php?old=Input for old (current) password is incorrect");
}
elseif($flag==2){
    header("location: pwd_admin.php?passwords=Passwords don't match");
}
else{
    $s="update `admins` set `password`='".$pwdNew."' where `email`='".$email."'";
    mysqli_query($conn, $s);
    header("location: logout_admin.php");
}
