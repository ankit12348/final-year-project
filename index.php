<?php
if(isset($_COOKIE))
{
  include("class/users.php");
  $signin = new users;
  $e = $_COOKIE['email'];
  $p = $_COOKIE['password'];
  if($signin->signin($e,$p))
  {
    $signin->url("home");
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
  <meta name="description" content="ecompetitivetest.com is an e-learning website and a free mock test platform.">
  <meta name="keywords" content="eBooks, Mock Tests, C/C++, Data Structures, Quantitative Aptitude, Logical Reasoning, English">
  <meta name="author" content
  ="ecompetitivetest.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
        <?php 
        if(isset($_GET['signin']) && $_GET['signin']=="failed")
        {
          echo "<font color='red'>Invalid email or password.</font><br>";
        }
        ?>
        <strong><font color="purple">Log in</font></strong>
        <form action="signin" method="post" class="was-validated" >
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your gmail" name="e" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter your password" name="p" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox" name="rem"> Remember me
            </label>
          </div>
          <button type="submit" class="btn btn-success"><i class="fa fa-sign-in" aria-hidden="true"></i> Log in</button>
          <br>
          <i><a href="forgot">Forgotten password?</a></i>
        </form>
        <br>
      </div>
      <div class="col-sm-4"></div>
    </div>
    <br>
    <center>New users?<i><a href="signup_user"> Sign up</a></i></center>
  </div>
  <br>
</body>
</html>