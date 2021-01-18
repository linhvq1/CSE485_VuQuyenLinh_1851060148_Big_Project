<?php
  include("./config/path.php");
  require("./database/dbhandler.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Forgot your password?</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="./favicon/favicon (1).ico" rel="icon" type="image/x-icon" />  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link href="../fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">  
    <style>
      @font-face {
        font-family: "sofia-pro";
        font-style: normal;
        font-weight: 400;
        font-display: auto;
        src: url("../fonts/sofiapro-light.otf");
      }
      h5 {
        font-family: "sofia-pro";
        font-size: 1.7rem;
      }
      h6 {
        font-family: "sofia-pro";
        font-size: .9rem;
        margin: 0 0 1.3rem 0;
      }
      .btn {
        font-size: 1rem;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5 jumbotron">
            <div class="card-body">
              <h5 class="card-title text-center">Reset your password</h5>
              <?php
                session_start();
                if(isset($_SESSION["error"])) {
                  echo '
                    <div class="alert alert-danger">'.$_SESSION["error"].'</div>
                  ';
                  unset($_SESSION["error"]);
                }
                if(isset($_REQUEST["es"])) {
                  if($_SESSION["send"]) {
                    echo '
                      <form class="form-signin" action="./validator/change_pass.php" method="post" enctype="multipart/form-data">
                        <div class="form-label-group">
                          <label for="pwd">Password</label>
                          <input type="password" id="pwd" class="pass-reset form-control" name="newPass" required autofocus>
                        </div>
                        <div class="form-label-group">
                          <label for="cpwd">Confirm Password</label>
                          <input type="password" id="cpwd" class="confirmPass form-control" name="confirmPass" required>
                        </div>
                        <button class="btn btn-success btn-block mt-3" type="submit" name ="changePassword">Change Password</button>
                        <hr class="my-4">
                      </form>
                    ';
                    $_SESSION["hashEmail"] = $_REQUEST["es"];
                  } else {
                    header("location: ".constant("URL")."/server/password_reset.php");
                  }
                } else {
                  if(!isset($_SESSION["ok"])) {
                    echo '
                      <form class="form-signin" action="./validator/reset.php" method="post" enctype="multipart/form-data">
                        <h6 class="reset-pass text-center">Enter your user account\'s verified email address and we will send you a password reset link.</h6>
                        <div class="form-label-group">
                          <input type="email" id="inputEmail" class="email-pass-reset form-control" name="email" placeholder="Enter your email address" required autofocus>
                        </div>
                        <button class="btn btn-success btn-block mt-3" type="submit" name="resetpass">Send password reset email</button>
                        <hr class="my-4">
                      </form>
                    ';
                  } else {
                    echo '
                      <h6 class="reset-pass text-center">'.$_SESSION["ok"].'</h6>
                      <a href="'.constant("URL")."/server/".'" class="btn btn-success btn-block mt-3"">Return the log in</a>
                      <hr class="my-4">
                    ';
                    unset($_SESSION["ok"]);
                  }
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="./js/app.js"></script>
  </body>
</html>