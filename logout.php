<?php
session_start();
unset($_SESSION['user_email']);
unset($_SESSION['user_username']);
unset($_SESSION['user_id_genrated']);
session_destroy();
header("location:index.php");



?>