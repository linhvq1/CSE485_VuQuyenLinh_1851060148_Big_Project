<?php
    require("../database/dbhandler.php");
    include("../config/path.php");

    session_start();
    require("../config/login.php");
    if(isset($_POST["submit"])){
        $getEmail = $_REQUEST["email"];
        $getPass = $_REQUEST["password"];
        $admin = queryhandler("select email,password,role from admin where email=?","get",[$getEmail]);
        if(count($admin)>0){
            if(password_verify($getPass,$admin[0]["password"])){
                login($getEmail,$admin[0]['role']);
                echo 'Successfully';
                //
                header("location: ".constant("URL")."/server/dashboard.php");
            }else{
                $_SESSION['error_pass_email'] = "error";
                header("location: ".constant("URL")."/server/index.php");
                echo "Incorrect email or password!";
            }
        } else{
            $_SESSION['error_pass_email'] = "error";
            header("location: ".constant("URL")."/server/index.php");
            echo "Incorrect email or password!";
        }
    }