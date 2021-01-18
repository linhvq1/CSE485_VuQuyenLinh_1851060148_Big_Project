<?php
require("../../database/dbhandler.php");
include("../../config/path.php");
session_start();
if(!isset($_SESSION["login"])){
    header("location: ".constant("URL")."/server/");
}
if (isset($_POST['port-id'])) {
    $getID = $_POST['port-id'];
    $port = queryhandler("select * from portfolio where id_p= ?", "get",[$getID]);

    if (isset($_POST['change-port-info'])) {
        $getNameport = $_POST['port-name'];
        $getlinkport = $_POST['port-link']; echo $getlinkport;
        if (queryhandler("update portfolio set name_p = ?,link = ? where id_p = ?", "set", [$getNameport,$getlinkport,$port[0]['id_p']])) {
            header("location: ".constant("URL")."/server/page_item/portfolio.php");
        } else {
            echo "Oop! Something Went Wrong!";
        }
    }
}