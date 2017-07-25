<?php

include "connection.php";

$s = "select * from public_signup";
$result = mysqli_query($conn, $s);
$email=$_POST["textbox1"];
$pwdNew=$_POST["textbox2"];
$pwdConf=$_POST["textbox3"];
$mob=$_POST["textbox4"];
$address=$_POST["textbox5"];
$gender=$_POST["textbox6"];
$entity=$_POST["textbox7"];
$gstno=$_POST["textbox8"];

$flag=0;
while ($row=mysqli_fetch_array($result)){
    if($row[0]==$_POST["textbox1"]){
        $flag=1;
        break;
    }
    elseif($pwdConf!=$pwdNew){
        $flag=2;
        break;
    }
}
if($flag==1)
    header('Location:add_user.php?emails=User with this email already exists!');
elseif ($flag==2)
    header('Location:add_user.php?passwords=Passwords do not match!');
else{
    $s1 = "insert into public_signup values('".$email."','".$pwdNew."','".$mob."','".$address."','".$gender."','".$entity."','".$gstno."')";
    mysqli_query($conn, $s1);
    header("location: login_user.php");
}
