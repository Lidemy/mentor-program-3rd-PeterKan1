<?php
  session_start();
  // 產生 session id，放到 cookie
  require_once('./conn.php');
  require_once('./utils.php');

  $username = $_POST['username'];
  $password = $_POST['password']; 

  if (empty($username) || empty($password)) {
    printMessage('請輸入帳號或密碼', './login.php');
  } else {
    $stmt = $conn->prepare("SELECT password FROM PeterKan01_users WHERE username=?");
    $stmt->bind_param("s", $username);
    $result = $stmt->execute();
    if (!$result) {
      printMessage('$conn->error', './login.php');
      exit();
    }
    $stmt->store_result();
    if ($stmt->num_rows <= 0) {
      printMessage('帳號或密碼錯誤', './login.php');
      exit();
    }
    $stmt->bind_result($hash_password);
    $stmt->fetch();
    if (password_verify($password, $hash_password)) {
      // $username 放置記憶體裡
      /*
        {
          '8a4e701e2c8b0016cddd73615abbe1ea': {
            username: $username
          }
        }
      */
      $_SESSION['username'] = $username;
      header('Location: ./index.php');
    } else {
      printMessage('帳號或密碼錯誤', './login.php');
    }
  }  
?>
