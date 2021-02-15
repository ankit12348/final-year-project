<!DOCTYPE html>
<html lang="en">
<head>

<script type="text/javascript">
  function validate(index, e, img)
    {
    var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    var address = document.forms[index].elements[e].value;
    var file = document.forms[index].elements[img].value;
    var image = document.forms[index].elements[img].files[0];
    var extension = /(\.jpg|\.jpe|\.png)$/i;
    if(reg.test(address) == false)
    {
      alert("Invalid email address.");
      return false;
    }
    else if(!extension.exec(file))
    {
      alert("Only jpg, jpeg and png files are allowed.");
      return false;
    }
    else if(image.size > 5000000)
    {
      alert("Image size must not exceeds 5MB.");
      return false;
    }
  }
</script>

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
                    if(isset($_GET['signup']) && $_GET['signup']=="success")
                    {
                      echo "<font color='green'>You are registered successfully.</font><br>";
                      header("refresh:1; url=index");
                    }
                    else if(isset($_GET['signup']) && $_GET['signup']=="failed")
                    {
                      echo "<font color='red'>You are already registered.</font><br>";
                      header("refresh:1; url=index");
                    }
                  ?>
                    <strong><font color="purple">Sign up</font></strong>
                    <form action="signup" method="post" enctype="multipart/form-data" id="index" name="index" class="was-validated" onsubmit="javascript: return validate('index','e','img');">
                      <div class="form-group">
                          <label for="name">Name:</label>
                          <input type="text" class="form-control" id="name" name="n" placeholder="Enter your name" name="n" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                          <label for="email">Email:</label>
                          <input type="email" class="form-control" id="email" placeholder="Enter your gmail" name="e" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password:</label>
                          <input type="password" class="form-control" id="pwd" placeholder="Enter your password" name="p" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="custom-file mb-3">
                          <input type="file" class="custom-file-input" id="image" name="img" accept="image/*" required>
                          <label class="custom-file-label" for="image">Upload your image</label>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign up</button>
                    </form>
                    <br>
                </div>
                <script>
                  $(".custom-file-input").on("change", function() {
                    var fileName = $(this).val().split("\\").pop();
                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                  });
                </script>
            <div class="col-sm-4"></div> 
          </div>
          <br>
              <center>Admin?<i><a href="admin_user"> Click here</a></i></center>
      </div>
      <br>
      <br>
  </body>
</html>
