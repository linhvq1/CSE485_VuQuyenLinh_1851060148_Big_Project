<?php
require("../../database/dbhandler.php");
include("../../config/path.php");
session_start();
if(!isset($_SESSION["login"])){
    header("location: ".constant("URL")."/server/");
}
$admin = queryhandler("Select * from admin LIMIT 1","get");
    if(isset($_POST['change-port-info'])){
        if(isset($_SESSION['port'])){
            echo $_SESSION['port'];
            $id_p = $_SESSION['port'];
        $getNameport = $_POST['port-name'];
        $getlinkport = $_POST['port-link'];
        if(queryhandler("update portfolio set id_a=?,name_p=?,link=? where id_p=?","set",[$admin[0]['id_a'],$getNameport,$getlinkport,$id_p])){
            unset($_SESSION["port"]);
            header("location: ".constant("URL")."/server/page_item/portfolio.php");
        }else{
            echo "Oop! Something Went Wrong!";
        }
    }else{
        echo "errror2";
}
}
