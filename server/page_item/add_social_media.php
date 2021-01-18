<?php 
require("../database/dbhandler.php");
include("../config/path.php");
session_start();
if(!isset($_SESSION["login"])){
    header("location: ".constant("URL")."/server/");
}
$admin = queryhandler("Select * from admin LIMIT 1","get");
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
          <?php include("../component/sidebar.php"); ?>
          <div id="body" >
            <?php include("../component/nav.php"); ?>
            <div class="content">
            <form action="add/add_process_social_media.php" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 box box-primary">
                        <div class="box-body">
                            <h2>Social Media</h2>
                            <div class="admin-information">
                            <dl class="form-group">
                                <dt>
                                <label >Name</label>
                                </dt>
                                <dd>
                                <input class="field-data form-control" id="admin-name" type="text" spellcheck="false" name="social-name" value="" required/>
                                </dd>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label >Icon</label>
                                </dt>
                                <dd>
                                <input class="field-data form-control"  type="text" spellcheck="false" name="social-icon" value="" placeholder="fas fa..."/>
                                </dd>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label >Link</label>
                                </dt>
                                <dd>
                                <textarea class="field-data form-control" name="social-link" spellcheck="false" cols="30" rows="8"></textarea>
                                </dd>
                            </dl>
                            </div>
                            <button class="btn btn-success mt-3 mb-2" type="submit" name="submit">Add Social Media</button>
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