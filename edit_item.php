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
    $s="select * from `items` where `id`='". $_GET['item'] . "'";
    $result=mysqli_query($conn, $s);
    $row=mysqli_fetch_array($result);
    ?>
    <div class="row">
        <div class="col-sm-6">
            <form action="save_item.php" method="post">
                    <div class="form-group">
                        Enter item name
                        <input type="text" class="form-control" readonly value="<?php echo $row[1] ?>" name="textbox1">
                    </div>
                    <div class="form-group">
                        Enter CGST
                        <input type="text" class="form-control" value="<?php echo $row[2] ?>" name="textbox2">
                    </div>
                    <div class="form-group">
                        Enter SGST
                        <input type="text" class="form-control" value="<?php echo $row[3] ?>" name="textbox3">
                    </div>
                    <div class="form-group">
                        Enter HSN Code
                        <input type="text" class="form-control" value="<?php echo $row[5] ?>" name="textbox4">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success">
                    </div>
            </form>
        </div>
        <div class="col-sm-6"></div>
    </div>
</div>
</body>
</html>