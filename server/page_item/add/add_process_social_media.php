<?php
require("../../database/dbhandler.php");
include("../../config/path.php");
session_start();
if(!isset($_SESSION["login"])){
    header("location: ".constant("URL")."/server/");
}
$admin = queryhandler("Select * from admin LIMIT 1","get");
if(isset($_POST['submit'])){
    $getNamesocial = $_POST['social-name'];
    $getIconsocial = $_POST['social-icon'];
    $getlinksocial = $_POST['social-link'];
    if(queryhandler("insert into social_media(  `id_a`, `name_so`, `icon`, `link`) values(?,?,?,?)","set",[$admin[0]['id_a'],$getNamesocial,$getIconsocial,$getlinksocial])){
        header("location: ".constant("URL")."/server/page_item/social_media.php");
    }else{
        echo "Oop! Something Went Wrong!";
    }
}