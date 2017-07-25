<?php
session_start();

if(is_null($_SESSION["adminName"]))
{
    header("location: login_admin.php");
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
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a  href="index.php">Easy GST <span>India</span></a></h1>
                </div>
                <!--navbar-header-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="home_admin.php">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tax Slabs<span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="view_items.php">View Tax Slab</a></li>
                                <li><a href="add_item.php">Add Tax Slab</a></li>
                            </ul>
                        </li>
                        <li><a href="view_user.php">View Users</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admins<span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="view_admin.php">View Admins</a></li>
                                <li><a href="add_admin.php">Add Admin</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Settings <span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="pwd_admin.php">Update Password</a></li>
                                <li><a href="logout_admin.php">Logout</a></li>
                            </ul>
                        </li>

                    </ul>
                    <div class="clearfix"> </div>
                </div>
            </nav>
        </div>
    </div>
</div>