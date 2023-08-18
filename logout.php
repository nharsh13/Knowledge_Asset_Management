<?php 

session_start();
session_destroy();
unset($_SESSION['u_data']);
echo"<script>window.confirm('Are you sure to logout');</script>";
header("location:user.php");
session_abort();
die();

?>