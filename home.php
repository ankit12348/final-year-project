<?php
include("class/users.php");
$email = $_SESSION['email'];
$home = new users;
if(isset($email)){
  $home->profile($email);
}
else{
  $home->url("index");
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
  function validate(home, cat)
  {
    var x = document.forms[home].elements[cat].value;
    if(x == "Select a category")
    {
      alert("Please select a category.");
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
  $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
  });
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
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
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
          <li class="nav-item active"><a class="nav-link" href="#Home"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li class="nav-item"><a class="nav-link" href="about_us"><i class="fa fa-info" aria-hidden="true"></i> Info</a></li>
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
        <?php
        if(isset($home->data))
        {
          foreach ($home->data as $prof) 
            {?> 
              <div class="toast" data-autohide="false">
                <div class="toast-header">
                  <strong class="mr-auto text-primary">ecompetitivetest.com</strong>
                  <small class="text-muted">5 secs ago</small>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                </div>
                <div class="toast-body">
                  <img src="image/<?php echo $prof['image'];?>" class="align-self-start mr-sm-2" style="width:40px;">
                  <i>Welcome <strong><?php echo $prof['name']; ?> <i class='far fa-grin-alt' style='font-size:24px;color:red'></i></strong></i>
                </div>
              </div>
              <div class="media border p-3" id="d1">
                <div class="media-body">
                  <h5><strong><font color="purple">ect</font></strong>&nbsp;<small><i><?php echo "Posted on " . date("d.m.y");?> <?php echo date("l"); ?></i></small></h5>
                  <div class="container">
                    <div id="accordion">
                      <div class="card">
                        <div class="card-header">
                          <a class="card-link" data-toggle="collapse" href="#collapseOne">
                           Free eBooks <span class="badge badge-danger">New</span>
                         </a>
                       </div>
                       <div id="collapseOne" class="collapse show" data-parent="#accordion">
                        <div class="card-body">
                          We are providing eBooks for 5 categories.
                          <ul>
                            <li>C Programming</li>
                            <li>Data Structure</li>
                            <li>Quantitative Aptitude</li>
                            <li>English</li>
                            <li>Logical Reasoning</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="accordion3">
                    <div class="card">
                      <div class="card-header">
                        <a class="card-link" data-toggle="collapse" href="#collapseThree">
                         Free Mock Tests <span class="badge badge-danger">New</span>
                       </a>
                     </div>
                     <div id="collapseThree" class="collapse show" data-parent="#accordion3">
                      <div class="card-body">
                        We are providing Mock Tests for each and every categories mentioned above. New questions will be updated weekly, so don't miss any of it.
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php
        } }
        else
        {
         header("location: index");
         return false;
       }?>
       <br>
     </div>
     <div class="col-sm-6 bg-light">
      <br>
      <div class="media border p-3" id="d1">
        <div class="media-body">
         <form action="question" method="post" name="home" class="was-validated" onsubmit="javascript: return validate('home','cat');">
          <div class="form-group">
            <label for="select"><strong><font color="purple">Mock tests:</font></strong></label>
            <select class="form-control" id="select" name="cat">
              <option>Select a category</option>
              <?php
              $home->category();
              foreach ($home->cat as $c) {?>
                <option value="<?php echo $c['id']; ?>"><?php echo $c['cat_name']; ?></option>
              <?php }?>
            </select>
          </div>
          <center><button type="submit" class="btn btn-success"><span>Start</span></button></center>
        </form>
        <br>
        <div class="container">
         <div id="accordion1">
          <div class="card">
            <div class="card-header">
              <a class="card-link" data-toggle="collapse" href="#collapseSix">
                Instructions <span class="badge badge-danger">Important</span>
              </a>
            </div>
            <div id="collapseSix" class="collapse show" data-parent="#accordion1">
              <div class="card-body">
                <ul>
                  <li>Select a category to start Mock Test.</li>
                  <li>There are 25 questons of 100 marks in each category.</li>
                  <li>Each question has 4 options.</li>
                  <li>For each right answer you will get 4 marks and for each wrong answer -2 marks will be deducted.</li>
                  <li>Your time limit is 25 minutes.</li>    
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
</div>
<script>
  $(document).ready(function(){
    $('.toast').toast('show');
  });
</script>
</div>
</div>
</body>
</html>