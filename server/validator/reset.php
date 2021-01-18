<?php
require("../database/dbhandler.php");
session_start();
require("../config/login.php");
if(isset($_POST['resetpass'])){
    $getEmail = $_REQUEST["email"];
    $admin = queryhandler("SELECT email FROM admin WHERE email=?","get",[$getEmail]);
    if(count($admin) == 0){
        $_SESSION["error"] = "Incorrect email";
    }else{
        $_SESSION["ok"] = "Check your email for a link to reset your password. If it doesn’t appear within a few minutes, check your spam folder.";
      //PHPMailer
      require("../PHPMailer/PHPMailerAutoload.php");
      include('../PHPMailer/class.smtp.php');
      include("../PHPMailer/class.phpmailer.php"); 
      $nFrom = "Vu Quyen Linh";//mail duoc gui tu dau, thuong de ten cong ty ban
      $mFrom = 'linhvu758@gmail.com';//dia chi email cua ban 
      $mPass = 'nguyenvu123';//mat khau email cua ban
      $nTo = $getEmail;//Ten nguoi nhan
      $mTo = $getEmail;//dia chi nhan mail
      $mail = new PHPMailer();
      $hash = password_hash($getEmail, PASSWORD_DEFAULT);
      $body = "http://localhost:8080/project_wed_cv/server/password_reset.php?es=$hash";// Noi dung email
      $title = 'Please reset your password!';//Tieu de gui mail
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
        $_SESSION["send"] = "Send ok!";
      } else {
        echo 'Error!';
      }
    }
}