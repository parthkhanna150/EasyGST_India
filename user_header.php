<?php
session_start();
if(is_null($_SESSION["username"]))
{
    header("location: login_user.php");
}
?>
<script type="text/javascript" src="js/myscript.js"></script>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home_user.php">GST Assistant</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="home_user.php">Home</a></li>
                <li><a href="add_product.php">Add Product</a></li>
                <li><a href="view_product.php">View Product</a></li>
                <li><a href="view_supplier.php">View Supplier</a></li>
                <li><a href="view_bill.php">Billing</a></li>
                <li><a href="pwd_user.php">Change Password</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="add_supplier.php"><span class="glyphicon glyphicon-user"></span> Add Supplier</a></li>
                <li><a href="logout_user.php"><span class="glyphicon glyphicon-log-in"></span> logout</a></li>
            </ul>
        </div>
    </div>
</nav>
