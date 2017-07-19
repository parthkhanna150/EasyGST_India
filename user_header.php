<?php
session_start();
if (is_null($_SESSION["username"])) {
    header("location: login_user.php");
} else {
    $username = $_SESSION["username"];
}
?>

<?php
include 'header_files.php';
?>
<!-- banner -->
<div class="banner">
    <!--header-->
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a href="index.html">Net <span>Banking</span></a></h1>
                </div>
                <!--navbar-header-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="home_user.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Supplier <span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="view_supplier.php">View Supplier</a></li>
                                <li><a href="add_supplier.php"> Add Supplier</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Product <span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="view_product.php">View Product</a></li>
                                <li><a href="add_product.php">Add Product</a></li>
                            </ul>
                        </li>
                        <li><a href="view_bill.php">Billing</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reporting<span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="gst_r1.php">GST R-1 form</a></li>
                                <li><a href="gst_r2.php">GST R-2 form</a></li>
                            </ul>
                        </li>
                        <li><a href="view_gstr2.php">GSTR-2</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="pwd_user.php">Change Password</a></li>
                                <li><a href="logout_user.php"> logout</a></li>
                            </ul>
                        </li>

                    </ul>
                    <div class="clearfix"></div>
                </div>
            </nav>
        </div>
    </div>
</div>
