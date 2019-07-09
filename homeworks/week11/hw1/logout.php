<?php
  setcookie("token",'', time()+3600*24);
  header('location: ./login.php');
?>