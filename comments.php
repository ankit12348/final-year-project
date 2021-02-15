<!DOCTYPE html>
<html lang="en">
<head>

  <script type="text/javascript">
    function validation(nav, s) 
    {
      var x = document.forms[nav].elements[s].value;
      if(x == "")
      {
        alert("Write a category.")
        return false;
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
            <li class="nav-item"><a class="nav-link" href="admin_panel">Admin</a></li>
            <li class="nav-item active"><a class="nav-link" href="#Comments"><i class="fa fa-comments-o" aria-hidden="true"></i> Comments</a></li>
            <li class="nav-item"><a class="nav-link" href="signout"><i class="fa fa-sign-out" aria-hidden="true"></i> Log out</a></li>
          </ul>
          <form class="form-inline ml-auto" action="search" method="post" name="nav" onsubmit="javascript: return validation('nav','s');">
            <input class="form-control mr-sm-2" type="text" name="s" placeholder="eBook category">
            <button class="btn btn-success" type="submit">Search</button>
          </form>
        </div>
      </nav>
      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
          <br>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Comment</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $conn = mysqli_connect('localhost','ecomptod_ecompto','Ankit12348');
              mysqli_select_db($conn,'ecomptod_project');
              $query = "select * from about";
              $comments = mysqli_query($conn,$query);
              while($row = mysqli_fetch_array($comments))
              {
                echo "<tr>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['text']."</td>";
                echo "<td><a href = delete_comment?ID=".$row['id'].">Delete</a></td>";
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
        <div class="col-sm-2"></div>
      </div>
      <br>
      <br>
    </div>
  </div>
</div>
</body>
</html>