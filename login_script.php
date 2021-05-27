
<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : login_script.php-->

<?php
include 'includes/common.php';
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = md5(md5($_POST['password']));
$select_query = "SELECT id,email,password,name FROM users where email='$email' and password = '$password'" or die(mysqli_error($con));
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
if(!empty($email) and !empty($password)){
    if(mysqli_num_rows($select_query_result)==0){
            header('location:index.php?login_error=login error');?>

 <?php   }
    else{
        $array_result = mysqli_fetch_array($select_query_result);
        $_SESSION['email'] = $array_result['email'];
        $_SESSION['id'] = $array_result['id'];
        $_SESSION['name'] = $array_result['name'];
        $_SESSION['password'] = $array_result['password'];
        header("location: home.php");
    }
}
 else {
    echo 'please fill all the fields';
}
