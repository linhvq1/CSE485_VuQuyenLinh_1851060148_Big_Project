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
                <form action="update/update_process_profile.php" method="post" enctype="multipart/form-data">
                <div class="row">
                        <div class="col-12 page-header">
                        <div class="avatar d-flex flex-row justify-content-center">
                            <img id="avatar" class="profile-avatar img-fluid rounded-circle" src="../../img/avatar/<?php echo $admin[0]["avatar"]; ?>" alt="">
                            <label for="upload-avatar">
                            <i class="change-avatar fas fa-camera mb-auto"></i>
                            <input class="field-avatar" name="file-avatar" type="file" id="upload-avatar" style="display:none">
                            <button class="btn btn-success mt-3 mb-2 d-inline" type="submit" name="change-avatar">Upload</button>
                            </label>
                        </div>
                        </div>
                    </div>
                </form>
            <form action="update/update_process_profile_info.php" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 box box-primary">
                        <div class="box-body">
                            <h2>Public Profile</h2>
                            <div class="admin-information">
                            <dl class="form-group">
                                <dt>
                                <label for="admin-name">Name</label>
                                </dt>
                                <dd>
                                <input class="field-data form-control" id="admin-name" type="text" spellcheck="false" name="admin-name" value="<?php echo $admin[0]["name_a"]; ?>" required/>
                                </dd>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label for="admin-address">Address</label>
                                </dt>
                                <dd>
                                <input class="field-data form-control" id="admin-address" type="text" spellcheck="false" name="admin-address" value="<?php echo $admin[0]["address"]; ?>">
                                </dd>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label for="admin-about">Bio</label>
                                </dt>
                                <dd>
                                <textarea class="field-data form-control" name="admin-about" spellcheck="false" id="admin-about" cols="30" rows="8"><?php echo $admin[0]["about"]; ?></textarea>
                                </dd>
                            </dl>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label for="admin-phone">Phone</label>
                                </dt>
                                <dd>
                                <input class="field-data data-phone form-control" id="admin-phone" type="text" spellcheck="false" name="admin-phone" value="<?php echo $admin[0]["phone"]; ?>">
                                </dd>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label for="admin-job">Job</label>
                                </dt>
                                <dd>
                                <select class="field-data data-job form-control" name="admin-job" id="admin-job">
                                    <?php
                                    $job = array("Game Developer", "Web Deverloper - Designer", "Mobile Developer", "Artificial Intelligence", "Software Engineer", "Cyber Security");
                                    foreach($job as $j) {
                                        if($j == $admin[0]["job"]) {
                                        continue;
                                        }
                                        echo '<option value="'.$j.'">'.$j.'</option>';
                                    }
                                    echo '<option selected="selected" value="'.$admin[0]["job"].'">'.$admin[0]["job"].'</option>';
                                    ?>
                                </select>
                                </dd>
                            </dl>
                            </div>
                            
                            <button name="change-admin-profile" class="btn btn-success mt-3 mb-2" type="submit">Update Profile</button>
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