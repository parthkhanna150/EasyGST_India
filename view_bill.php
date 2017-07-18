<?php
include 'cart.php';
?>
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
<form action="insert_bill.php" id="myForm1" method="post">
    <div class="container">
        <?php
        include "user_header.php";
        include "connection.php";
            if (isset($_REQUEST['q'])) {
                echo "<span class='text-danger'>" . $_REQUEST['q'] . "</span>";
            }
        ?>


        <div class="col-sm-8 form-group">
            Choose product
            <?php
            $s = "select * from products where user_email='" . $_SESSION["username"] . "'";
            $result = mysqli_query($conn, $s);
            $ans = '<select class="form-control" id="pid"  name="prodID" required>';
            $ans .= "<option>--Choose--</option>";
            while ($row = mysqli_fetch_array($result)) {
                $ans = $ans . "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
            }
            $ans = $ans . "</select>";
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
            <?php
            if (isset($_REQUEST['msg']))
            {
                echo '<span class="text-success">'.$_REQUEST['msg'].'</span>';
            }
            $ar = array();
            if (isset($_SESSION['products'])) {
                $ar = $_SESSION['products'];
                ?>
                <table class="table table-responsive table-bordered">
                    <tr>
                        <th>Sr No.</th>
                        <th>HSN Code</th>
                        <th>Product Name</th>
                        <th>Photo</th>
                        <th>Price</th>
                        <th>CGST</th>
                        <th>SGST</th>
                        <th>Total GST</th>
                        <th>MRP</th>
                        <th>Quantity</th>
                        <th>Sub Total</th>
                        <th>Delete</th>
                    </tr>
                    <?php
                    $j = 0;
                    $total = 0;
                    for ($i = 0; $i < count($ar); $i++) {
                        $total += $ar[$i]->mrp * $ar[$i]->qty;
                        ?>
                        <tr>
                            <td><?php echo $i + 1; ?></td>
                            <td><?php echo $ar[$i]->hsn; ?></td>
                            <td><?php echo $ar[$i]->product_name; ?></td>
                            <td><img src="><?php echo $ar[$i]->photo; ?>" height="50" width="50"></td>
                            <td><?php echo $ar[$i]->price; ?></td>
                            <td><?php echo $ar[$i]->cgst; ?></td>
                            <td><?php echo $ar[$i]->sgst; ?></td>
                            <td><?php echo $ar[$i]->tgst; ?></td>
                            <td><?php echo $ar[$i]->mrp; ?></td>
                            <td><?php echo $ar[$i]->qty; ?></td>
                            <td><?php echo $ar[$i]->qty * $ar[$i]->mrp; ?></td>
                            <td>Delete</td>
                        </tr>
                        <?php
                    }
                    ?>
                </table>
                <?php
            }
            ?>    </div>
        <div class="col-sm-4">

            <div class="form-group">
                Retail Invoice <input type="radio" name="retail" checked value="retailInvoice">
                GST Invoice <input type="radio" name="retail" value="gstInvoice">
            </div>
            <div id="retail_invoice">
                <div class="form-group">
                    Enter Full Name
                    <input type="text" class="form-control" name="fullname" data-msg-required="true"
                           data-rule-required="true">
                </div>
                <div class="form-group">
                    Enter Phone
                    <input type="text" class="form-control" name="phoneRetail" data-msg-required="true"
                           data-rule-required="true">
                </div>
                <div class="form-group">
                    Enter Email
                    <input type="text" class="form-control" name="emailRetail" date-rule-email="true"
                           data-msg-required="true" data-rule-required="true">
                </div>
                <div class="form-group">
                    Enter GST Number (optional)
                    <input type="text" class="form-control" name="numberRetail">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success">
                </div>
            </div>
            <div id="gst_invoice" style="display: none">
                <select name="cust_id" class="form-control" onchange="show_customers(this.value)">
                    <option>--Choose--</option>
                    <?php
                    $cust="select * from customers";
                    $cust_result=mysqli_query($conn,$cust);
                    while ($cust_row=mysqli_fetch_array($cust_result))
                    {
                        ?>
                        <option value="<?php echo $cust_row[0] ?>"><?php echo $cust_row[1]; ?></option>
                        <?php
                    }
                    ?>
                </select>
                <div id="get_cust"></div>
            </div>
        </div>
    </div>
</form>
</body>
</html>