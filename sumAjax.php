<?php
include "connection.php";
$query = $_REQUEST['q'];
$s="select * from items where id='".$query."'";

$result = mysqli_query($conn, $s);
$row = mysqli_fetch_array($result);

$cgst = $row[2];
$sgst = $row[3];
$igst = $row[4];

$output = $cgst. '-' . $sgst . '-' . $igst;

echo $output;
