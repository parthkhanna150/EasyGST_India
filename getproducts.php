<?php
include 'cart.php';
session_start();
include "connection.php";

$product_id = $_REQUEST['q'];
$qty = $_REQUEST['qty'];

$s = "SELECT * FROM `products` INNER JOIN `items` ON `items`.`id`=`products`.`tax_id` where `products`.`product_id`=" . $product_id;
$result = mysqli_query($conn, $s);
echo $s;
$row = mysqli_fetch_array($result);
$ar = array();
$product_name = $row['name'];

if (isset($_SESSION['products'])) {
    $ar = $_SESSION['products'];
    $flag = 0;
    $index = 0;
    $quantity = 0;
    for ($i = 0; $i < count($ar); $i++) {
        if ($ar[$i]->id == $product_id) {
            $flag = 1;
            $index = $i;
            $quantity = $ar[$i]->qty;
            break;
        }
    }
    if ($flag == 1) {

        $total_qty = $qty + $quantity;
        if ($row['stock'] > $total_qty) {
             $ar[$index]->qty=$total_qty;
            header("location:view_bill.php");
        } else
            header("location: view_bill.php?q=Out of stock. Available stock is" . $row['stock']);
    } else {
        if ($row['stock'] >= $qty) {
            $ar[count($ar)] = new cart($product_id, $product_name, $row['photo'], $row['selling_price'], $row['CGST'], $row['SGST'], $row['iGST'], $row['mrp'], $row['stock'], $row['HSN_Code'], $qty);
            $_SESSION['products'] = $ar;
            print_r($ar);
            header("Location:view_bill.php");
        } else {
            header("Location:view_bill.php?q=Out of Stock. Available Stock is " . $row['stock']);
        }
    }
} else {
    if ($row['stock'] >= $qty) {
        $ar[0] = new cart($product_id, $product_name, $row['photo'], $row['selling_price'], $row['CGST'], $row['SGST'], $row['iGST'], $row['mrp'], $row['stock'], $row['HSN_Code'], $qty);
        $_SESSION['products'] = $ar;
        print_r($ar);
        header("Location:view_bill.php");
    } else {
        header("Location:view_bill.php?q=Out of Stock. Available Stock is " . $row['stock']);
    }
}


