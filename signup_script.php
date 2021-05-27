


<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : signup_script.php-->

<?php
require 'includes/common.php';
$name = mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$email_pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
$password = mysqli_real_escape_string($con,$_POST['password']);
$pwd_pattern = ".{8,}";
$contact = mysqli_real_escape_string($con,$_POST['contact']);
$contact_pattern = "/^[0-9]{10}$/";
$city = mysqli_real_escape_string($con,$_POST['city']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$select_query = "SELECT id , password FROM users WHERE email = '$email'";
$select_query_result = mysqli_query($con, $select_query);
$contact_query = "SELECT id , password FROM users WHERE contact = '$contact'" or die(mysqli_error($con));
$contact_query_result = mysqli_query($con, $contact_query);

if(mysqli_num_rows($select_query_result) > 0 ){
    header("location:signup.php?email_error=Email already exists");
}
elseif (!preg_match($email_pattern,$email)) {
    header("location:signup.php?email_pattern_error=Incorrect email pattern ");
}
elseif (strlen($password)<8) {
    header("location:signup.php?pwd_error=Use 8 or more characters for password");
}
elseif (strlen($contact) != 10 || mysqli_num_rows($contact_query_result) > 0 || !preg_match($contact_pattern, $contact)) {
    header("location:signup.php?contact_error=Contact shold be exactly 10 digits and unique");
}
 else {
     $en_password = md5(md5($password));
     $insert_query = "INSERT INTO users (name, email, password, contact, city, address) VALUES('$name', '$email', '$en_password', '$contact', '$city', '$address')" or die(mysqli_error($connection));
     $insert_query_result = mysqli_query($con, $insert_query) or die(mysqli_error($con));
     $array_result = mysqli_fetch_array($select_query_result);
     $_SESSION['id'] = mysqli_insert_id($con);
     $_SESSION['email'] = $email;
     $_SESSION['name'] = $name;
     header("location:home.php");
}