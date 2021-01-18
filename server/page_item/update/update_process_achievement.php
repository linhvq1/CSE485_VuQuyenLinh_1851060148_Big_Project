<?php
require("../../database/dbhandler.php");
include("../../config/path.php");
if(isset($_POST['submit'])){
    $getNamachi = $_POST['achi-name'];
    $geticonachi = $_POST['achi-icon'];
    $getlabelachi = $_POST['achi-label'];
    $getidachi = $_POST['achi-id'];
    if(queryhandler("update achievement set name_achi=?,icon_achi=?,label=? where id_achi = ?","set",[$getNamachi,$geticonachi,$getlabelachi,$getidachi])){
        header("location: ".constant("URL")."/server/page_item/achievement.php");
    }else{
        echo "Oop! Something Went Wrong!";
    }
}