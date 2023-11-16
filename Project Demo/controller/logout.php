<?php 

session_start();

unset($_SESSION['flag']);
header('location:../view/login.php'); 



    echo'You have been logged out';


?>