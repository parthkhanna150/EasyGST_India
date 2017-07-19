<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php
include "user_header.php";
?>
<div class="container">

    <div class="row">
        <div class="col-sm-6">
            <form action="update_password_user.php" method="post">
                <div class="form-group">
                    Enter Email Address
                    <input type="text" readonly value="<?php echo $_SESSION["username"]?>" class="form-control"  name="textbox1">
                </div>
                <div class="form-group">
                    Enter old password
                    <input type="password" class="form-control" name="textbox2">
                </div>
                <div class="form-group">
                    Enter new password
                    <input type="password" class="form-control" name="textbox3">
                </div>
                <div class="form-group">
                    Confirm new password
                    <input type="password" class="form-control" name="textbox4">
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