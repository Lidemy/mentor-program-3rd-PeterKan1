<?php
  require_once('./conn.php');
  function printMessage($msg, $redirect) {
    echo "<script>";
    echo "alert('" . htmlentities($msg, ENT_QUOTES) . "');";
    echo "window.location = '" . $redirect . "'";
    echo "</script>";
  }
  $username = $_POST['username'];
  $password = $_POST['password'];

  if (empty($username) || empty($password)) {
    printMessage('請輸入帳號或密碼', './login.php');
  } else {
    $sql = "SELECT * FROM PeterKan01_users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    if (!$result) {
      printMessage('$conn->error', './login.php');
      exit();
    }
    if ($result->num_rows > 0) {
      setcookie("username", $username, time()+3600*24);
      header('Location: ./index.php');
    } else {
      printMessage('帳號或密碼錯誤', './login.php');
    }
  }  
?>
