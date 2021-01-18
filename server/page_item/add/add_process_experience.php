<?php
require("../../database/dbhandler.php");
include("../../config/path.php");
session_start();
if(!isset($_SESSION["login"])){
    header("location: ".constant("URL")."/server/");
}
$admin = queryhandler("Select * from admin LIMIT 1","get");
if(isset($_POST['submit'])){
    $getNamexp = $_POST['exp-name'];
    $getStartexp = $_POST['exp-start'];
    $getendexp = $_POST['exp-end'];
    $getlabelexp = $_POST['exp-label'];
    $getdetailexp = $_POST['exp-detail'];
    if(queryhandler("insert into experience( `id_a`, `name_e`, `start_time`, `end_time`, `label`, `detail`) values(?,?,?,?,?,?)","set",[$admin[0]['id_a'],$getNamexp,$getStartexp,$getendexp,$getlabelexp,$getdetailexp])){
        header("location: ".constant("URL")."/server/page_item/experience.php");
    }else{
        echo "Oop! Something Went Wrong!";
    }
}