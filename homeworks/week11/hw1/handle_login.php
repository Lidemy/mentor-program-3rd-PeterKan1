<?php
  require_once('./conn.php');
  require_once('./utils.php');

  $username = $_POST['username'];
  $password = $_POST['password']; 

  if (empty($username) || empty($password)) {
    printMessage('請輸入帳號或密碼', './login.php');
  } else {
    $sql = "SELECT * FROM PeterKan01_users WHERE username='$username'";
    $result = $conn->query($sql);
    if (!$result) {
      printMessage('$conn->error', './login.php');
      exit();
    }
    if ($result->num_rows <= 0) {
      printMessage('帳號或密碼錯誤', './login.php');
      exit();
    }

    $row = $result->fetch_assoc();
    $hash_password = $row['password'];
    
    if (password_verify($password, $hash_password)) {
      setToken($conn, $username);
      header('Location: ./index.php');
    } else {
      printMessage('帳號或密碼錯誤', './login.php');
    }
  }  
?>
