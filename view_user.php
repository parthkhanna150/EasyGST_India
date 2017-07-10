<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <?php
    include "admin_header.php";
    include "connection.php";
    $s="select * from public_signup";
    $result=mysqli_query($conn, $s);
    $ans='<table class="table table-bordered">';
    while($row=mysqli_fetch_array($result)){
        $ans=$ans."<tr>";
        $ans=$ans."<td>".$row[0]."</td>";
        $ans=$ans."<td>".$row[2]."</td>";
        $ans=$ans."<td>".$row[3]."</td>";
        $ans=$ans."<td>".$row[4]."</td>";
        $ans=$ans."<td>".$row[5]."</td>";
        $ans=$ans."<td>".$row[6]."</td>";
        //$ans = $ans . '<td><a href="delete_public.php?public=' . $row[0] . '"><img style="height: 25px; width 20px;" src="remove.png"></a></td>';
        //$ans = $ans . '<td><a href="edit_public.php?public=' . $row[0] . '"><img style="height: 25px; width 25px;" src="edit.png"</a></td>';
        $ans=$ans."</tr>";
    }
    $ans=$ans."</table>";
    echo $ans;

    ?>
</div>

</body>
</html>