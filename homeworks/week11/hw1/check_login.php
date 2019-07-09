<?php
  require_once('./conn.php');
  require_once('./utils.php');

  $user = getUserByToken($conn, $_COOKIE['token']);

?>