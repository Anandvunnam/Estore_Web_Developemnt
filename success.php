
<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : success.php-->

<?php
include 'includes/common.php';
if(!isset($_SESSION['email'])){
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Success | E-Store</title>
    <?php require "includes/links.php" ?>
    <style>
             @media(min-height:600px){
             footer{
                 position: fixed;
             }}
         </style>
</head>
<body>
    <?php include 'includes/header.php';
    $user_id = $_SESSION['id'];
    $update_query = "UPDATE user_products SET status = 'Confirmed' where status = 'Added to cart' and user_id = '$user_id'";
           $update_query_result = mysqli_query($con, $update_query); ?>
    
    <div class="container cart_style">
        <div class="row">
            <div class="col-xs-10 col-sm-10 col-md-6 col-sm-offset-2 col-md-offset-4">
                <h2><span class="glyphicon glyphicon-ok-circle"></span> Your order is confirmed!</h2>
                <p>The product will be delivered to you shortly</p>
                <p>Thank You for shopping with us.<a href="home.php"> Click here</a> to purchase any other item.</p>
            </div>
        </div>
    </div>
   
    <?php include 'includes/footer.php';?>
</body>
</html>