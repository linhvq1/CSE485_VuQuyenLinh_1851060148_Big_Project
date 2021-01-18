<?php
require("../../database/dbhandler.php");
include("../../config/path.php");
if(isset($_POST['submit'])){
    $getNamexp = $_POST['exp-name'];
    $getStartexp = $_POST['exp-start'];
    $getendexp = $_POST['exp-end'];
    $getlabelexp = $_POST['exp-label'];
    $getdetailexp = $_POST['exp-detail'];
    $getidexp = $_POST['exp-id'];
    if(queryhandler("update experience set name_e=?,start_time=?,end_time=?,label=?,detail = ? where id_e = ?","set",[$getNamexp,$getStartexp,$getendexp,$getlabelexp,$getdetailexp,$getidexp])){
        header("location: ".constant("URL")."/server/page_item/experience.php");
    }else{
        echo "Oop! Something Went Wrong!";
    }
}