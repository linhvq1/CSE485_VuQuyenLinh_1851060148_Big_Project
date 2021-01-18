<?php
  include("./server/config/path.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./favicon/favicon.ico" rel="icon" type="image/x-icon" />  
    <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link href="fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">
  <title>Page not found</title>
  <link href="/favicon/favicon.ico" rel="icon" type="image/x-icon" />  <style>
    @font-face {
      src: url("./fonts/cubano-regular-webfont.ttf");
      font-family: "cubano-regular";
    }
    @font-face {
      src: url("./fonts/sofiapro-light.otf");
      font-family: "sofia-pro";
    }
    .page-not-found {
      text-align: center;
    }
    .page-not-found .content h1 {
      font-family: 'cubano-regular';
      font-size: 3rem;
    }
    .page-not-found .content h5 {
      font-family: 'cubano-regular';
      font-size: 1.4rem;
    }
    .page-not-found .content p {
      font-family: 'sofia-pro';
    }
    .page-not-found .go-back a {
      text-decoration: none;
    }
    .content{
      margin-left: 30%;
      margin-right: 30%;
    }
  </style>
</head>
<body>
  <div class="page-not-found mt-5">
    <div class="border border-warning rounded content">
      <h1>404</h1>
      <hr>
      <h5>Page not found.</h5>
      <p class="qoutes">We couldn't find what you were looking for!</p>
    </div>
    <div class="go-back">
      <?php 
      session_start();
      if(!isset($_SESSION["login"])){
          header("location: ".constant("URL")."/server/");
      }else{
          ?>
      <a href="<?php echo constant("URL")."/server/dashboard.php"; ?>">Go to the front page!</a>
      <?php
      } ?>
    </div>
  </div>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.5.1.min.js"></script>
 <!-- Bootstrap core JavaScript -->
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>