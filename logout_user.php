<?php
session_start();
$_SESSION["username"]=null;
session_destroy();
session_abort();
header("location: login_user.php");