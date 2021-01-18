<?php 
require("../database/dbhandler.php");
include("../config/path.php");
session_start();
if(!isset($_SESSION["login"])){
    header("location: ".constant("URL")."/server/");
}
$admin = queryhandler("Select * from admin LIMIT 1","get");
$hobbies = queryhandler("SELECT * FROM hobbies","get");
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
                My Hobbies
                <a href="add_hobbie.php" class="btn btn-sm btn-outline-primary float-right"><i class="fas fa-plus-circle"></i> Add</a>
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
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if(count($hobbies) > 0) {
                        foreach($hobbies as $hobbie) {
                    ?>
                    <tr>
                        <td><?php echo $hobbie["name_h"] ?></td>
                        <td><i class="<?php echo $hobbie["icon_h"] ?> text-primary"></i></td>
                        <td class="text-right">
                            <a href="detail_hobbie.php?id=<?php echo $hobbie["id_h"] ?>" class="btn btn-outline-dark btn-rounded"><i class="fas fa-info-circle"></i></a>
                            <a href="edit_hobbie.php?id=<?php echo $hobbie["id_h"] ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                            <a href="delete_hobbie.php?id=<?php echo $hobbie["id_h"] ?>" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
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