<?php
  session_start();
  require_once('./conn.php');
  require_once('./utils.php');

  $nickname = $_POST['nickname'];
  $username = $_POST['username'];
  $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // 密碼加入 hash

  if (empty($nickname) || empty($username) || empty($password)) {
    printMessage('請輸入完整資訊', './register.php');
  } else {
    $sql = "INSERT INTO PeterKan01_users(nickname, username, password) VALUE('$nickname', '$username', '$password')";
    if ($conn->query($sql)) {
      $_SESSION['username'] = $username;
      printMessage('註冊成功', './login.php');
    } else {
      printMessage('帳號已存在', './register.php');
    }
  }    
?>
