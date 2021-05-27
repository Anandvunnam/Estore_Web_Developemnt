
<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : settings.php-->


<?php
 include 'includes/common.php';
 if(!isset($_SESSION['email'])){
    header("location:index.php");
}
?>

<!DOCTYPE HTML>
<html>
   <title>Settings | E-Store</title>
    <?php require "includes/links.php" ?>
   <style>
             @media(min-height:600px){
             footer{
                 position: fixed;
             }}
         </style>
 </head>
 <body>
    <?php
    include 'includes/header.php';
    ?>
      <div class="container settings_style" >
        <div class="row">
            <div class="col-sm-5 col-md-4 col-sm-offset-4 col-md-offset-4">                
                    <form action="settings_script.php" method="POST">
                        <h3>Change Password</h3>
                        <div class="form-group">
                            <input type="password" class="form-control" name="old"  placeholder="Old Password" required>
                        </div>
                        <div class="red">
                            <?php if(isset($_GET['old_pwd_error'])){
                                echo $_GET['old_pwd_error'];
                                }
                            ?>    
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="new" placeholder="New Password" required >
                        </div>
                        <div class="red">
                            <?php if(isset($_GET['pwd_length_error'])){
                                echo $_GET['pwd_length_error'];
                                }
                            ?>    
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="re_new"  placeholder="Re-type New Password" required>
                        </div>
                        <div class="red">
                            <?php if(isset($_GET['pwd_error'])){
                                echo $_GET['pwd_error'];
                                }
                            ?>    
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>
                    </form>                
            </div>
        </div>
      </div>
      <?php include 'includes/footer.php';?>
    </body>
</html>    
