<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php
include "admin_header.php";
?>
<div class="container">
    <?php
    include "connection.php";
    $s="select * from public_signup";
    $result=mysqli_query($conn, $s);
    ?><br>
    <?php
    $ans='<table class="table table-bordered">';
    $ans=$ans."<tr>";
    $ans=$ans."<th>User Email</th>";
    $ans=$ans."<th>Mobile No.</th>";
    $ans=$ans."<th>Address</th>";
    $ans=$ans."<th>Sex</th>";
    $ans=$ans."<th>Entity Name</th>";
    $ans=$ans."<th>GST No.</th>";
    $ans=$ans."</tr>";
    while($row=mysqli_fetch_array($result)){
        $ans=$ans."<tr>";
        $ans=$ans."<td>".$row[0]."</td>";
        $ans=$ans."<td>".$row[2]."</td>";
        $ans=$ans."<td>".$row[3]."</td>";
        $ans=$ans."<td>".$row[4]."</td>";
        $ans=$ans."<td>".$row[5]."</td>";
        $ans=$ans."<td>".$row[6]."</td>";
        $ans=$ans."</tr>";
    }
    $ans=$ans."</table>";
    echo $ans;

    ?>
</div>
<?php
include 'footer.php';
?>
</body>
</html>