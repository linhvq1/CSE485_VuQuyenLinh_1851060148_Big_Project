<?php
require("./database/dbhandler.php");
session_start();
require("./config/path.php");
if(isset($_POST['submit'])){
    $getEmail = $_POST["email"];
    $getname = $_POST["name"];
    $getmess = $_POST["message"];
    require("../server/PHPMailer/PHPMailerAutoload.php");
    include("../server/PHPMailer/class.smtp.php");
    include("../server/PHPMailer/class.phpmailer.php");
      $nFrom = $getname." has email is ".$getEmail;//mail duoc gui tu dau, thuong de ten cong ty ban
      $mFrom = 'linhvu758@gmail.com';//dia chi email cua ban 
      $mPass = 'nguyenvu123';//mat khau email cua ban
      $nTo = "Vu Quyen Linh";//Ten nguoi nhan
      $mTo = 'linhvu758@gmail.com';//dia chi nhan mail
      $mail = new PHPMailer();
      $body = nl2br($getmess."
         form user: ".$getname." has email is ".$getEmail);//$getmess."form user: /n ".$getname." has email is ".$getEmail;// Noi dung email
      $title = 'contact from user!';//Tieu de gui mail
      $mail->IsSMTP();
      $mail->CharSet = "utf-8";
      $mail->SMTPDebug = 0;// enables SMTP debug information (for testing)
      $mail->SMTPAuth = true;// enable SMTP authentication
      $mail->SMTPSecure = "tls";// sets the prefix to the servier
      $mail->Host = "smtp.gmail.com";// sever gui mail.
      $mail->Port = 587;// cong gui mail de nguyen
      // xong phan cau hinh bat dau phan gui mail
      $mail->Username = $mFrom;// khai bao dia chi email
      $mail->Password = $mPass;// khai bao mat khau
      $mail->SetFrom($mFrom, $nFrom);
      $mail->AddReplyTo('linhvu758@gmail.com', 'Vu Quyen Linh'); //khi nguoi dung phan hoi se duoc gui den email nay
      $mail->Subject = $title;// tieu de email 
      $mail->MsgHTML($body);// noi dung chinh cua mail se nam o day.
      $mail->AddAddress($mTo, $nTo);
      if($mail->Send()) {
        $_SESSION["sent"] = "Send ok!";
        header("location:".constant("URL")."");
      } else {
        echo 'Error!';
      }
    }
