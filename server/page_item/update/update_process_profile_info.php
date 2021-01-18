<?php
require("../../database/dbhandler.php");
include("../../config/path.php");
session_start();
if(!isset($_SESSION["login"])){
    header("location: ".constant("URL")."/server/");
}
$admin = queryhandler("Select * from admin LIMIT 1","get");
if(isset($_POST['change-admin-profile'])){
    $getNameadmin = $_POST['admin-name'];
    $getaddadmin = $_POST['admin-address'];
    $getabadmin = $_POST['admin-about'];
    $getPadmin = $_POST['admin-phone'];
    $getjobadmin = $_POST['admin-job'];
    if(queryhandler("update admin set name_a=?,address=?,about=?,phone=?,job=? where id_a=?","set",[$getNameadmin,$getaddadmin,$getabadmin,$getPadmin,$getjobadmin,$admin[0]['id_a']])){
        header("location: ".constant("URL")."/server/page_item/profile.php");
    }else{
        echo "Oop! Something Went Wrong!";
    }
}