<?php 
require("../database/dbhandler.php");
include("../config/path.php");
session_start();
if(!isset($_SESSION["login"])){
    header("location: ".constant("URL")."/server/");
}
$admin = queryhandler("Select * from admin LIMIT 1","get");
$skill = queryhandler("SELECT * FROM skill","get");
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
            <form action="add/add_process_skill.php" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 box box-primary">
                        <div class="box-body">
                            <h2>Skills & Proficiency</h2>
                            <div class="admin-information">
                            <dl class="form-group">
                                <dt>
                                <label >Name</label>
                                </dt>
                                <dd>
                                <input class="field-data form-control" id="admin-name" type="text" spellcheck="false" name="skill-name" value="" required/>
                                </dd>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label >Type</label>
                                </dt>
                                <dd>
                                <input class="field-data form-control"  type="text" spellcheck="false" name="skill-type" value="">
                                </dd>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label >Icon</label>
                                </dt>
                                <dd>
                                <input class="field-data form-control"  type="text" spellcheck="false" name="skill-icon" value="" placeholder="fas fa...">
                                </dd>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label >Progress</label>
                                </dt>
                                <dd>
                                <input class="field-data form-control"  type="number" spellcheck="false" name="skill-progress" value="">
                                </dd>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label >Detail</label>
                                </dt>
                                <dd>
                                <textarea class="field-data form-control" name="skill-detail" spellcheck="false" id="skill-detail" cols="30" rows="8"></textarea>
                                </dd>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label >Background</label>
                                </dt>
                                <dd>
                                <select class="field-data data-job form-control" name="skill-background">
                                    <?php
                                    $background = array("Success", "Secondary", "Primary", "Danger", "Warning", "Info","Light","Dark","Muted","White");
                                    foreach($background as $bg) {
                                        if($j == $skill[0]["background"]) {
                                        continue;
                                        }
                                        echo '<option value="'.$bg.'">'.$bg.'</option>';
                                    }
                                    echo '<option selected="selected" value="'.$skill[0]["background"].'">'.$skill[0]["background"].'</option>';
                                    ?>
                                </select>
                                </dd>
                            </dl>
                            </div>
                            <button class="btn btn-success mt-3 mb-2" type="submit" name="submit">Add Hobbie</button>
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