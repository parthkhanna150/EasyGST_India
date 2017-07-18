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
        function showMRP(str){

            // debugger;
            var sell=document.getElementById('sell').value;
            //alert('Choose values first!');
            if(str == '' || sell ==''){
                alert('Choose values first!');
            }

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var output = this.responseText;
                    var split_output = output.split('-');
                    document.getElementById('cgst').value = split_output[0] +'%';
                    document.getElementById('sgst').value = split_output[1] +'%';
                    document.getElementById('igst').value = split_output[2] +'%';
                    var total = split_output[2];
                    var mrp = (parseInt(sell) * total)/100+parseInt(sell);
                    document.getElementById('mrp').value= mrp;
                }
            };
            xmlhttp.open("GET", "sumAjax.php?q="+str, true);
            xmlhttp.send();
        }
    </script>
</head>
<body>
<div class="container">
    <?php
    include "user_header.php";
    include "connection.php";
    $s="select * from `products` where `product_id`='". $_GET['prod'] . "'";
    $result=mysqli_query($conn, $s);
    $row=mysqli_fetch_array($result);
    ?>
    <form action="save_product.php" id="myForm1" method="post">
        <div class="form-group">
            Enter Product Name
            <input type="text" class="form-control" readonly name="textbox1" value="<?php echo $row[1] ?>" data-rule-required="true" data-msg-required="Image cannot be blank">
        </div>
        <div class="form-group">
            Enter Description
            <input type="text" class="form-control" name="textbox2" value="<?php echo $row[2] ?>" data-rule-required="true" data-msg-required="Image cannot be blank">
        </div>
        Supplier Name
        <?php
        $s="select * from suppliers where user_email='".$_SESSION["username"]."'";
        $result = mysqli_query($conn,$s);
        $ans='<select class="form-control" name="supplierId">';
        while($row = mysqli_fetch_array($result)){
            $ans=$ans."<option value='".$row[0]."'>".$row[1]."</option>";
        }
        $ans=$ans."</select>";
        echo $ans;
        ?>
<div class="form-group">
    <?php
    $s="select * from `products` where `product_id`='". $_GET['prod'] . "'";
    $result=mysqli_query($conn, $s);
    $row=mysqli_fetch_array($result);
    ?>
    Enter Stock
    <input type="text" class="form-control" name="textbox3" value="<?php echo $row[4]?>" data-msg-required="Image cannot be blank" data-rule-required="true">
</div>
<div class="form-group">
    Upload Image
    <input type="file" name="image" id="image">
</div>
<div class="form-group">
    Enter Selling Price
    <input type="text" class="form-control" value="<?php echo $row[6]?>" name="sell" id="sell">
</div>
<div class="form-group" >
    Tax Slab
    <?php
    $s="select * from items";
    $result = mysqli_query($conn,$s);
    $ans='<select class="form-control" name="str"  id="str" onchange="showMRP(this.value)">';
    $ans=$ans."<option>Choose</option>";
    while($row = mysqli_fetch_array($result)){
        $ans=$ans."<option value='".$row[0]."'>".$row[1]."</option>";
    }
    $ans=$ans."</select>";
    echo $ans;
    ?>
</div>
<div class="row">
    <div class="form-group col-sm-4">
        Central GST
        <input readonly type="text" class="form-control" name="cgst" id="cgst">
    </div>
    <div class="form-group col-sm-4">
        State GST
        <input readonly type="text" class="form-control" name="sgst" id="sgst">
    </div>
    <div class="form-group col-sm-4">
        Total GST
        <input readonly type="text" class="form-control" name="igst" id="igst">
    </div>
</div>
        <?php
        $s="select * from `products` where `product_id`='". $_GET['prod'] . "'";
        $result=mysqli_query($conn, $s);
        $row=mysqli_fetch_array($result);
        ?>
<div class="form-group">
    MRP
    <input readonly type="text" class="form-control" name="mrp" id="mrp">
</div>
<div class="form-group">
    <input type="submit" class="btn btn-success">
</div>
    </form>
</div>

</body>
</html>