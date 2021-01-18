<?php
require("../../database/dbhandler.php");
include("../../config/path.php");
$admin = queryhandler("Select * from admin LIMIT 1","get");
if(isset($_POST['submit'])){
    $getNameSkill = $_POST['skill-name'];
    $getTypeSkill = $_POST['skill-type'];
    $getIconSkill = $_POST['skill-icon'];
    $getProSkill = $_POST['skill-progress'];
    $getdetailSkill = $_POST['skill-detail'];
    $getbgSkill = $_POST['skill-background'];
    if(queryhandler("insert into skill(`id_a`, `name_s`, `type`, `icon_s`, `progress`, `background`, `detail`) values(?,?,?,?,?,?,?)","set",[$admin[0]['id_a'],$getNameSkill,$getTypeSkill,$getIconSkill,$getProSkill,$getbgSkill,$getdetailSkill,])){
        header("location: ".constant("URL")."/server/page_item/skill.php");
    }else{
        echo "Oop! Something Went Wrong!";
    }
}