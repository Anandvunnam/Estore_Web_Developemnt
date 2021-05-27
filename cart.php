
<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : cart.php-->

<?php
    include 'includes/common.php';
    if(isset($_SESSION['id'])) {
        $user_id = $_SESSION['id'];
?>
<!DOCTYPE HTML>
<html>
  <head>
   <title>Cart | E-Store</title>
    <?php require "includes/links.php" ?>
   <style>
             @media(min-height:600px){
             footer{
                 position: fixed;
             }}
         </style>
 </head>
 <body>
    <?php      include 'includes/header.php';
    $select_query = "SELECT up.product_id,p.price,p.name FROM ((user_products up INNER JOIN users u ON up.user_id = u.id )
                    INNER JOIN products p ON   up.product_id = p.id) WHERE up.status = 'Added to cart' and u.id = '$user_id'" or die(mysqli_error($con));
    $select_query_result = mysqli_query($con, $select_query);
    $rows = mysqli_num_rows($select_query_result);
    if($rows == 0){
    ?>
     <div class="cart_content">
     <div class="container">
        <div class="jumbotron">
            <h1>Please add items to the cart first</h1>
        </div> 
     </div>
    <?php }else{ 
        $sum = 0;
    ?>
    <div class="container cart_style">
        <div class="row">
            <div class="col-xs-10 col-sm-7 co-md-6 col-sm-offset-2 col-md-offset-2">
                <table class="table table-striped">
                    <thead><tr>
                            <th>Item Number</th>
                            <th>Item Name</th>
                            <th>Price</th>
                            <th>    </th>
                        </tr></thead>
                    <tbody>
                        <?php while ( $array_result = mysqli_fetch_array($select_query_result)){
                                $sum+=$array_result['price']; 
                        ?>
                        <tr>
                            <td><?php echo $array_result['product_id'];?>    </td>
                            <td><?php echo $array_result['name'];?></td>
                            <td><?php echo $array_result['price'];?></td>
                            <td> <?php echo "<a href='cart-remove.php?id={$array_result['product_id']}' class='remove_item_link'> Remove</a>";?></td>
                        </tr>
                        <?php } ?>
                        <tr>
                            <td>    </td>
                            <td>Total</td>
                            <td>Rs <?php echo $sum;?></td>
                            <td><a role="button" class="btn btn-primary btn-block" href="success.php">Confirm Order</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
      </div>
    </div>     
    <?php }include 'includes/footer.php';?> 
    </body>
</html>   
    <?php  } 