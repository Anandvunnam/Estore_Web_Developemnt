
<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : logout.php-->

<?php
session_start();
if(!isset($_SESSION['email'])){
    header("location:index.php");
}
else {
session_unset();
session_destroy();
header('location:index.php');
}