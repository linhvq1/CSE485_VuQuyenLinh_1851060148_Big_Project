<?php
    session_start();
    include("./config/path.php");
    if(isset($_SESSION["login"])){
        header("location: ".constant("URL")."/server/dashboard.php");
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="./favicon/favicon (1).ico" rel="icon" type="image/x-icon" />  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">  
  </head>
  <body>
      <div class="container">
          <div class="row">
              <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                  <div class="card card-signin my-5 jumbotron">
                      <div class="card-body">
                          <h5 class="card-title text-center">Login</h5>
                          <div style="display:none" class="alert alert-danger"></div>
                          <form class="form-signin" action="./validator/validator.php" method="post" enctype="multipart/form-data">
                            <div class="form-label-group">
                                <label for="inputEmail">Email</label>
                                <input type="email" spellcheck="false" id="inputEmail" class="email form-control" name="email" placeholder="Email address" required autofocus>
                            </div>
                            <div class="form-label-group">
                                <label for="inputPassword">Password</label>
                                <input type="password" id="inputPassword" class="password form-control" name="password" placeholder="Password" required>
                            </div>
                            <p class="mt-2 mb-0"><a href="<?php echo constant("URL")."/server/password_reset.php"?>">Forgot password?</a></p>
                            <button class="btn btn-primary btn-block text-uppercase mt-3" name="submit" type="submit" >Login</button>
                            <hr class="my-4">
                        </form>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>  </body>
</html>