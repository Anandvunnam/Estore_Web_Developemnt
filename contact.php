
<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : contact.php-->

<?php
 require 'includes/common.php';
 ?>
<!DOCTYPE html>
<html lang="en">
     <head>
         <title>Contact Us | E-Store</title>   
         <?php require 'includes/links.php'; ?>
     <style>
             @media(min-height:800px){
             footer{
                 position: fixed;
             }}
         </style>
</head>
<body>
     
     <?php
            include 'includes/header.php';
        ?>
    <div class="contact_content">
        <div class="row contact_row">
            <div class="container">
                <div class="col-md-10">
                    <h2 class="text-uppercase">live support</h2><br>
                    <h5>24 hours | 7 days a week | 365 days a week Live Technical Support</h5>
                    <p class="text-aligned">It is a long established fact that a reader will be distracted by the readable content of a page looking at the layout. The part of using Lorem Ipsum is that irt has a more or less normal distribution of letters . There are many variations of passages of Lorem ipsum available , but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passaage of lorem Ipsum, you nedd to sure there isn't anything embarrassing in the middle of the text. </p>
                </div>
                <div class="col-md-2 contact_img">
                    <img src="img/contact.png">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-sm-10 col-md-8">
                    <h2 class="text-uppercase">contact us</h2>
                    <form action="contact_script.php" method="post">
                        <label for="name">Name</label>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control">
                        </div>
                        <label for="email">Email</label>                            
                        <div class="form-group">
                            <input type="email" name="email" class="form-control">
                        </div>
                        <label for="message">Message</label>
                        <div class="form-group">                            
                            <textarea name="message" rows="5" cols="60" class="form-control"></textarea>
                        </div>
                        <div class="green">
                            <?php if(isset($_GET['success'])){
                                echo $_GET['success'];
                            }
                            ?>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                <h3>Company Information : </h3>
                <ul class="list-unstyled">
                    <li class="list_info">500 Lorem Ipsum Dolor Sit</li>
                    <li class="list_info">22-56-2-9 Sit Amet, Lorem</li>
                    <li class="list_info">USA</li>
                    <li class="list_info">Phone: (00) 222 666 444</li>
                    <li class="list_info">Fax: (000) 000 00 00 0</li>
                    <li class="list_info">Email: info@mycompany.com</li>
                    <li class="list_info">Follow us on <span class="fa fa-facebook-official"></span> , <span class="fa fa-twitter"></span> , <span class="fa fa-instagram"></span></li>
                </ul>
            </div>
            </div>
        </div>
    </div>    
    <?php
        include './includes/footer.php';
    ?>
    
</body>
</html>