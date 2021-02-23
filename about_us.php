<?php
include("class/users.php");
$email = $_SESSION['email'];
$about = new users;
if(isset($email)){
  $about->profile($email);
}
else{
  $about->url("index");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <style type="text/css">
   #d1
   {
     border-radius: 35px;
     padding: 20px
   }
   
 </style>

 <script type="text/javascript">
  function validate(user, c)
  {
    var x = document.forms[user].elements[c].value;
    if(x == "")
    {
      alert("Please write your comment.");
      return false;
    }
  }
  
  function validation(nav, s) 
  {
    var x = document.forms[nav].elements[s].value;
    if(x == "")
    {
      alert("Write a category.")
      return false;
    }
  }
</script>

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
  <div class="container-fluid">
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
      <a class="navbar-brand" href="#">
        <img src="image/project.png" alt="logo" style="width:40px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="home"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li class="nav-item active"><a class="nav-link" href="#Info"><i class="fa fa-info" aria-hidden="true"></i> Info</a></li>
          <li class="nav-item"><a class="nav-link" href="signout"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a></li>
        </ul>
        <form class="form-inline ml-auto" action="search" method="post" name="nav" onsubmit="javascript: return validation('nav','s');">
          <input class="form-control mr-sm-2" type="text" name="s" placeholder="eBook category">
          <button class="btn btn-success" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <div class="row">
      <div class="col-sm-6 bg-light">
       <br>  
       <div class="media border p-3" id="d1">
        <div class="media-body">
         <h5><strong><font color="purple">ect</font></strong>&nbsp;<small><i><?php echo "Posted on " . date("d.m.y");?> <?php echo date("l"); ?></i></small></h5>
         <div class="container">
          <div id="accordion">
           <div class="card">
            <div class="card-header">
             <a class="card-link" data-toggle="collapse" href="#collapseOne">
               About us
             </a>
           </div>
           <div id="collapseOne" class="collapse show" data-parent="#accordion">
             <div class="card-body">
               <img src="image/admin.jpeg" class="align-self-center mr-3" style="width:60px">
               <div class="media-body">
                 <h4>Ankit Giri</h4>
                 <p>Software Development Engineer || Web Developer || Programmer</p>
                 <p>Hello users, I'm delighted to welcome you all from ecompetitivetest.com. This site is designed to help 
                 college graduates to prepare for various job interviews and online tests. This site contains online study
                 materials and mock tests. So please visit and get all benifits as soon as for free of cost. Do share your
                 suggestions and comments for better user experience.</p>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div> 
   </div>
 </div>
 <br>
</div>
<div class="col-sm-6 bg-light">
  <br>
  <div class="media border p-3" id="d1">
    <div class="media-body">
      <?php
      if(isset($_GET['save']) && $_GET['save']=="success")
      {
       echo "<font color='green'>Thanks for your comment.</font><br>";
     }
     ?>
     <?php
     if(isset($about->data))
     {
       foreach ($about->data as $name) 
        {?>
          <label for="user"><strong><font color="purple"> <i class="fa fa-comments-o" aria-hidden="true"></i> Comments section:</font></strong></label>
          <form action="about" id="user" class="was-validated" method="post" id="user" name="user" onsubmit="javascript: return validate('user','c');">
           Name:<input type="text" class="form-control" name="n" value="<?php echo $name['name'];?>" placeholder="Enter your name" required>
           <div class="valid-feedback">Valid.</div>
           <div class="invalid-feedback">Please fill out this field.</div>
           <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea class="form-control" rows="3" name="c" placeholder="Write your comment" required></textarea>
            <div class="valid-feedback">Valid.</div>
            <div class="invalid-feedback">Please fill out this field.</div>
          </div>
          <input type="submit" class="btn btn-primary" value="Comment">
        </form>
      <?php }
    }
    else
    {
     header("location: index");
   }
   ?>
 </div>
</div>
<br>
</div>
</div>
<br>
</body>
</html>