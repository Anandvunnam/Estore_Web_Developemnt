

<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : forgot.php-->

<?php
require 'includes/common.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Forgot | E-Store</title>
        <?php require "includes/links.php" ?>
        <style>
             @media(min-height:600px){
             footer{
                 position: fixed;
             }}
         </style>
    </head>
    <body>
        <?php include 'includes/header.php';?>
        <div class="content">
            <div class="container">
                <div class="row forgot">
                    <div class="col-md-5 col-md-offset-3 text-center">
                        <img class="img-responsive img-rounded img-forgot" src="img/forgot.jpg" alt="forgot image">
                        <form class="forgot_form" method="post" action="email_validation.php">
                            <label for="email" class="text-uppercase">Email</label>
                            <div class="form-group">
                                <input class="form-control" type="email" name="email" required>
                            </div>
                            <div class="red">
                                <?php
                                    if(isset($_GET['user_error'])){
                                        echo $_GET['user_error'];
                                    }
                                ?>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php';?>
    </body>
</html>
