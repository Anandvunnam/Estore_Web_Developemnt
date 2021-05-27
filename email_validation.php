
<!--INTERNSHALA WEB DEVELOPMENT TRAINING
FINAL PROJECT
BY:ANAND VUNNAM
FILE : email_validation.php-->

<?php
include 'includes/common.php';
$email = mysqli_real_escape_string($con,$_POST['email']) or die(mysqli_error($con));
$select_query = "SELECT email,password FROM users where email='$email'" or die(mysqli_error($con));
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_query_result) == 0){
    header('location:forgot.php?user_error=User does not exist!');
}
else{
    $array_result = mysqli_fetch_array($select_query_result);
    require 'PHPMailerAutoload.php';
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer;
    //Server settings
    $mail->SMTPDebug = 0;                     // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = '##Gmail Account';                     // SMTP username
    $mail->Password   = '###### Gmail Password';                               // SMTP password
    $mail->SMTPSecure =   'ssl';     // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('###Gmail Account', 'E-Store');
    $mail->addAddress($array_result['email']);     // Add a recipient
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Estore | Forgot Password';
    $mail->Body    = "Hello ! Here is your code: {$array_result['password']}";

   if( $mail->send()){  
   header("location:email_script.php");
   }
}