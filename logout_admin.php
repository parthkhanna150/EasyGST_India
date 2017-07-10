<?php
session_start();
$_SESSION["adminName"]=null;
session_destroy();
session_abort();
header("location: login_admin.php");