<!DOCTYPE html>
<html>
<head>
    <link href="css/bootstrap.css" rel="stylesheet">
    <script src="jquery-1.11.3.min.js"></script>
    <script src="dist/jquery.validate.js"></script>

    <script>
        $(document).ready(function () {
            $("#myForm1").validate()
        });

    </script>
</head>
<body>
<form action="" id="myForm1" method="post">
<div class="container">
    <?php
    include "user_header.php";
    include "connection.php";
    ?>
    <?php
    if(isset($_REQUEST['er']))
    {
        echo "<span class='text-danger'>".$_REQUEST['er']."</span>";
    }
    ?>

    <div class="col-sm-8 form-group">
            Choose product
        <?php
        $s="select * from products where user_email='".$_SESSION["username"]."'";
        $result = mysqli_query($conn,$s);
        $ans='<select class="form-control" id="pid"  name="prodID" required>';
        while($row = mysqli_fetch_array($result)){
            $ans=$ans."<option value='".$row[0]."'>".$row[1]."</option>";
        }
        $ans=$ans."</select>";
        echo $ans;
        ?>
        </div>
    <div class="col-sm-4 form-group">
        <div class="form-group">
        Quantity
        <input type="number" min="1" value="1" class="form-control" id="qty" name="quantity" style="width: 60%">
        </div>
        <div class="form-group">
            <input type="button" value="Go" onclick="getProducts()" class="btn btn-success">
        </div>
    </div>

    <div class="col-sm-8 form-group">
      <div id="products">

      </div>
    </div>
    <div class="col-sm-4">

        <div class="form-group">
            Retail Invoice <input type="radio" name="retail" value="retailInvoice">
            GST Invoice <input type="radio" name="retail" value="gstInvoice">
        </div>
        <div class="form-group">
            Enter Full Name
            <input type="text" class="form-control" name="nameRetail" data-msg-required="true" data-rule-required="true">
        </div>
        <div class="form-group">
            Enter Phone
            <input type="text" class="form-control" name="phoneRetail" data-msg-required="true" data-rule-required="true">
        </div>
        <div class="form-group">
            Enter Email
            <input type="text" class="form-control" name="emailRetail" date-rule-email="true" data-msg-required="true" data-rule-required="true">
        </div>
        <div class="form-group">
            Enter GST Number (optional)
            <input type="text" class="form-control" name="numberRetail">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>
    </div>
</div>
</form>
</body>
</html>