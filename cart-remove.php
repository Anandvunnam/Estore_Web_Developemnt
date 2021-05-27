
<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : cart-remove.php-->

<?php
include 'includes/common.php';
$product_id = $_GET['id'];
$user_id = $_SESSION['id'];
$delete_query = "DELETE FROM user_products where user_id= '$user_id' and product_id = '$product_id'";
$delete_query_result = mysqli_query($con, $delete_query);
header("location:cart.php");