<?php
  setcookie("username",'', time()+3600*24);
  header('location: ./login.php');
?>