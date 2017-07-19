<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="jquery-1.11.3.min.js"></script>
    <script src="dist/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
            $("#myForm1").validate()
        })
    </script>
</head>
<body>
<?php
include "connection.php";
include "user_header.php";
$s = "select * from suppliers INNER JOIN gst_r2 ON gst_r2.supplier=suppliers.ID WHERE user_email='".$_SESSION["username"]."'";
$result = mysqli_query($conn, $s);

$ans = '<table class="table table-responsive table-bordered">';
$ans = $ans . "<tr>";
$ans = $ans . "<td rowspan=\"2\">GSTIN/UIN of Supplier</td>";
$ans = $ans . "<td colspan=\"3\">Invoice Details</td>";
$ans = $ans . "<td rowspan=\"2\">Tax</td>";
$ans = $ans . "<td colspan=\"3\">Amount of tax</td>";
$ans = $ans . "<td rowspan=\"2\">Place of supply</td>";
$ans = $ans . "<td rowspan=\"2\">ITC Amount</td>";
$ans = $ans . "<td colspan=\"3\">Amount of ITC available</td>";
$ans = $ans . "</tr>";

$ans = $ans . "<tr>";
$ans = $ans . "<th > No .</th >";
$ans = $ans . "<th > Date </th >";
$ans = $ans . " <th > Value</th >";
$ans = $ans . "<th > Integrated Tax </th >";
$ans = $ans . "<th > Central Tax </th >";
$ans = $ans . "<th > State Tax </th >";
$ans = $ans . "<th > Integrated Tax </th >";
$ans = $ans . "<th > Central Tax </th >";
$ans = $ans . "<th > State Tax </th >";
$ans = $ans . "</tr>";

while ($row = mysqli_fetch_array($result)) {
    $ans = $ans . "<tr>";
    $ans = $ans . "<td>" . $row[2] . "</td>";
    $ans = $ans . "<td>" . $row[9] . "</td>";
    $ans = $ans . "<td>" . $row[10] . "</td>";
    $ans = $ans . "<td>" . $row[12] . "</td>";
    $ans = $ans . "<td>" . $row[13] . "</td>";
    $ans = $ans . "<td>" . $row[13] . "</td>";
    $ans = $ans . "<td>" . $row[15] . "</td>";
    $ans = $ans . "<td>" . $row[14] . "</td>";
    $ans = $ans . "<td>" . $row[1] . "</td>";
    $ans = $ans . "<td>" . $row[16] . "</td>";
    $ans = $ans . "<td>" . $row[16] . "</td>";
    $ans = $ans . "<td>" . $row[18] . "</td>";
    $ans = $ans . "<td>" . $row[17] . "</td>";
}

$ans=$ans."</table>";
echo $ans;

?>
<?php
include 'footer.php';
?>
</body>
</html>
