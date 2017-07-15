<?php
include 'cart.php';
session_start();
include "connection.php";

$product_id=$_REQUEST['q'];
$qty=$_REQUEST['qty'];

$s="SELECT * FROM `products` INNER JOIN `items` ON `items`.`id`=`products`.`tax_id` where ID=".$product_id;
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result);
$ar=array();
$product_name=$row['name'];

if(isset($_SESSION['products']))
{

}
else
{
    if($row['stock']>$qty) {
        $ar[0] = new cart($product_id, $product_name, $row['photo'], $row['selling_price'], $row['CGST'], $row['SGST'], $row['iGST'], $row['mrp'], $row['stock'], $row['HSN_Code'], $qty);
        $_SESSION['products'] = $ar;
        print_r($ar);
        //header("Location:view_bill.php");
    }
    else
    {
        //header("Location:view_bill.php?er=Out of Stock. Available Stock is ".$row['stock']);
    }
}
