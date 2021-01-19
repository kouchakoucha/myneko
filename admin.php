<?php
if(!isset($_SESSION['login_session']) || !$_SESSION['login_session']){
 header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <meta charset="utf-8">
    <title>我的貓貓</title>
    <link rel="shortcut icon" href="image/neko.ico">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body style="margin:0;">
   <?php

   ?>
   <div class="top">
    <ul style="padding:0;margin:0;background-color: #2050be;">
      <li class="topmenu"><a href="#"style="text-decoration: none;color:white;">我的貓</a></li>
      <li class="topmenu"><a href="#"style="text-decoration: none;color:white;">第二格</a></li>
    </ul>
    <div class="catla">
      <p style="font-size: 32px;text-align: center;">開始練貓貓啦</p>
    </div>
    <div class="catdiv">
      <img src="image/bcat.png" alt="後台貓貓" style="height: 500px;width: 500px;left: calc(50% - 250px);right: calc(50% - 500px);position: absolute;">
    </div>

   </div>
  </body>
</html>
