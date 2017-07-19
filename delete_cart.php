<?php
include 'cart.php';
session_start();
$ar = $_SESSION['products'];
$ar1=array();
$id=$_REQUEST['q'];
$num=0;

for ($i = 0; $i < count($ar); $i++) {
 if($id!=$ar[$i]->id)
 {
     $ar1[$num]=$ar[$i];
     $num++;
 }
}

$_SESSION['products']=$ar1;
header("Location:view_bill.php");