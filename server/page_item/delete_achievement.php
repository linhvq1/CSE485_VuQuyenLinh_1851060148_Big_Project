<?php 
require("../database/dbhandler.php");
include("../config/path.php");
session_start();
if(!isset($_SESSION["login"])){
    header("location: ".constant("URL")."/server/");
}
if(isset($_GET['id'])){
    $getID = $_REQUEST['id'];
    if(queryhandler("delete from achievement where id_achi = ?","set",[$getID])){
        header("location: ".constant("URL")."/server/page_item/achievement.php");
    } else{
        echo "Oop! Something Went Wrong!";
    }
    //
}
