<?php

session_start();

if(!isset($_SESSION['user']) && !isset($_SESSION['email'])){ 
    header("Location: ../frontend/login.php");
}

session_destroy();