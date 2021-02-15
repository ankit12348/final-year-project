<?php
include("class/users.php");
$email = $_SESSION['email'];
$cat = new users;
$category = $cat->category();

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
    function validate(admin2, c2)
    {
      var x = document.forms[admin2].elements[c2].value;
      if(x == "Choose a category")
      {
        alert("Please choose a category.");
        return false;
      }
    }
    function del(admin1, c1)
    {
      var y = document.forms[admin1].elements[c1].value;
      if(y == "Choose a category")
      {
        alert("Please choose a category.");
        return false;
      }
    }
  </script>

  <script type="text/javascript">
    function search(admin3, doc)
    {
      var file = document.forms[admin3].elements[doc].value;
      var doc = document.forms[admin3].elements[doc].files[0];
      var extension = /(\.pdf)$/i;
      if(!extension.exec(file))
      {
        alert("Only pdf files are allowed.");
        return false;
      }
      else if(doc.size > 50000000)
      {
        alert("PDF size must not exceeds 50MB.");
        return false;
      }
    }
  </script>
  <script type="text/javascript">
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
          <li class="nav-item active"><a class="nav-link" href="#Admin">Admin</a></li>
          <li class="nav-item"><a class="nav-link" href="comments"><i class="fa fa-comments-o" aria-hidden="true"></i> Comments</a></li>
          <li class="nav-item"><a class="nav-link" href="signout"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a></li>
        </ul>
        <form class="form-inline ml-auto" action="search" method="post" name="nav" onsubmit="javascript: return validation('nav','s');">
          <input class="form-control mr-sm-2" type="text" name="s" placeholder="eBook category">
          <button class="btn btn-success" type="submit">Search</butto>
          </form>
        </div>
      </nav>
      <div class="row">
        <div class="col-sm-6 bg-light">
          <?php
          $cat->admin_user($email);
          if(isset($cat->name))
          {
            foreach ($cat->name as $admin) 
              {?> 
                <div class="toast" data-autohide="false">
                  <div class="toast-header">
                    <strong class="mr-auto text-primary">ecompetitivetest.com</strong>
                    <small class="text-muted">5 secs ago</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
                  </div>
                  <div class="toast-body">
                    <i>Welcome <strong><?php echo $admin['name']; ?></strong>, total 
                      <?php
                      $conn = mysqli_connect('localhost','ecomptod_ecompto','Ankit12348');
                      mysqli_select_db($conn,'ecomptod_project');
                      $query = "select count(*) from sign_up";
                      $count = mysqli_query($conn,$query);
                      if($row = mysqli_fetch_array($count))
                      {
                        echo $row['count(*)'];
                      }
                      ?> number of registrations done till <?php echo date("d.m.y");?> <?php echo date("l");?>.
                      
                    </i>
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
             <div class="media border p-3" id="d1">
              <div class="media-body">
                <?php
                if(isset($_GET['msg1']) && $_GET['msg1']=="run")
                {
                  echo "<font color='green'>Questions deleted successfully.</font><br>";
                }

                ?>
                <form action="delete" method="post" name="admin1" class="was-validated" onsubmit="javascript: return del('admin1','c1');">
                  <div class="form-group">
                    <label for="select1"><font color="purple"><strong>Delete questions:</strong></font></label>
                    <select class="form-control" id="select1" name="c1">
                      <option>Choose a category</option>
                      <?php

                      foreach ($category as $c) {
                       echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
                     }?>
                   </select>
                 </div>
                 <center><button type="submit" class="btn btn-danger">Delete</button></center>
               </form>
             </div>
           </div>
           <br>
           <br>
           <div class="media border p-3" id="d1">
            <div class="media-body">
              <?php
              if(isset($_GET['upload']) && $_GET['upload']=="success")
              {
                echo "<font color='green'>Document uploaded successfully.</font><br>";
              }

              ?>
              <label for="cat"><font color="purple"><strong><i class="fa fa-folder-open" aria-hidden="true"></i> Add files:</strong></font></label>
              <form action="documents" method="post" enctype="multipart/form-data" id="admin3" name="admin3" class="was-validated" onsubmit="javascript: return search('admin3','doc');">
                <div class="form-group">
                  <input type="text" class="form-control" id="cat" placeholder="Category name" name="c" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="custom-file mb-3">
                  <input type="file" class="custom-file-input" id="doc" name="doc" accept="application/pdf" required>
                  <label class="custom-file-label" for="doc">Upload file</label>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <center><button type="submit" class="btn btn-primary">Upload</button></center>
              </form>
            </div>
          </div>
          <br>
        </div>
        <script>
          $(".custom-file-input").on("change", function() {
            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
          });
        </script>
        <div class="col-sm-6 bg-light">
          <br>
          <div class="media border p-3" id="d1">
            <div class="media-body">
              <?php

              if(isset($_GET['msg']) && !empty($_GET['msg']=="run"))
              {
                $cat = $_COOKIE["cat"];
                $conn = mysqli_connect('localhost','ecomptod_ecompto','Ankit12348');
                $newConn = mysqli_connect('localhost','ecomptod_ecompto','Ankit12348');
                mysqli_select_db($conn,'ecomptod_project');
                mysqli_select_db($newConn,'ecomptod_project');
                $query = "select count(*) from questions where category = '$cat'";
                $newQuery = "select cat_name from categories where id = '$cat'";
                $count = mysqli_query($conn,$query);
                $cat_name = mysqli_query($newConn,$newQuery);
                if($row = mysqli_fetch_array($count))
                {
                  if($name = mysqli_fetch_array($cat_name)){
                    echo "<i class='fa fa-upload' aria-hidden='true'></i> Total questions for " . $name['cat_name'] . " : " . $row['count(*)'] . "<br>";
                  }
                }
                echo "<font color='green'>Question added successfully.</font><br>"; 
              }

              ?>
              <form action="add" method="post" id="admin2" name="admin2" class="was-validated" onsubmit="javascript: return validate('admin2','c2');">
                <div class="form-group">
                  <label for="comment"><font color="purple"><strong>Add questions:</strong></font></label>
                  <textarea class="form-control" rows="5" name="q" placeholder="Enter question" required></textarea>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                  <label for="option1">Option1:</label>
                  <input type="text" class="form-control" id="option1" placeholder="Enter option 1" name="o1" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                  <label for="option2">Option2:</label>
                  <input type="text" class="form-control" id="option2" placeholder="Enter option 2" name="o2" required>
                  <div class="valid-feedback">Valid</div>
                  <div class="invalid-feedback">Please fill out this field</div>
                </div>
                <div class="form-group">
                  <label for="option3">Option3:</label>
                  <input type="text" class="form-control" id="option3" placeholder="Enter option 3" name="o3" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                  <label for="option4">Option4:</label>
                  <input type="text" class="form-control" id="option4" placeholder="Enter option 4" name="o4" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                  <label for="answer">Answer:</label>
                  <input type="text" class="form-control" id="answer" placeholder="Enter answer" name="a" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                  <label for="right">Answer:</label>
                  <input type="text" class="form-control" id="right" placeholder="Enter answer" name="r" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                  <select class="form-control" id="select2" name="c2">
                    <option>Choose a category</option>
                    <?php
                    foreach ($category as $c) {
                     echo "<option value=".$c['id'].">".$c['cat_name']."</option>";
                   }?>
                 </select>
               </div>
               <center><button type="submit" class="btn btn-success">Submit</button></center>
             </form>
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
  <br>
</body>
</html>
