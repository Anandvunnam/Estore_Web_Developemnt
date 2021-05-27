

<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : cart-add.php-->

<?php
include 'includes/common.php';
$product_id = $_GET['id'];
$user_id = $_SESSION['id'];
$insert_query = "INSERT INTO user_products (user_id, product_id, status) VALUES($user_id, $product_id, 'Added to cart')" or die(mysqli_errno($con));
$insert_query_result = mysqli_query($con, $insert_query);
header('location:home.php');