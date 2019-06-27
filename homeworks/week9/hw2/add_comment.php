<?php
  require_once('./conn.php');
  function printMessage($msg, $redirect) {
    echo "<script>";
    echo "alert('" . htmlentities($msg, ENT_QUOTES) . "');";
    echo "window.location = '" . $redirect . "'";
    echo "</script>";
  }
  $content = $_POST['content'];
  $username = $_COOKIE['username'];

  if (empty($content)) {
    printMessage('請輸入內容', './index.php');
  } else {
    $sql = "INSERT INTO PeterKan01_comments(content, username) VALUE('$content', '$username')";
    if ($conn->query($sql)) {
      setcookie("username", $username, time()+3600*24);
      header('Location: ./index.php'); // server redirect
    } else {
      printMessage($conn->error, './index.php'); // client redirect
    }
  }    
?>
