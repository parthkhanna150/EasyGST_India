<?php

$Item=$_POST["textbox1"];
$CGST=$_POST["textbox2"];
$SGST=$_POST["textbox3"];
$HSN=$_POST["textbox4"];
$iGST=$CGST+$SGST;


$s="update `items` set `CGST`='".$CGST."', `SGST`='".$SGST."', `iGST`='".$iGST."',`HSN_Code`= '".$HSN."' where `item_name`='".$Item."'";
include "connection.php";
mysqli_query($conn, $s);

header("location: view_items.php");
?>