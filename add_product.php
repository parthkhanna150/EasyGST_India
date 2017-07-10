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
            var sell=document.getElementById('sell').value;
            alert('Choose values first!');
            if(str === '' || sell ===''){
                alert('Choose values first!');
            }

            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var output = this.responseText;
                    var split_output = output.split('-');
                    document.getElementById('cgst').value = split_output[0] +'%';
                    document.getElementById('sgst').value = split_output[1] +'%';
                    var sum = parseInt(split_output[0])+parseInt(split_output[1]);
                    var mrp = ((sell * total)/100)+parseInt(sell);
                    document.getElementById('igst').value=total+'%';
                    document.getElementById('mrp').value=mrp+'%';
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
    ?>
    <form action="insert_product.php" id="myForm1" method="post">
        <div class="form-group">
            Enter Product Name
            <input type="text" class="form-control" name="textbox1" data-rule-required="true" data-msg-required="Image cannot be blank">
        </div>
        <div class="form-group">
            Enter Description
            <input type="text" class="form-control" name="textbox2" data-rule-required="true" data-msg-required="Image cannot be blank">
        </div>
        <div class="form-group">
            Supplier Name
            <?php
            $s="select * from suppliers";
            $result = mysqli_query($conn,$s);
            $ans='<select class="form-control">';
            while($row = mysqli_fetch_array($result)){
                $ans=$ans."<option value='".$row[0]."'>".$row[1]."</option>";
            }
            $ans=$ans."</select>";
            echo $ans;
            ?>
        </div>
        <div class="form-group">
            Enter Stock
            <input type="text" class="form-control" name="textbox3" data-msg-required="Image cannot be blank" data-rule-required="true">
        </div>
        <div class="form-group">
            Upload Image
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            Enter Selling Price
            <input type="text" class="form-control" name="sell" data-msg-required="Image cannot be blank" data-rule-required="true">
        </div>
        <div class="form-group" id="str" onclick="showMRP(this.value)">
            Tax Slab
            <?php
            $s="select * from items";
            $result = mysqli_query($conn,$s);
            $ans='<select class="form-control">';
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
                <input type="text" class="form-control" name="cgst">
            </div>
            <div class="form-group col-sm-4">
                State GST
                <input type="text" class="form-control" name="sgst">
            </div>
            <div class="form-group col-sm-4">
                Total GST
                <input type="text" class="form-control" name="igst">
            </div>
        </div>
        <div class="form-group">
            MRP
            <input type="text" class="form-control" name="mrp">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-success">
        </div>
    </form>
</div>
</body>
</html>