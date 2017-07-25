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
    $s="select * from admins";
    $result=mysqli_query($conn, $s);
    ?><br>
    <?php
    $ans='<table class="table table-bordered">';
    $ans=$ans."<tr>";
    $ans=$ans."<th>Email</th>";
    $ans=$ans."<th>Mobile No.</th>";
    $ans=$ans."<th>Access Type</th>";
    $ans=$ans."<th>Delete</th>";
    $ans=$ans."<th>Edit</th>";
    $ans=$ans."</tr>";
    while($row=mysqli_fetch_array($result)){
        $ans=$ans."<tr>";
        $ans=$ans."<td>".$row[0]."</td>";
        $ans=$ans."<td>".$row[2]."</td>";
        $ans=$ans."<td>".$row[3]."</td>";
        $ans = $ans . '<td><a href="delete_admin.php?adminsQ=' . $row[0] . '"><img style="height: 25px; width 20px;" src="remove.png"></a></td>';
        $ans = $ans . '<td><a href="edit_admin.php?adminsQ=' . $row[0] . '"><img style="height: 25px; width 25px;" src="edit.png"</a></td>';
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