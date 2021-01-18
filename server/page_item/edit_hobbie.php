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
    $hobbie = queryhandler("Select * from hobbies where id_h = ?","get",[$getID]);
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
          <?php include("../component/sidebar.php"); ?>
          <div id="body" >
            <?php include("../component/nav.php"); ?>
            <div class="content">
            <form action="update/update_process_hobbie.php" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 box box-primary">
                        <div class="box-body">
                            <h2>Hobbies and Interests</h2>
                            <div class="admin-information">
                            <dl class="form-group">
                                <dt>
                                <label for="admin-name">Name</label>
                                </dt>
                                <dd>
                                <input class="field-data form-control" id="admin-name" type="text" spellcheck="false" name="hobbie-name" value="<?php echo $hobbie[0]["name_h"]; ?>" required/>
                                </dd>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label for="admin-address">Icon</label>
                                </dt>
                                <dd>
                                <input class="field-data form-control"  type="text" spellcheck="false" name="hobbie-icon" value="<?php echo $hobbie[0]["icon_h"]; ?>">
                                <input class="field-data form-control"  type="hidden" spellcheck="false" name="hobbie-id" value="<?php echo $hobbie[0]["id_h"]; ?>" >
                                </dd>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label for="admin-about">Describes</label>
                                </dt>
                                <dd>
                                <textarea class="field-data form-control" name="hobbie-detail" spellcheck="false" id="skill-detail" cols="30" rows="8"><?php echo $hobbie[0]["describes"]; ?></textarea>
                                </dd>
                            </dl>
                            </div>
                            <button class="btn btn-success mt-3 mb-2" type="submit" name="submit">Update Hobbie</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </form>
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