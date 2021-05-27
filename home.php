
<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : home.php-->

<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) {
    header('location:index.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home | E-Store</title>
        <?php require "includes/links.php" ?>
    </head>
    <body>
        <?php  
        include "includes/header.php";
        require  'includes/check-if-added.php';
        $user_id = $_SESSION['id'];
        $name = $_SESSION['name'];
        ?>
        <div class="content">
           
            <div class="container-fluid">
                <!--<div class="container">-->
                    <div class="jumbotron text-center">
                        <h1>Welcome <?php echo $name;?></h1>
                        <h4>Enrich your shopping list wisely!!</h4>
                    <!--</div>-->
                </div>
                <!--Row-1-->         
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 1</div>
                            <div class="panel-body"><img src="img/1.jpg" class="img-responsive imgthumb" alt="OnePlus 8 Pro"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">OnePlus 8 Pro</h4>
                                <p>Battery : 4510mAH</p>
                                <p>Camera : 48MP + 8MP + 48MP + 5MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM: 128GB</p>
                                <p class="p-bold">Price : 54,999/-</p>
                                <?php if(check_if_added_to_cart(1,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=1" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 2</div>
                            <div class="panel-body"><img src="img/2.jpg" class="img-responsive imgthumb" alt="OnePlus 7T"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">OnePlus 7T</h4>
                                <p>Battery : 3800mAH</p>
                                <p>Camera : 48MP + 8MP + 16MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM: 128GB</p>
                                <p class="p-bold">Price : 35,999/-</p>
                                <?php if(check_if_added_to_cart(2,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=2" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 3</div>
                            <div class="panel-body"><img src="img/3.jpg" class="img-responsive imgthumb" alt="OnePlus 7T Pro"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">OnePlus 7T Pro</h4>
                                <p>Battery : 4085mAH</p>
                                <p>Camera : 16MP + 20MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM: 256GB</p>
                                <p class="p-bold">Price : 47,999/-</p>
                                <?php if(check_if_added_to_cart(3,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=3" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                </div>
                    <!--Row-2-->
                    <div class="row" >
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 4</div>
                            <div class="panel-body"><img src="img/4.jpg" class="img-responsive imgthumb" alt="iPhone 11 Pro max"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone 11 Pro Max</h4>
                                <p>Battery : 3969mAH</p>
                                <p>Camera : 12MP + 12MP + 12MP | 12MP Front Camera</p>
                                <p>RAM : 4GB ROM: 64GB</p>
                                <p class="p-bold">Price : 1,17,100/-</p>
                                <?php if(check_if_added_to_cart(4,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=4" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                    <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 5</div>
                            <div class="panel-body"><img src="img/5.jpg" class="img-responsive imgthumb" alt="iPhone 11 Pro"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone 11 Pro</h4>
                                <p>Battery : 3190mAH</p>
                                <p>Camera : 12MP + 12MP + 12MP | 12MP Front Camera</p>
                                <p>RAM : 4GB ROM: 64GB</p>
                                <p class="p-bold">Price : 1,06,600/-</p>
                               <?php if(check_if_added_to_cart(5,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=5" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 6</div>
                            <div class="panel-body"><img src="img/6.jpg" class="img-responsive imgthumb" alt="iPhone 11"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone 11</h4>
                                <p>Battery : 3110mAH</p>
                                <p>Camera : 12MP + 12MP| 12MP Front Camera</p>
                                <p>RAM : 4GB ROM: 64GB</p>
                                <p class="p-bold">Price : 68,300/-</p>
                               <?php if(check_if_added_to_cart(6,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                     <a href="cart-add.php?id=6" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                </div>
         <!--Row-3-->      
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 7</div>
                            <div class="panel-body"><img src="img/7.jpg" class="img-responsive imgthumb" alt="iPhone XS Max"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone XS Max</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 32MP + 20MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM: 256GB</p>
                                <p class="p-bold">Price : 99,999/-</p>
                                <?php if(check_if_added_to_cart(7,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=7" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 8</div>
                            <div class="panel-body"><img src="img/8.jpg" class="img-responsive imgthumb" alt="iPhone XR"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone XR</h4>
                                <p>Battery : 4085mAH</p>
                                <p>Camera : 16MP + 20MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM: 256GB</p>
                                <p class="p-bold">Price : 53,999/-</p>
                                <?php if(check_if_added_to_cart(8,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=8" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 9</div>
                            <div class="panel-body"><img src="img/9.jpg" class="img-responsive imgthumb" alt="iPhone 8"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone 8</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 20MP | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM: 128GB</p>
                                <p class="p-bold">Price : 41,999/-</p>
                                <?php if(check_if_added_to_cart(9,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                     <a href="cart-add.php?id=9" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--row4-->       
                <div class="row" >
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 10</div>
                            <div class="panel-body"><img src="img/10.jpg" class="img-responsive imgthumb" alt="iPhone 7"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone 7</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 12MP  | 16MP Front Camera</p>
                                <p>RAM : 8GB ROM: 256GB</p>
                                <p class="p-bold">Price : 29,999/-</p>
                                <?php if(check_if_added_to_cart(10,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=10" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 11</div>
                            <div class="panel-body"><img src="img/11.jpg" class="img-responsive imgthumb" alt="iPhone 6S Plus"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone 6S Plus</h4>
                                <p>Battery : 2750mAH</p>
                                <p>Camera : 12MP | 5MP Front Camera</p>
                                <p>RAM : 2GB ROM: 16GB</p>
                                <p class="p-bold">Price : 42,990/-</p>
                                <?php if(check_if_added_to_cart(11,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=11" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 12</div>
                            <div class="panel-body"><img src="img/12.jpg" class="img-responsive imgthumb" alt="iPhone SE (2020)"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">iPhone SE (2020)</h4>
                                <p>Battery : 1821mAH</p>
                                <p>Camera : 12MP | 7MP Front Camera</p>
                                <p>RAM : 3GB ROM: 64GB</p>
                                <p class="p-bold">Price : 46,999/-</p>
                                <?php if(check_if_added_to_cart(12,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=12" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--row5-->       
                <div class="row" >
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 13</div>
                            <div class="panel-body"><img src="img/13.jpg" class="img-responsive imgthumb" alt="Google Pixel 3a XL"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Google Pixel 3a XL</h4>
                                <p>Battery : 3700mAH</p>
                                <p>Camera : 12.2MP | 8MP Front Camera</p>
                                <p>RAM : 4GB ROM: 64GB</p>
                                <p class="p-bold">Price : 34,999/-</p>
                                <?php if(check_if_added_to_cart(13,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=13" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 14</div>
                            <div class="panel-body"><img src="img/14.jpg" class="img-responsive imgthumb" alt="Vivo V19"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Vivo V19</h4>
                                <p>Battery : 4500mAH</p>
                                <p>Camera : 48MP + 8MP + 2MP + 2MP | 32MP + 8MP Front Camera</p>
                                <p>RAM : 8GB ROM: 128GB</p>
                                <p class="p-bold">Price : 30,990/-</p>
                                <?php if(check_if_added_to_cart(14,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=14" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 15</div>
                            <div class="panel-body"><img src="img/15.jpg" class="img-responsive imgthumb" alt="Vivo V15 Pro"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Vivo V15 Pro</h4>
                                <p>Battery : 3700mAH</p>
                                <p>Camera : 48MP + 8MP + 5MP | 32MP Front Camera</p>
                                <p>RAM : 6GB ROM: 128GB</p>
                                <p class="p-bold">Price : 21,099/-</p>
                                <?php if(check_if_added_to_cart(15,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=15" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Row-6-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 16</div>
                            <div class="panel-body"><img src="img/16.jpg" class="img-responsive imgthumb" alt="Realme 6 Pro"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Realme 6 Pro</h4>
                                <p>Battery : 3400mAH</p>
                                <p>Camera : 64MP + 8MP + 12MP+ 2MP | 16MP + 8MP Front Camera</p>
                                <p>RAM : 6GB ROM: 64GB</p>
                                <p class="p-bold">Price : 16,999/-</p>
                                <?php if(check_if_added_to_cart(16,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=16" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 17</div>
                            <div class="panel-body"><img src="img/17.jpg" class="img-responsive imgthumb" alt="Redmi Note 8"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Redmi Note 8</h4>
                                <p>Battery : 4000mAH</p>
                                <p>Camera : 48MP + 13MP + 8MP| 20MP Front Camera</p>
                                <p>RAM : 6GB ROM: 64GB</p>
                                <p class="p-bold">Price : 9,999/-</p>
                                <?php if(check_if_added_to_cart(17,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=17" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 18</div>
                            <div class="panel-body"><img src="img/18.jpeg" class="img-responsive imgthumb" alt="Redmi K20 Pro"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Redmi K20 Pro</h4>
                                <p>Battery : 4000mAH</p>
                                <p>Camera : 48MP + 13MP + 8MP | 20MP Front Camera</p>
                                <p>RAM : 8GB ROM: 128GB</p>
                                <p class="p-bold">Price : 29,999/-</p>
                                <?php if(check_if_added_to_cart(18,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=18" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                </div>  
                <!--Row-7-->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 19</div>
                            <div class="panel-body"><img src="img/19.jpeg" class="img-responsive imgthumb" alt="Samsung Galaxy S20 Ultra"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S20 Ultra</h4>
                                <p>Battery : 4200mAH</p>
                                <p>Camera : 48MP + 13MP + 8MP | 20MP Front Camera</p>
                                <p>RAM : 12GB ROM: 128GB</p>
                                <p class="p-bold">Price : 97,999/-</p>
                                <?php if(check_if_added_to_cart(19,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=19" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 20</div>
                            <div class="panel-body"><img src="img/20.jpeg" class="img-responsive imgthumb" alt="Samsung Galaxy S10 Plus"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S10 Plus</h4>
                                <p>Battery : 4000mAH</p>
                                <p>Camera : 48MP + 13MP + 8MP | 20MP Front Camera</p>
                                <p>RAM : 12GB ROM: 1024GB</p>
                                <p class="p-bold">Price : 1,29,999/-</p>
                                <?php if(check_if_added_to_cart(20,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=21" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 21</div>
                            <div class="panel-body"><img src="img/21.jpeg" class="img-responsive imgthumb" alt="Samsung Galaxy A51"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy A51</h4>
                                <p>Battery : 4200mAH</p>
                                <p>Camera : 12MP + 8MP | 20MP Front Camera</p>
                                <p>RAM : 6GB ROM: 128GB</p>
                                <p class="p-bold">Price : 25,250/-</p>
                                <?php if(check_if_added_to_cart(21,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=21" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                </div>
                 <!--Row-8-->       
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 22</div>
                            <div class="panel-body"><img src="img/22.jpeg" class="img-responsive imgthumb" alt="Samsung Galaxy S9"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Samsung Galaxy S9</h4>
                                <p>Battery : 4200mAH</p>
                                <p>Camera : 24MP +8MP | 20MP Front Camera</p>
                                <p>RAM : 6GB ROM: 128GB</p>
                                <p class="p-bold">Price : 22,999/-</p>
                                <?php if(check_if_added_to_cart(22,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=22" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 23</div>
                            <div class="panel-body"><img src="img/23.jpg" class="img-responsive imgthumb" alt="OPPO Reno 3 Pro"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">OPPO Reno 3 Pro</h4>
                                <p>Battery : 4025mAH</p>
                                <p>Camera : 64MP + 13MP + 8MP + 2MP | 44MP + 2MP Front Camera</p>
                                <p>RAM : 8GB ROM: 128GB</p>
                                <p class="p-bold">Price : 30,249/-</p>
                                <?php if(check_if_added_to_cart(23,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=23" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Mobile 24</div>
                            <div class="panel-body"><img src="img/24.jpg" class="img-responsive imgthumb" alt="LG X Cam"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">LG X Cam</h4>
                                <p>Battery : 2520mAH</p>
                                <p>Camera : 13MP + 5MP  | 8MP Front Camera</p>
                                <p>RAM : 2GB ROM: 16GB</p>
                                <p class="p-bold">Price : 10,990/-</p>
                                <?php if(check_if_added_to_cart(24,$user_id)){
                                echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else { ?>    
                                    <a href="cart-add.php?id=24" name="add"  class="btn btn-block btn-primary">Add to cart</a>
                                <?php  } ?>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
       <?php // include 'includes/footer.php';?>
    </body>
</html>
