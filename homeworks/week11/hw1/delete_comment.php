<?php
  require_once('./check_login.php'); 
  require_once('./conn.php');
  require_once('./utils.php');
  
  $id = $_POST['id'];

  if (empty($id)) {
    printMessage('錯誤', './index.php');
  } else {
     $sql = "DELETE FROM PeterKan01_comments WHERE id=$id or parent_id=$id";
    if ($conn->query($sql)) {
      //setcookie("username", $username, time()+3600*24);
      header('Location: ./index.php'); // server redirect
    } else {
      printMessage($conn->error, './index.php'); // client redirect
    }
  }    

?>