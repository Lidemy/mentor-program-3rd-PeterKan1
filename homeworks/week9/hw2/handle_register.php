<?php
  require_once('./conn.php');
  function printMessage($msg, $redirect) {
    echo "<script>";
    echo "alert('" . htmlentities($msg, ENT_QUOTES) . "');";
    echo "window.location = '" . $redirect . "'";
    echo "</script>";
  }
  $nickname = $_POST['nickname'];
  $username = $_POST['username'];
  $password = $_POST['password']; 

  if (empty($nickname) || empty($username) || empty($password)) {
    printMessage('請輸入完整資訊', './register.php');
  } else {
    $sql = "INSERT INTO PeterKan01_users(nickname, username, password) VALUE('$nickname', '$username', '$password')";
    if ($conn->query($sql)) {
      setcookie("username", $username, time()+3600*24);
      printMessage('註冊成功', './login.php');
    } else {
      printMessage('帳號已存在', './register.php');
    }
  }    
?>
