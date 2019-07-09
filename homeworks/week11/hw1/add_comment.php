<?php
  require_once('./check_login.php'); 
  require_once('./conn.php');
  require_once('./utils.php');
  
  $content = $_POST['content'];
  $parent_id = $_POST['parent_id'];

  if (empty($content)) {
    printMessage('請輸入內容', './index.php');
  } else {
     $sql = "INSERT INTO PeterKan01_comments(content, username, parent_id) VALUE('$content', '$user', $parent_id)";
    if ($conn->query($sql)) {
      //setcookie("username", $username, time()+3600*24);
      header('Location: ./index.php'); // server redirect
    } else {
      printMessage($conn->error, './index.php'); // client redirect
    }
  }    
?>
