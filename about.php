

<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : about.php-->


<?php
require 'includes/common.php';
?>
<!DOCTYPE html>
<html lang="en">
     <head>
         <title>About Us | E-Store</title>   
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
    <div class="content">
        <div class="row">
            <div class="container">
                <div class="col-md-4">
                    <div class="panel panel-collapse">
                        <div class="panel-heading"></div>
                        <div class="panel-body">
                            <img src="img/about_us.jpg" class="img-responsive img-rounded about-img"><br>
                            <h4 class="text-uppercase">what we do?</h4>
                            <p class="text-aligned">
                                E-Store gives you a chance to quickly and easily find the phone you want and have it delivered to your home in no time, regardless of your location.
                            </p>
                            <h4 class="text-uppercase">why do customers love us?</h4>
                             <p class="text-aligned">
                                We have been in the business for quite a while now, and it that time we have not only managed to make close relationships with numerous suppliers all over the world, but also to recognize what people need. This means that we are always able to offer all the latest phones, great prices, reliable service, fast delivery and premium customer support.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 about-today">
                    <div class="panel panel-collapse">
                        <div class="panel-body">
                            <h4 class="text-uppercase">today</h4>
                            <p class="text-aligned">
                               Collective experience of our team members and the years we have spent in the business allowed us to develop a vast network of suppliers, ensuring that our customers will always find what they are looking for. This also means that we are able to offer great prices, which are constantly being updated and follow the shifts in the market.
                            </p>
                            <br>
                             <p class="text-aligned">
                               Our affordability, fast and reliable delivery, and the fact that you will always be able to find the phone that you are looking for in our offer, have made us stand out in the market, but they are simply symptoms of our dedication to what we are doing and our desire to constantly keep improving. We know that in order to do that, we need to keep in close touch with our customers and listen to their suggestions and critiques. This is why our customer service, which is always there to answer any question that you may have, is just as willing to listen as it is to inform.We always treat customers as our superiors and we always look forward to here from you. 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 about-today">
                    <div class="panel panel-collapse">
                        <div class="panel-body">
                            <h4 class="text-uppercase">opportunities</h4><br>
                            <h5><b>Available Roles</b></h5><br>
                            <ol class="text-aligned">
                                <li>Jr./Sr. Web Developer [Full Time Role + also available as a 5 Months Internship].</li><br>
                                <li>Business Apprentice [6 Months Internship].</li><br>
                                <li>Manager at backend operations [Full Time Role + also available as a 6 Months Internship]</li><br>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
              <?php
        include 'includes/footer.php';
    ?>
    
</body>
</html>