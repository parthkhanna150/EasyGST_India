<?php
session_start();

if(is_null($_SESSION["adminName"]))
{
    header("location: login_admin.php");
}
?>
<div>
    <ul class="nav nav-pills">
        <li><a href="home_admin.php">Admin Home</a></li>
        <li><a href="add_admin.php">Add Admin</a></li>
        <li><a href="view_admin.php">View Admins</a></li>
        <li><a href="add_item.php">Add Item</a></li>
        <li><a href="view_items.php">View Items</a></li>
        <li><a href="view_user.php">View Users</a></li>
        <li><a href="pwd_admin.php">Update Password</a></li>
        <li><a href="logout_admin.php">Logout</a></li>
    </ul>
</div>