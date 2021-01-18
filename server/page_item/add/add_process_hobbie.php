<?php
require("../../database/dbhandler.php");
include("../../config/path.php");
$admin = queryhandler("Select * from admin LIMIT 1","get");
if(isset($_POST['submit'])){
    $getNameHobbie = $_POST['hobbie-name'];
    $getIconHobbie = $_POST['hobbie-icon'];
    $getdetailHobbie = $_POST['hobbie-detail'];
    if(queryhandler("insert into hobbies( `id_a`,`name_h`, `icon_h`, `describes`) values(?,?,?,?)","set",[$admin[0]['id_a'],$getNameHobbie,$getIconHobbie,$getdetailHobbie])){
        header("location: ".constant("URL")."/server/page_item/hobbie.php");
    }else{
        echo "Oop! Something Went Wrong!";
    }
}