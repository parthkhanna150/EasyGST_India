<?php
session_start();
if(is_null($_SESSION["username"]))
{
    header("location: login_user.php");
}
?>
<div>
    <ul class="nav nav-pills">
        <li><a href="home_user.php">Home</a></li>
        <li><a href="pwd_user.php">Change Password</a></li>
        <li><a href="add_supplier.php">Add supplier</a></li>
        <li><a href="view_supplier.php">View Supplier</a></li>
        <li><a href="view_product.php">View Product</a></li>
        <li><a href="add_product.php">Add Product</a></li>
        <li><a href="logout_user.php">Log out</a></li>
    </ul>
</div>