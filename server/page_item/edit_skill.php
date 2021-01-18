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
    $skill = queryhandler("Select * from skill where id_s = ?","get",[$getID]);
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
          <?php include("../component/sidebar.php"); ?>
          <div id="body" >
            <?php include("../component/nav.php"); ?>
            <div class="content">
            <form action="update/update_process_skill.php" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 box box-primary">
                        <div class="box-body">
                            <h2>Skills & Proficiency</h2>
                            <div class="admin-information">
                            <dl class="form-group">
                                <dt>
                                <label for="admin-name">Name</label>
                                </dt>
                                <dd>
                                <input class="field-data form-control" id="admin-name" type="text" spellcheck="false" name="skill-name" value="<?php echo $skill[0]["name_s"]; ?>" required/>
                                </dd>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label for="admin-address">Type</label>
                                </dt>
                                <dd>
                                <input class="field-data form-control"  type="text" spellcheck="false" name="skill-type" value="<?php echo $skill[0]["type"]; ?>">
                                </dd>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label for="admin-address">Icon</label>
                                </dt>
                                <dd>
                                <input class="field-data form-control"  type="text" spellcheck="false" name="skill-icon" value="<?php echo $skill[0]["icon_s"]; ?>">
                                <input class="field-data form-control"  type="hidden" spellcheck="false" name="skill-id" value="<?php echo $skill[0]["id_s"]; ?>" >
                                </dd>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label for="admin-address">Progress</label>
                                </dt>
                                <dd>
                                <input class="field-data form-control"  type="text" spellcheck="false" name="skill-progress" value="<?php echo $skill[0]["progress"]; ?>">
                                </dd>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label for="admin-about">Detail</label>
                                </dt>
                                <dd>
                                <textarea class="field-data form-control" name="skill-detail" spellcheck="false" id="skill-detail" cols="30" rows="8"><?php echo $skill[0]["detail"]; ?></textarea>
                                </dd>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label for="admin-job">Background</label>
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
                            <button class="btn btn-success mt-3 mb-2" type="submit" name="submit">Update Skill</button>
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