<?php
  session_start();
  // 從 cookie 裡拿到 PHPSESSID
  require_once('./conn.php');
  require_once('./utils.php');

  // 拿 PHPSESSID 去查
  /*
    {
      '8a4e701e2c8b0016cddd73615abbe1ea': {            
        username: $username
      }
    }
  */
  $user = $_SESSION['username'];
?>