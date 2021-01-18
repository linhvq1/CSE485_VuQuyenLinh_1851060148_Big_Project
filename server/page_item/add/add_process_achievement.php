<?php
require("../../database/dbhandler.php");
include("../../config/path.php");
$admin = queryhandler("Select * from admin LIMIT 1","get");
if(isset($_POST['submit'])){
    $getNamachi = $_POST['achi-name'];
    $geticonachi = $_POST['achi-icon'];
    $getlabelachi = $_POST['achi-label'];
    if(queryhandler("insert into achievement( `id_a`, `name_achi`, `icon_achi`, `label`) values(?,?,?,?)","set",[$admin[0]['id_a'],$getNamachi,$geticonachi,$getlabelachi])){
        header("location: ".constant("URL")."/server/page_item/achievement.php");
    }else{
        echo "Oop! Something Went Wrong!";
    }
}