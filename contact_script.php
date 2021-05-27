
<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : contact_script.php-->

<?php
require 'includes/common.php';
$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$message = mysqli_real_escape_string($con,$_POST['message']);
$insert_query = "INSERT INTO contact_us (name,email,message) VALUES('$name','$email','$message')" or die(mysqli_error($con));
$insert_query_result = mysqli_query($con, $insert_query);
header("location:contact.php?success=Form submitted successfully");
        
