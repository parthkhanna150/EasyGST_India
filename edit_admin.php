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
    $s="select * from `admins` where `email`='".$_GET['adminsQ']."'";
    $result=mysqli_query($conn, $s);
    $row=mysqli_fetch_array($result);
    ?>
    <div class="row">
        <div class="col-sm-6">
            <form action="save_admin.php" method="post">
                <div class="form-group">
                    Enter Email Address
                    <input type="text" class="form-control" value="<?php echo $row[0]?>" name="textbox1">
                </div>
                <div class="form-group">
                    Enter Mobile Number
                    <input type="text" class="form-control" value="<?php echo $row[2]?>" name="textbox2">
                </div>
                <div class="form-group">
                    Enter Type
                    <select class="form-control" name="sell" value="<?php echo $row[3]?>">
                        <option>Admin</option>
                        <option>User</option>
                    </select>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success">
                </div>
            </form>
        </div>
        <div class="col-sm-6"></div>
    </div>
</div>
<?php
include 'footer.php';
?>
</body>
</html>