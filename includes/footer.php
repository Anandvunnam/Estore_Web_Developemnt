
<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : footer.php-->

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4>Information</h4>
                <p><a href="about.php">About Us</a></p>
                <p><a href="contact.php">Contact Us</a></p>
            </div>
            <div class="col-sm-4 ">
                <h4>My Account</h4>
                <?php if(!isset($_SESSION['email'])){?>
                <p><a data-toggle="modal" data-target="#login_modal">Login</a></p>
                <p><a href="signup.php">Signup</a></p>
                <?php }else {?>
                <p><a href="settings.php">Settings</a></p>
                <p><a href="logout.php">Logout</a></p>
                <?php }?>
            </div>
            <div class="col-sm-4">
              <h4>Contact Us</h4>
                <p><span class="glyphicon glyphicon-phone"></span>:+91-123000000</p>  
            </div>
        </div>
    </div>
</footer>
