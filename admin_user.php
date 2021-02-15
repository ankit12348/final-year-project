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
        if(isset($_GET['admin']) && $_GET['admin']=="failed")
        {
          echo "<font color='red'>Invalid email or password.</font><br>";
        }
        ?>
        <strong><font color="purple">Admin</font></strong>
        <form action="admin" method="post" class="was-validated">
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email" name="e" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter your password" name="p" required>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <button type="submit" class="btn btn-danger"><i class="fa fa-sign-in" aria-hidden="true"></i> Log in</button>
        </form>
        <br>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>
</body>
</html> 