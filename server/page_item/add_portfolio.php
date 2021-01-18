<?php 
require("../database/dbhandler.php");
include("../config/path.php");
session_start();
if(!isset($_SESSION["login"])){
    header("location: ".constant("URL")."/server/");
}
$admin = queryhandler("Select * from admin LIMIT 1","get");
$typeP = queryhandler("SELECT * FROM type_portfolio","get");


if(isset($_SESSION['port'])){
    // echo "session1".$_SESSION['port'];
    $lol =$_SESSION['port'];
    // session_start();
    $_SESSION['port']= $lol;
    // echo "session2".$_SESSION['port'];
    $portfolio = queryhandler("Select * from portfolio where id_p=?","get",[$_SESSION['port']]);
}else{
    $portfolio = queryhandler("Select * from portfolio ","get");
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
            <form action="add/add_process_portfolio.php" method="post" enctype="multipart/form-data">
            <div class="container">
                    <div class="row">
                        <div class="col-lg-12 box box-primary">
                        <div class="box-body">
                        <dl class="form-group">
                                <dt>
                                <label >Type</label>
                                </dt>
                                <dd>
                                <select class="field-data data-type form-control" name="type-port">
                                    <?php
                                    $type = array("Development", "Design", "Photography");
                                    foreach($type as $t) {
                                        if($t == $typeP[0]["name_t"]) {
                                        continue;
                                        }
                                        echo '<option value="'.$t.'">'.$t.'</option>';
                                    }
                                    echo '<option selected="selected" value="'.$typeP[0]["name_t"].'">'.$typeP[0]["name_t"].'</option>';
                                    ?>
                                </select>
                                </dd>
                            </dl>
                        </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12 page-header">
                        <div class="avatar text-center">
                            <img id="avatar" class="portfolio-avatar img-fluid w-25" src="../../img/portfolio/<?php echo $portfolio[0]["image"]; ?>" alt="">
                            <label for="upload-avatar">
                            <i class="change-avatar fas fa-camera mb-auto"></i>
                            <input class="field-avatar" name="file-port" type="file" id="upload-avatar" style="display:none">
                            <button class="btn btn-success mt-3 mb-2 d-inline" type="submit" name="change-port">Upload</button>
                            </label>
                        </div>
                        </div>
                    </div>
                </form> 
            <form action="add/add_process_portfolio_info.php" method="post" enctype="multipart/form-data">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 box box-primary">
                        <div class="box-body">
                            <h2>Public portfolio</h2>
                            <div class="port-information">
                            <dl class="form-group">
                                <dt>
                                <label for="port-name">Name</label>
                                </dt>
                                <dd>
                                <input class="field-data form-control" id="port-name" type="text" spellcheck="false" name="port-name" value="" required/>
                                </dd>
                            </dl>
                            <dl class="form-group">
                                <dt>
                                <label for="port-link">link</label>
                                </dt>
                                <dd>
                                <input class="field-data form-control" id="port-link" type="text" spellcheck="false" name="port-link" value="">
                                </dd>
                            </dl>
                        </div>
                            <button name="change-port-info" class="btn btn-success mt-3 mb-2" type="submit">Add portfolio</button>
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