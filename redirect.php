<?php
ob_start();
session_start();
include("connect.php");
$_SESSION['filename'] = $filename;
header('location:user_form_1.php');
ob_end_flush();
?>