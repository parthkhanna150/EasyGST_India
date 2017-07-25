<?php
include "connection.php";
$s="delete from `admins` WHERE `email` ='".$_GET['adminsQ']."'";

mysqli_query($conn,$s);
header("location: view_admin.php");
?>