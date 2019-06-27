<?php 
require_once('./conn.php'); 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>message board</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <nav class="nav">
    <h1><a href='index.php'>Message Board</a></h1>
    <?php
      if (isset($_COOKIE['username']) && !empty($_COOKIE['username'])) {
        echo "<a class='user'>Hello, " . $_COOKIE['username'] . "</a>";
        echo "<a href='logout.php' class='log'>Log out</a>";  
      } else {
        echo "<a class='log' href='./login.php'>Log in</a>";
        echo "<a class='reg' href='./register.php'>Sign up</a>";
      }
    ?>
    <div class="warning">「本站為練習用網站，因教學用途刻意忽略資安的實作，註冊時請勿使用任何真實的帳號或密碼」</div>
  </nav>
  <div class=container>
    <form class="add_message" method="POST" action="add_comment.php">
      <input class="message" name="content" type="text" placeholder="想說些什麼嗎？"/>
      <?php
        echo (isset($_COOKIE['username'])) ? "<input class='submit' type='submit' value= '送出' />" : "<div class='reminder'>" . '請先註冊或登入' . "</div>";
      ?>
    </form>
    <div class="message_contents">
    <?php  
      $sql = "SELECT C.content, C.created_at, U.nickname 
              FROM Week9_Peter_comments as C 
              LEFT JOIN Week9_Peter_users  as U ON C.username = U.username
              ORDER BY C.id DESC";
      $result = $conn->query($sql);
      if ($result) {
        while($row = $result->fetch_assoc()) {
        ?>
          <div class='message_box'>
            <div class='nickname' name="username"><?php echo $row['nickname']?> 
              <span class='time' name="created_at"><?php echo $row['created_at']?></span>
            </div>
            <div class='content' name="content"><?php echo $row['content']?></div>
          </div>
        <?php
        }
      }
    ?>
    </div>  
  </div>
</body>
</html>