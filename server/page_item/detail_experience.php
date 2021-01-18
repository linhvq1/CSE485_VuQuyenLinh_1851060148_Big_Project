<?php 
require("../database/dbhandler.php");
include("../config/path.php");
session_start();
if(!isset($_SESSION["login"])){
    header("location: ".constant("URL")."/server/");
}
$admin = queryhandler("Select * from admin LIMIT 1","get");
if(isset($_GET['id'])){
    $getID = $_REQUEST['id'];
    $exp = queryhandler("select * from experience where id_e = ?","get",[$getID]);
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link href="../../fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">  
  </head>
  <body>
  <div class="wrapper">
      <?php
        include("../component/sidebar.php");
      ?>
      <div id="body" class="active">
        <?php
          include("../component/nav.php");
        ?>
        <div class="content mt-5">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="jumbotron text-left">
                  <p><strong>ID:</strong> <?php echo $exp[0]["id_e"]; ?></p>
                  <p><strong>Name:</strong> <?php echo $exp[0]["name_e"]; ?></p>
                  <p><strong>Start Time:</strong> <?php echo $exp[0]["start_time"]; ?></p>
                  <p><strong>Start Time:</strong> <?php echo $exp[0]["end_time"]; ?></p>
                  <p><strong>Label:</strong> <?php echo $exp[0]["label"]; ?></p>
                  <p><strong>Detail:</strong> <?php echo ucwords($exp[0]["detail"]); ?></p>
                </div>
                <a style="margin-left: 50%;" class="btn btn-primary" href="experience.php" role="button">back</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../js/jquery-3.5.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>  
</body>
  </body>
</html>