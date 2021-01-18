<?php 
require("../database/dbhandler.php");
include("../config/path.php");
session_start();
if(!isset($_SESSION["login"])){
    header("location: ".constant("URL")."/server/");
}
$admin = queryhandler("Select * from admin LIMIT 1","get");
$pfo = queryhandler("SELECT * FROM portfolio","get");
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
                Portfolio
                <a href="add_portfolio.php" class="btn btn-sm btn-outline-primary float-right"><i class="fas fa-plus-circle"></i> Add</a>
              </h3>
            </div>
            <div class="box box-primary">
              <div class="box-body">
                <table width="100%" class="table table-hover display wrap" id="dataTables-example">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th class="text-center" >image</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      if(count($pfo) > 0) {
                        foreach($pfo as $pf) {
                    ?>
                    <tr>
                        <td><a href="<?php echo $pf["link"] ?>"><?php echo $pf["name_p"] ?></a></td>
                        <td class="text-center w-50"><img src="../../img/portfolio/<?php echo $pf["image"] ?>" class=" w-25" alt="img_portf"></td>
                        <td class="text-right">
                            <a href="detail_portfolio.php?id=<?php echo $pf["id_p"] ?>" class="btn btn-outline-dark btn-rounded"><i class="fas fa-info-circle"></i></a>
                            <a href="edit_portfolio.php?id=<?php echo $pf["id_p"] ?>" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                            <a href="delete_portfolio.php?id=<?php echo $pf["id_p"] ?>" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
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