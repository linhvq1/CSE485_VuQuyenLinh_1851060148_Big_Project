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
    $skill = queryhandler("select * from skill where id_s = ?","get",[$getID]);
}else{
  header("location: ".constant("URL")."/404.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="../../favicon/favicon (1).ico" rel="icon" type="image/x-icon" />  
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
                  <p><strong>ID:</strong> <?php echo $skill[0]["id_s"]; ?></p>
                  <p><strong>Name:</strong> <?php echo $skill[0]["name_s"]; ?></p>
                  <p><strong>Type:</strong> <?php echo $skill[0]["type"]; ?></p>
                  <p><strong>Icon:</strong> <i class="<?php echo $skill[0]["icon_s"]; ?>"></i></p>
                  <p><strong>Progress:</strong><?php echo $skill[0]["progress"]; ?></p>
                  <p><strong>Background: </strong><span class="text-<?php echo $skill[0]["background"]; ?>"><?php echo $skill[0]["background"]; ?></span></p>
                  <p><strong>Description:</strong> <?php echo ucwords($skill[0]["detail"]); ?></p>
                </div>
                <a style="margin-left: 50%;" class="btn btn-primary" href="skill.php" role="button">back</a>
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