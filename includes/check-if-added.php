
<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : check-if-added.php-->

<?php
function check_if_added_to_cart($product_id,$user_id=0){
    $con = mysqli_connect('localhost', 'root', '', 'estore', '3308');
    $select_query = "SELECT * FROM user_products WHERE product_id='$product_id' AND user_id ='$user_id' and
    status='Added to cart'";
    $select_query_result = mysqli_query($con , $select_query) or die(mysqli_error($con));
    if (mysqli_num_rows($select_query_result) >= 1){
        return 1;
    }
    else{
        return 0;
    }
    
}

