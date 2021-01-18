<?php 
require("../database/dbhandler.php");
include("../config/path.php");
session_start();
if(!isset($_SESSION["login"])){
    header("location: ".constant("URL")."/server/");
}
$admin = queryhandler("Select * from admin LIMIT 1","get");
$achie = queryhandler("SELECT * FROM achievement","get");
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
      <div id="body">
        <?php
          include("../component/nav.php");
        ?>
        <div class="content">
          <div class="container">
            <div class="page-title">
              <h3>
                Achievement
                <a href="add_achievement.php" class="btn btn-sm btn-outline-primary float-right"><i class="fas fa-plus-circle"></i> Add</a>
              </h3>
            </div>
            <div class="box box-primary">
              <div class="box-body">
                <table width="100%" class="table table-hover display wrap" id="dataTables-example">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>icon</th>
                      <th></th>
                      <th>Label</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if(count($achie) > 0) {
                        foreach($achie as $achi) {
                    ?>
                    <tr>
                        <td><?php echo $achi["name_achi"] ?></td>
                        <td><i class="<?php echo $achi["icon_achi"] ?> text-primary"></i></td>
                        <td></td>
                        <td><?php echo $achi["label"] ?></td>
                        <td class="text-right">
                            <a href="detail_achievement.php?id=<?php echo $achi["id_achi"] ?>" class="btn btn-outline-dark btn-rounded"><i class="fas fa-info-circle"></i></a>
                            <a href="edit_achievement.php?id=<?php echo $achi["id_achi"] ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                            <a href="delete_achievement.php?id=<?php echo $achi["id_achi"] ?>" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php
                        }
                      }
                    ?>
                  </tbody>
                </table>
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