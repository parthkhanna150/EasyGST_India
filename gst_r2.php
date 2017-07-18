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
include "user_header.php"
?>
<div class="container">
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
    <form action="insert_gstr2.php" method="post">
        <div class="form-group">
            Invoice Number
            <input type="text" class="form-control" name="invoice_no" id="invoice_no">
        </div>
        <div class="form-group">
            Date
            <input type="date" class="form-control" name="date" id="date">
        </div>
        <div class="form-group">
            Supplier
            <?php
            $s="select * from suppliers where user_email='".$_SESSION["username"]."'";
            $result = mysqli_query($conn,$s);
            $ans='<select class="form-control"  name="supplierId">';
            while($row = mysqli_fetch_array($result)){
                $ans=$ans."<option value='".$row[0]."'>".$row[1]."</option>";
            }
            $ans=$ans."</select>";
            echo $ans;
            ?>
        </div>
        <div class="form-group">
            Invoice Value
            <input type="text" class="form-control" name="invoice_val" id="invoice_val">
        </div>
        <div class="form-group">
            Tax Value
            <input type="text" class="form-control" name="tax" id="tax">
        </div>
        <div class="form-group">
            State Tax
            <input type="text" class="form-control" name="stateTax" id="stateTax">
        </div>
        <div class="form-group">
            Central Tax
            <input type="text" class="form-control" name="centralTax" id="centralTax">
        </div>
        <div class="form-group">
            ITC Amount
            <input type="text" class="form-control" name="itc_amt" id="itc_amt">
        </div>
        <div class="form-group">
            State
            <input type="text" class="form-control" name="state" id="state">
        </div>
        <div class="form-group">
            Central
            <input type="text" class="form-control" name="central" id="central">
        </div>
        <div class="form-group">
            <input type="button" value="submit" class="btn btn-success">
        </div>
    </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</div>
</body>
</html>