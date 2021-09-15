<?php
session_start();
session_destroy();
echo "<script type='javascript'>alert('Efetuando Logout!');";
echo "javascript:window.location='login.php';</script>";
header("Location: login.php");