<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$connection = new mysqli ("localhost", "ecomptod_ecompto", "Ankit12348", "ecomptod_project");
if($_POST)
{
  $email = $_POST['email'];
  $selectquery = mysqli_query($connection, "select * from sign_up where email = '{$email}'") or die(mysql_error($connection));
  $count = mysqli_num_rows($selectquery);
  $row = mysqli_fetch_array($selectquery);
  if($count>0)
  {
    
    require 'vendor/autoload.php';

    
    $mail = new PHPMailer(true);

    try 
    {
      
      $mail->SMTPDebug = 0;                                       
      $mail->isSMTP();                                            
      $mail->Host       = 'smtp.gmail.com';  
      $mail->SMTPAuth   = true;                                   
      $mail->Username   = 'ecompetitivetest.com@gmail.com';                   
      $mail->Password   = 'Ankit12348';                             
      $mail->SMTPSecure = 'tls';                                  
      $mail->Port       = 587;                                    

      $mail->setFrom('ecompetitivetest.com@gmail.com', 'ecompetitivetest.com');
      $mail->addAddress($email, $email);     
      
      $mail->isHTML(true);                                  
      $mail->Subject = 'Forgot Password';
      $mail->Body    = "Hi {$row['name']} your password is {$row['password']}.";
      $mail->AltBody = "Hi {$row['name']} your password is {$row['password']}.";

      $mail->send();
      echo "<script>alert('Your password has been sent to your email.');</script>";
      header("refresh:1; url=index");
    } 
    catch (Exception $e) 
    {
      echo "<script>alert('Mail could not be sent. Mailer Error: {$mail->ErrorInfo}');</script>";
    }
  }
  else
  {
    echo "<script>alert('Email not found.');</script>";
  }
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>

  <style type="text/css">
    .m1
    {
      font-weight: 800;
      font-size: 1.5em;
    }
    .m1.letter
    {
      display: inline-block;
      line-height: 1em;
    }
  </style>

  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <script>
    (adsbygoogle = window.adsbygoogle || []).push({
      google_ad_client: "ca-pub-9790665615066712",
      enable_page_level_ads: true
    });
  </script>

  <title>ecompetitivetest.com</title>
  <link rel="icon" href="image/project.png">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
  <br>
  <center><h3 class="m1"><font color="purple">ecompetitivetest.com</font></h3></center>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-sm-4"></div>
      <div class="col-sm-4 bg-light">
        <br>
        <strong><font color="purple">Forgotten Password</font></strong>
        <form method="post" class="was-validated">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <button type="submit" class="btn btn-primary">Recover</button>
        </form>
        <br>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
</body>
</html>
