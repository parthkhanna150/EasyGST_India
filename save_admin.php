<?php

$email=$_POST["textbox1"];
$mob=$_POST["textbox2"];
$type=$_POST["sell"];


$s="update `admins` set `mobile_number`='".$mob."',`type`= '".$type."' where `email`='".$email."'";
include "connection.php";
mysqli_query($conn, $s);
header("location: view_admin.php")

?>