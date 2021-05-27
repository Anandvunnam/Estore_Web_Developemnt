
<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : email_script.php-->

    <html>
    <head>
        <title>Email | E-Store</title>
        <?php require "includes/links.php";?>
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
                    <div class="col-md-5 col-md-offset-3">
                        <div class="green">
                            <?php echo 'Secure Code sent to your email ';?>
                        </div>
                        <form class="forgot_form" method="post" action="forgot_validation.php">
                            <label for="email" >Email</label>
                            <div class="form-group">
                                <input class="form-control" type="email" name="forgot_email" required>
                            </div>
                            <label for="email">Secure code</label>
                            <div class="form-group">
                                <input class="form-control" type="password" name="secure" required>
                            </div>
                            <label for="email">New password</label>
                            <div class="form-group">
                                <input class="form-control" type="password" name="new_password" required>
                            </div>
                            <div class="red">
                                <?php
                                    if(isset($_GET['error'])){
                                        echo $_GET['error'];
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
