<?php
require("../../database/dbhandler.php");
include("../../config/path.php");
if(isset($_POST['submit'])){
    $getNameHobbie = $_POST['hobbie-name'];
    $getIconHobbie = $_POST['hobbie-icon'];
    $getdetailHobbie = $_POST['hobbie-detail'];
    $getidHobbie = $_POST['hobbie-id'];
    if(queryhandler("update hobbies set name_h=?,icon_h=?,describes=? where id_h=?","set",[$getNameHobbie,$getIconHobbie,$getdetailHobbie,$getidHobbie])){
        header("location: ".constant("URL")."/server/page_item/hobbie.php");
    }else{
        echo "Oop! Something Went Wrong!";
    }
}