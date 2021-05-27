
<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : setting_script.php-->

<?php
include 'includes/common.php';
if(!isset($_SESSION['email'])){
    header("location:index.php");
}
$old_pwd = mysqli_real_escape_string($con,$_POST['old']);
$en_old_pwd = md5(md5($old_pwd));
$new_pwd = mysqli_real_escape_string($con,$_POST['new']);
$re_new_pwd = mysqli_real_escape_string($con,$_POST['re_new']);
$pwd_pattern = ".{8,}";
if(!empty($old_pwd) || !empty($new_pwd) || !empty($re_new_pwd)){
$select_query = "select password from users where password = '$en_old_pwd'";
$select_query_result = mysqli_query($con, $select_query);
$array_result  = mysqli_fetch_array($select_query_result);
if(mysqli_num_rows($select_query_result) == 0){
    $var_old =1;
  header("location:settings.php?old_pwd_error=Incorrect old password");  
}
else if(strcmp($new_pwd, $re_new_pwd) != 0){
    header("location:settings.php?pwd_error=Miss match of new passowords");
}
else if(strlen($new_pwd) < 8){
    header("location:settings.php?pwd_length_error=Use minimun 8 characters for new password");
}
 else {
     $en_new_pwd  = md5(md5($new_pwd));
    $update_query = "update users set password='$en_new_pwd' where email = '{$_SESSION['email']}'" or die(mysqli_error($con));
    echo $update_query;
    $update_query_result = mysqli_query($con, $update_query);
    $array_result = mysqli_fetch_array($update_query_result);
    header("location:home.php");
}
}

