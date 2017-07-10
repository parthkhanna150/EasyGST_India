<?php
include "connection.php";
$query = $_REQUEST['q'];
$s="select * from items where item_name='".$query."'";

$result = mysqli_query($conn, $s);
$row = mysqli_fetch_array($result);

$cgst = $row[2];
$sgst = $row[3];

$output = $cgst. '-' . $sgst;

echo $output;
