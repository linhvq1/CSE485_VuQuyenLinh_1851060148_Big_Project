<?php 
require("../database/dbhandler.php");
include("../config/path.php");
session_start();
if(!isset($_SESSION["login"])){
    header("location: ".constant("URL")."/server/");
}
$admin = queryhandler("Select * from admin LIMIT 1","get");
$exper = queryhandler("SELECT * FROM experience","get");
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
      <div id="body">
        <?php
          include("../component/nav.php");
        ?>
        <div class="content">
          <div class="container">
            <div class="page-title">
              <h3>
                Experience
                <a href="add_experience.php" class="btn btn-sm btn-outline-primary float-right"><i class="fas fa-plus-circle"></i> Add</a>
              </h3>
            </div>
            <div class="box box-primary">
              <div class="box-body">
                <table width="100%" class="table table-hover display wrap" id="dataTables-example">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Start</th>
                      <th>End</th>
                      <th>Label</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if(count($exper) > 0) {
                        foreach($exper as $exp) {
                    ?>
                    <tr>
                        <td><?php echo $exp["name_e"] ?></td>
                        <td><?php echo $exp["start_time"] ?></td>
                        <td><?php echo $exp["end_time"] ?></td>
                        <td><?php echo $exp["label"] ?></td>
                        <td class="text-right">
                            <a href="detail_experience.php?id=<?php echo $exp["id_e"] ?>" class="btn btn-outline-dark btn-rounded"><i class="fas fa-info-circle"></i></a>
                            <a href="edit_experience.php?id=<?php echo $exp["id_e"] ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                            <a href="delete_experience.php?id=<?php echo $exp["id_e"] ?>" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
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