
<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : signup.php-->

<?php
    require 'includes/common.php';
    if(isset($_SESSION['email'])){
        header('location:home.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
     <head>
         <title>Signup | E-Store</title>   
         <?php require 'includes/links.php'; ?>
         <style>
             @media(min-height:765px){
             footer{
                 position: fixed;
             }}
         </style>
    </head>
<body>
     
     <?php
            include 'includes/header.php';
        ?>
        <div class="signup_content">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                  <img src="img/signup.jpg" class="img-responsive img-rounded img_signup" alt="Image">
              </div>
              <div class="col-md-6 col-sm-6 col-sm-offset-3 col-md-offset-0 ">
                        <h1>Signup</h1>
                        <form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"   pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  name="email" required>
                                <div class="red">
                                <?php
                                if(isset($_GET['email_error'])){
                                 echo $_GET['email_error'];
                                }
                                elseif(isset($_GET['email_pattern_error'])){
                                 echo $_GET['email_pattern_error'];
                                }
                                ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" pattern=".{8,}" name="password" title="Use minimum 8 characters" required>
                                <div class="red">
                                <?php
                                if(isset($_GET['pwd_error'])){
                                 echo $_GET['pwd_error'];
                                }
                                ?>
                                </div>    
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required>
                                <div class="red">
                                <?php
                                if(isset($_GET['contact_error'])){
                                 echo $_GET['contact_error'] ;
                                }
                                ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required>
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required>
                            </div>
                            <div class="red">
                                <?php
                                if(isset($_GET['detail_error'])){
                                 echo $_GET['detail_error'] ;
                                }
                                ?>
                                </div>
                            <div class="btn-signup">
                              <button type="submit" name="submit" class="btn btn-primary btn-signup">Submit</button>
                            </div>
                        </form>
              </div>
            </div>
            </div>
        </div>
    
    <?php
        include './includes/footer.php';
    ?>
    
</body>
</html>