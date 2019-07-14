<?php
  require_once('./check_login.php'); 
  require_once('./conn.php');
  require_once('./utils.php');
  
  $content = $_POST['content'];
  $id = $_POST['id'];

  if (empty($content)) {
    printMessage('請輸入內容', $_SERVER["HTTP_REFERER"]);
  } else {
     $sql = "UPDATE PeterKan01_comments SET content = '$content' WHERE id='$id' AND username = '$username'";
    if ($conn->query($sql)) {
      header('Location: ./index.php'); // server redirect
    } else {
      printMessage($conn->error, $_SERVER["HTTP_REFERER"]); // client redirect
    }
  }    
?>
