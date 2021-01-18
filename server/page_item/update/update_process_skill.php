<?php
require("../../database/dbhandler.php");
include("../../config/path.php");
if(isset($_POST['submit'])){
    $getNameSkill = $_POST['skill-name'];
    $getTypeSkill = $_POST['skill-type'];
    $getIconSkill = $_POST['skill-icon'];
    $getProSkill = $_POST['skill-progress'];
    $getdetailSkill = $_POST['skill-detail'];
    $getbgSkill = $_POST['skill-background'];
    $getidSkill = $_POST['skill-id'];
    if(queryhandler("update skill set name_s=?,type=?,icon_s=?,progress=?,detail=?,background=? where id_s=?","set",[$getNameSkill,$getTypeSkill,$getIconSkill,$getProSkill,$getdetailSkill,$getbgSkill,$getidSkill])){
        header("location: ".constant("URL")."/server/page_item/skill.php");
    }else{
        echo "Oop! Something Went Wrong!";
    }
}