<?php

include "connection.php";

    $s="INSERT INTO `gst_r2`(`id`, `invoice_num`, `date`, `supplier`, `invoice_val`, `total_tax`, `state_tax`, `central_tax`, `itc`, `state`, `central`) VALUES (NULL ,'".$_POST["invoice_no"]."','".$_POST["date"]."','".$_POST["supplierId"]."','".$_POST["invoice_val"]."','".$_POST["tax"]."','".$_POST["stateTax"]."','".$_POST["centralTax"]."','".$_POST["itc_amt"]."','".$_POST["state"]."','".$_POST["central"]."')";
    mysqli_query($conn, $s);
    header("location: view_gstr2.php");
//echo $s;