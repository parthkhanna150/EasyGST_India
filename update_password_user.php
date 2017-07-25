<?php
include "connection.php";
session_start();
$s = "select * from public_signup";
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

if($flag==1){
    header("location: pwd_user.php?old=Input for old (current) password is incorrect");
}
if($flag==2){
    header("location: pwd_user.php?passwords=Passwords don't match");
}
else {
    $s = "update `public_signup` set `password`='" . $pwdNew . "' where `email`='" . $email . "'";
    mysqli_query($conn, $s);
    header("location: logout_user.php");
}