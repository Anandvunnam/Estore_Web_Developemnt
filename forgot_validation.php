

<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : forgot_validation.php-->


<?php
require 'includes/common.php';
$email= mysqli_real_escape_string($con,$_POST['forgot_email']);
$secure = mysqli_real_escape_string($con,$_POST['secure']);
$select_query = "SELECT id,email,password FROM users where email='$email'" or die(mysqli_error($con));
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_query_result)==0){ 
    header("location:email_script.php?error=Invalid Credentials!!");
}else {
$len = strlen($_POST['new_password']);
    if($len >= 8){
        $new_password = md5(md5($_POST['new_password']));
        $update_query = "update users set password = '$new_password' where email = '$email' and password = '$secure';" ;
        $update_query_result = mysqli_query($con, $update_query)or die(mysqli_error($con));
        $row=  mysqli_fetch_array($select_query_result);
        $_SESSION['email']=$email;
    $_SESSION['id']=$row['id'];
        $_SESSION['name']=$row['name'];
        header("location:home.php");
        
    }
    else{
        header("location:email_script.php?error=New password should have atleast 8 characters");
}

    }
?>