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
include "user_header.php";
$s="select * from public_signup WHERE email='".$_SESSION["username"]."'";
$result = mysqli_query($conn,$s);
$row = mysqli_fetch_array($result);
?>
<div class="container">
<table class="table table-responsive table-bordered">
    <form action="" method="post">
        <tr>
            <th style="text-align: center" colspan="13"><h1>Form GST R-1</h1></th>
        </tr>
        <tr>
            <td colspan="13">Details of outward supplies</td>
        </tr>
        <tr>
            <th>1</th>
            <td colspan="2">GSTIN</td>
            <td colspan="10"><?php echo $row[6] ?></td>
        </tr>
        <tr>
            <th>2</th>
            <td colspan="2">Name of the taxable person</td>
            <td colspan="10"><?php echo $row[5] ?></td>
        </tr>
        <tr>
            <th>3</th>
            <td colspan="2">Aggregate Turnover of the Taxable Person in the Previous Financial Year</td>
            <td colspan="10"><input class="form-control" name="turnover" type="text"></td>
        </tr>
        <tr>
            <th>4</th>
            <td colspan="2">Period:</td>
            <td colspan="10">
                FROM&nbsp;<input class="form-control" name="from" id="from" type="date">&nbsp;TO&nbsp;<input
                        class="form-control" name="to" id="to" type="date">
                <input type="submit" value="Go" class="btn btn-success">
            </td>
        </tr>
    </form>
    <tr>
        <th>5</th>
        <th colspan="12">Taxable Outward Supplies to a Registered Person</th>
    </tr>
    <tr>
        <th>GSTIN/UIN</th>
        <td colspan="6">Invoice</td>
        <td colspan="2">IGST</td>
        <td colspan="2">CGST</td>
        <td colspan="2">SGST</td>
    </tr>
    <tr>
        <th></th>
        <th>No.</th>
        <th>Date</th>
        <th>Value</th>
        <th>Goods/Services</th>
        <th>HSN/SAC</th>
        <th>Taxable value</th>
        <th>Rate</th>
        <th>Amount</th>
        <th>Rate</th>
        <th>Amount</th>
        <th>Rate</th>
        <th>Amount</th>
    </tr>
    <?php
    if (isset($_REQUEST['from']) && isset($_REQUEST['to'])) {
        $from = $_REQUEST['from'];
        $to = $_REQUEST['to'];
        $bill = "select * from bill where email='" . $username . "' and bill_date between '" . $from . "' and '" . $to . "'";
        $bill_result = mysqli_query($conn, $bill);
        while ($bill_row = mysqli_fetch_array($bill_result)) {
            $products="select count(id) as id from bill_details where bill_id=".$bill_row[0];
            $products_result=mysqli_query($conn,$products);
            $products_row=mysqli_fetch_array($products_result);
            $row_count=$products_row['id'];

            $bill_detail="SELECT * FROM products LEFT JOIN items ON items.id=products.tax_id RIGHT JOIN bill_details ON bill_details.product_id=products.product_id WHERE bill_id= ".$bill_row[0]." LIMIT 0,1 ";
            $bill_detail_result=mysqli_query($conn,$bill_detail);
            $bill_detail_row=mysqli_fetch_array($bill_detail_result);
            ?>
            <tr>
                <td <?php if($row_count>1) { ?>rowspan="<?php echo $row_count ?>" <?php } ?>></td>
                <td <?php if($row_count>1) { ?>rowspan="<?php echo $row_count ?>" <?php } ?>><?php echo $bill_row[0]; ?></td>
                <td <?php if($row_count>1) { ?>rowspan="<?php echo $row_count ?>" <?php } ?>><?php echo $bill_row['bill_date']; ?></td>
                <td <?php if($row_count>1) { ?>rowspan="<?php echo $row_count ?>" <?php } ?>><?php echo $bill_row['total']; ?></td>
                <td <?php if($row_count>1) { ?>rowspan="<?php echo $row_count ?>" <?php } ?>>Goods</td>
                <td><?php echo $bill_detail_row['HSN_Code']; ?></td>
                <td><?php echo $bill_detail_row['selling_price']; ?></td>
                <td><?php echo $bill_detail_row['iGST']; ?></td>
                <td><?php echo ($bill_detail_row['iGST']*$bill_detail_row['selling_price'])/100; ?></td>
                <td><?php echo $bill_detail_row['CGST']; ?></td>
                <td><?php echo ($bill_detail_row['CGST']*$bill_detail_row['selling_price'])/100; ?></td>
                <td><?php echo $bill_detail_row['SGST']; ?></td>
                <td><?php echo ($bill_detail_row['SGST']*$bill_detail_row['selling_price'])/100; ?></td>
            </tr>
            <?php
            $num=1;
            $tax="SELECT * FROM products LEFT JOIN items ON items.id=products.tax_id RIGHT JOIN bill_details ON bill_details.product_id=products.product_id WHERE bill_id= ".$bill_row[0];
            $tax_result=mysqli_query($conn,$tax);
            $ar=array();
            while ($tax_row=mysqli_fetch_array($tax_result))
            {
                $ar[$num]=$tax_row;
                $num++;
            }


            for($i=1;$i<$row_count;$i++)
            {
                //echo "<br>".$ar[$i]['iGST']."<br>";
                ?>
                <tr>
                    <td><?php echo $ar[$i]['HSN_Code']; ?></td>
                    <td><?php echo $ar[$i]['selling_price']; ?></td>
                    <td><?php echo $ar[$i]['iGST']; ?></td>
                    <td><?php echo ($ar[$i]['iGST']*$ar[$i]['selling_price'])/100; ?></td>
                    <td><?php echo $ar[$i]['CGST']; ?></td>
                    <td><?php echo ($ar[$i]['CGST']*$ar[$i]['selling_price'])/100; ?></td>
                    <td><?php echo $ar[$i]['SGST']; ?></td>
                    <td><?php echo ($ar[$i]['SGST']*$ar[$i]['selling_price'])/100; ?></td>
                </tr>
    <?php
            }
        }


    }
    ?>
</table>
</div>
<?php
include 'footer.php';
?>
</body>
</html>