<?php
include 'connection.php';
$id=$_REQUEST['q'];
$s="select * from customers where id=".$id;
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result);
?>
<input type="hidden" id="customer_id" name="customer_id" value="<?php echo $row[0]; ?>">
<div class="form-group">
    Enter Full Name
    <?php echo $row[1]; ?>
</div>
<div class="form-group">
    Enter Phone
    <?php echo $row[2]; ?>
</div>
<div class="form-group">
    Enter Email
    <?php echo $row[3]; ?>
</div>
<div class="form-group">
    Enter GST Number (optional)
    <?php echo $row[4]; ?>
</div>
<div class="form-group">
    <input type="submit" class="btn btn-success">
</div>