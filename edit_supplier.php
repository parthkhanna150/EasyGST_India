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
<?php     include "user_header.php";
?>
<div class="container">
    <?php
    include "connection.php";
    $s="select * from `suppliers` where `id`='". $_GET['supp'] . "'";
    $result=mysqli_query($conn, $s);
    $row=mysqli_fetch_array($result);
    ?>
    <form action="save_supplier.php" id="myForm1" method="post">
        <div class="form-group">
            Enter Name
            <input type="text" class="form-control" name="textbox1" value="<?php echo $row[1]?>" data-rule-required="true" data-msg-required="Image cannot be blank">
        </div>
        <div class="form-group">
            Enter GST number
            <input type="text" readonly class="form-control" value="<?php echo $row[2]?>" name="textbox2">
        </div>
        <div class="form-group">
            Enter Address
            <input type="text" class="form-control" name="textbox3" value="<?php echo $row[3]?>" data-rule-required="true" data-msg-required="Image cannot be blank">
        </div>
        <div class="form-group">
            Enter PAN Number
            <input type="text" readonly class="form-control" value="<?php echo $row[4]?>" name="textbox4" data-msg-required="Image cannot be blank" data-rule-required="true">
        </div>
        <div class="form-group">
            Enter mobile number
            <input type="text" class="form-control" name="textbox5" value="<?php echo $row[5]?>" data-msg-required="Image cannot be blank" data-rule-required="true">
        </div>
        <div class="form-group">
            Enter Email Address
            <input type="text" class="form-control" name="textbox6" value="<?php echo $row[6]?>" data-msg-required="Image cannot be blank" data-rule-required="true" data-rule-email="true">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>
    </form>
</div>
<?php
include 'footer.php';
?>
</body>
</html>