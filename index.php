

<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : index.php-->

<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) { 
    header('location:home.php');
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Welcome | E-Store</title>
        <?php require "includes/links.php" ?>
    </head>
    <body>
        <?php  include "includes/header.php"; ?>
        <div id="banner_img">
            <div id="ban_img_content"></div>
        </div>
        <div class="content">
            <div class="container-fluid">
                
                <!--row1-->      
                <div class="row" >
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 1</div>
                            <div class="panel-body"><img src="img/iphone_11_pro_max.jpg" class="img-responsive imgthumb" alt="iphone 11 pro max"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone 11 Pro Max</h4>
                                <p>Battery : 3969mAH</p>
                                <p>Camera : 12MP + 12MP + 12MP | 12MP Front Camera</p>
                                <p>RAM : 4GB ROM:64GB</p>
                                <p class="p-bold">Price : 1,17,100/-</p>
                               <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 2</div>
                            <div class="panel-body"><img src="img/Google_Pixel_3a_xl.jpg" class="img-responsive imgthumb" alt="Google Pixel 3a xl"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Google Pixel 3a XL</h4>
                                <p>Battery : 3700mAH</p>
                                <p>Camera : 12.2MP | 8MP Front Camera</p>
                                <p>RAM : 4GB ROM:64GB</p>
                                <p class="p-bold">Price : 34,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 3</div>
                            <div class="panel-body"><img src="img/oneplus_8pro.jpg" class="img-responsive imgthumb" alt="oneplus 8pro"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Oneplus 8 Pro</h4>
                                <p>Battery : 4510mAH</p>
                                <p>Camera : 48MP + 8MP + 48MP + 5MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM:128GB</p>
                                <p class="p-bold">Price : 54,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                </div>

                
         <!--row2-->       
                <div class="row">  
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 4</div>
                            <div class="panel-body"><img src="img/Samsung_galaxy_s9.png" class="img-responsive imgthumb" alt="Samsung Galaxy S9"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S9</h4>
                                <p>Battery : 3000mAH</p>
                                <p>Camera : 12MP | 8MP Front Camera</p>
                                <p>RAM : 4GB ROM:64GB</p>
                                <p class="p-bold">Price : 22,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
             
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 5</div>
                            <div class="panel-body"><img src="img/oppo_reno_3pro.jpg" class="img-responsive imgthumb" alt="OPPO Reno 3 Pro"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">OPPO Reno 3 Pro</h4>
                                <p>Battery : 4025mAH</p>
                                <p>Camera : 64MP + 13MP + 8MP + 2MP | 44MP + 2MP Front Camera</p>
                                <p>RAM : 8GB ROM:128GB</p>
                                <p class="p-bold">Price : 30,249/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 6</div>
                            <div class="panel-body"><img src="img/realme_6_pro.jpg" class="img-responsive imgthumb" alt="Realme 6 Pro"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Realme 6 Pro</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 64MP + 8MP + 12MP+ 2MP | 16MP + 8MP Front Camera</p>
                                <p>RAM : 6GB ROM:64GB</p>
                                <p class="p-bold">Price : 16,999/-</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
              
     <?php   include "includes/footer.php"; ?>
    </body>
</html>
