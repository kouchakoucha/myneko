<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    <meta charset="utf-8">
    <title>我的貓貓</title>
    <link rel="shortcut icon" href="image/neko.ico">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <?php
session_start();  // 啟用交談期
$username = "";  $password = ""; $_SESSION["login_session"] = "";
// 取得表單欄位值
if ( isset($_POST["username"]) )
   $username = $_POST["username"];
if ( isset($_POST["password"]) )
   $password = $_POST["password"];
// 檢查是否輸入使用者名稱和密碼
if ($username != "" && $password != "") {
   // 建立MySQL的資料庫連接
   $link = mysqli_connect("localhost","root",
                          "856482935","mynekodb")
        or die("無法開啟MySQL資料庫連接!<br/>");
   //送出UTF8編碼的MySQL指令
   mysqli_query($link, 'SET NAMES utf8');
   // 建立SQL指令字串
   $sql="SELECT * FROM `user` WHERE `username` = '{$username}' AND `password` = '{$password}'";
   echo $username;
   echo $password;
   echo $sql;
   // 執行SQL查詢
   $result = mysqli_query($link, $sql);
   $total_records = mysqli_num_rows($result);
   // 是否有查詢到使用者記錄
   if ( $total_records > 0 ) {
      // 成功登入, 指定Session變數
      $_SESSION["login_session"] = true;
      header("Location: admin.php");
   } else {  // 登入失敗
      echo "<center><font color='red'>";
      echo "使用者名稱或密碼錯誤!<br/>";
      echo "</font>";
      $_SESSION["login_session"] = false;
   }
   mysqli_close($link);  // 關閉資料庫連接
}
?>
    <form class="" action="login.php" method="post">
      <div class="catla">
        <p style="font-size: 32px;text-align: center;">登入</p>
        <br>
        <div class="inputdiv">
          <label for="username">帳號:</label>
          <input type="text" name="username" value="" required autofocus/>
          <br>
          <br>
          <label for="password">密碼:</label>
          <input type="text" name="password" value=""/>
          <br><br>
          <input type="submit" value="登入"style="margin-left:100px;"/>
        </div>

      </div>

    </form>
    <br><br><br><br><br><br><br><br><br><br>
    <div class="catdiv">
      <img src="image/bcat.png" alt="首頁貓貓" style="height: 500px;width: 500px;left: calc(50% - 250px);right: calc(50% - 500px);position: absolute;">
    </div>
  </body>
  </html>
