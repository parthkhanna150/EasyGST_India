<?php
include 'cart.php';
session_start();
//include 'user_header.php';
include 'connection.php';
$total = 0;
$ar = array();

$ar = $_SESSION['products'];

for ($i = 0; $i < count($ar); $i++) {
//    echo "<br>".$total."<br>";
    $total += $ar[$i]->mrp * $ar[$i]->qty;
}

$retail=$_REQUEST['retail'];
$fullname=$_REQUEST['fullname'];
$phoneRetail=$_REQUEST['phoneRetail'];
$emailRetail=$_REQUEST['emailRetail'];
$numberRetail=$_REQUEST['numberRetail'];

//echo $total;
if($retail=='retailInvoice')
{
    $s="INSERT INTO `customers`(`id`, `cust_name`, `phone`, `email`, `gstno`, `user_email`) 
VALUES (NULL ,'".$fullname."','".$phoneRetail."','".$emailRetail."','".$numberRetail."','".$_SESSION["username"]."')";
    mysqli_query($conn,$s);
//    echo $s;
    $cust="select MAX(id) as id from customers";
    $cust_result=mysqli_query($conn,$cust);
    $cust_row=mysqli_fetch_array($cust_result);
    $cust_id=$cust_row['id'];
}
else
{
    $cust_id=$_REQUEST['customer_id'];
}
date_default_timezone_set('Asia/Kolkata');
$dt=date('Y-m-d');
$tym=date('H:i:s');

$bill="INSERT INTO `bill`(`id`, `total`, `cust_id`, `bill_date`, `bill_time`, `email`, `bill_type`) 
VALUES (NULL ,'".$total."','".$cust_id."','".$dt."','".$tym."','".$_SESSION["username"]."','".$retail."')";
mysqli_query($conn,$bill);
//echo $bill;
$bil="select MAX(`id`) as id from `bill`";
$bil_result=mysqli_query($conn,$bil);
$bil_row=mysqli_fetch_array($bil_result);
//echo $bil_row['id'];
//echo count($ar);
for ($i = 0; $i < count($ar); $i++) {

    $bill_detail="INSERT INTO `bill_details`(`id`, `bill_id`, `product_id`, `price`, `cgst`, `sgst`, `total_gst`, `mrp`, `qty`) 
VALUES (NULL ,'".$bil_row['id']."','".$ar[$i]->id."','".$ar[$i]->price."','".$ar[$i]->cgst."','".$ar[$i]->sgst."','".$ar[$i]->tgst."','".$ar[$i]->mrp."','".$ar[$i]->qty."')";
    mysqli_query($conn,$bill_detail);

//    echo $bill_detail;
    $pro="select * from products where `product_id`=".$ar[$i]->id;
    $pro_result=mysqli_query($conn,$pro);
    $pro_row=mysqli_fetch_array($pro_result);
    $stock=$pro_row['stock'];
    $qty=$stock-$ar[$i]->qty;

    $update="UPDATE `products` SET `stock`=$qty WHERE `product_id`=".$ar[$i]->id;
    mysqli_query($conn,$update);
}
$_SESSION['products']=null;
header('Location:view_bill.php?msg=Thank You for Purchase with us');