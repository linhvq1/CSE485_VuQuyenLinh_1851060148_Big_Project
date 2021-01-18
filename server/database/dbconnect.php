<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "linhcv";
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
  if($conn->connect_error) {
    die("Connection fail $conn->connect_error");
  }