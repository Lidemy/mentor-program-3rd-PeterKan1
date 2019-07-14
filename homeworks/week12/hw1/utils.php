<?php
  function printMessage($msg, $redirect) {
    echo "<script>";
    echo "alert('" . htmlentities($msg, ENT_QUOTES) . "');";
    echo "window.location = '" . $redirect . "'";
    echo "</script>";
  }

  function escape($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'utf-8');
  }

  function setToken($conn, $username) {
    $token = uniqid();
    $sql = "DELETE FROM PeterKan01_certificates WHERE username='$username'";
    $conn->query($sql);

    $sql = "INSERT INTO PeterKan01_certificates(username, token) VALUES('$username', '$token')";
    $result = $conn->query($sql);
    setcookie("token", $token, time()+3600*24);
  }

  function renderDeleteBtn($id) {
    return "
      <div class='delete-content'>
        <form  method='POST' action='./delete_comment.php'> 
          <input type='hidden' value='$id' name='id' />
          <input type='submit' value='del'/>
        </form>  
      </div>      
    ";
  }

  function renderEditBtn($id) {
    return "
      <div class='edit-content'>
        <form  method='GET' action='./edit_comment.php'> 
          <input type='hidden' value='$id' name='id' />
          <input type='submit' value='edit'/>
        </form>  
      </div>      
    ";
  }

?>