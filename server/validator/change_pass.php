<?php
    require("../database/dbhandler.php");
    include("../config/path.php");
    session_start();
    if(isset($_POST["changePassword"])){
        $getNewPass = $_REQUEST["newPass"];
        $getConfirmPass = $_REQUEST["confirmPass"];
        if($getNewPass == $getConfirmPass){
            $admin = queryhandler("SELECT email FROM admin LIMIT 1", "get");
            if (password_verify($admin[0]["email"], $_SESSION["hashEmail"])) {
                $hashNewPass = password_hash($getNewPass, PASSWORD_DEFAULT);
                if (queryhandler("UPDATE admin SET password=? WHERE email=?", "set", [$hashNewPass,$admin[0]["email"]])) {
                    unset($_SESSION["hashEmail"]);
                    unset($_SESSION["send"]);
                    //
                    header("location:".constant("URL")."/server/index.php");
                } else {
                    echo "Error!";
                }
            }
        }else{
            $_SESSION['error_pass_confirm'] = "not match";
            header("location:".constant("URL")."/server/password_reset.php");
        }
    }