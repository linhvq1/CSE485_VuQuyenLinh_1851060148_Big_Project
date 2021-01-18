<?php
require("../../database/dbhandler.php");
include("../../config/path.php");
if(isset($_POST['submit'])){
    $getNamesocial = $_POST['social-name'];
    $getIconsocial = $_POST['social-icon'];
    $getlinksocial = $_POST['social-link'];
    $getidsocial = $_POST['social-id'];
    if(queryhandler("update social_media set name_so=?,icon=?,link=? where id_so=?","set",[$getNamesocial,$getIconsocial,$getlinksocial,$getidsocial])){
        header("location: ".constant("URL")."/server/page_item/social_media.php");
    }else{
        echo "Oop! Something Went Wrong!";
    }
}