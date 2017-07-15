<?php
session_start();

if(is_null($_SESSION["adminName"]))
{
    header("location: login_admin.php");
}
?>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="home_admin.php">GST Assistant</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="home_admin.php">Home</a></li>
                <li><a href="view_admin.php">View Admins</a></li>
                <li><a href="add_item.php">Add Tax Slab</a></li>
                <li><a href="view_items.php">View Tax Slab</a></li>
                <li><a href="view_user.php">View Users</a></li>
                <li><a href="pwd_admin.php">Update Password</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="add_admin.php"><span class="glyphicon glyphicon-user"></span> Add Admin</a></li>
                <li><a href="logout_admin.php"><span class="glyphicon glyphicon-log-in"></span> logout</a></li>
            </ul>
        </div>
    </div>
</nav>
