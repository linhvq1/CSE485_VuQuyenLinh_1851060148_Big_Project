<?php 
require("../database/dbhandler.php");
include("../config/path.php");
session_start();
if(!isset($_SESSION["login"])){
    header("location: ".constant("URL")."/server/");
}
if(isset($_GET['id'])){
    $getID = $_REQUEST['id'];
    if(queryhandler("delete from experience where id_e = ?","set",[$getID])){
        header("location: ".constant("URL")."/server/page_item/experience.php");
    } else{
        echo "Oop! Something Went Wrong!";
    }
    //
}
