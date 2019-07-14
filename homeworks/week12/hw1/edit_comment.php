<?php 
require_once('./conn.php'); 
require_once('./check_login.php'); 
require_once('./utils.php');
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>編輯留言</title>
  <link rel="stylesheet" href="./style.css">
</head>
<body>
  <nav class="nav">
    <h1><a href='index.php'>Message Board</a></h1>
    <?php
      if (isset($user) && !empty($user)) {
        echo "<a class='user'>Hello, " . $user . "</a>";
        echo "<a href='logout.php' class='log'>Log out</a>";  
      } else {
        echo "<a class='log' href='./login.php'>Log in</a>";
        echo "<a class='reg' href='./register.php'>Sign up</a>";
      }
    ?>
    <div class="warning">「本站為練習用網站，因教學用途刻意忽略資安的實作，註冊時請勿使用任何真實的帳號或密碼」</div>
  </nav>
  <div class=container>
    <form class="add_message" method="POST" action="handle_edit_comment.php">
      <input type='hidden' value='<? echo $_GET['id'] ?>' name='id'/>
      <input class="message" name="content" type="text" placeholder="編輯留言"/>
      <?php if ($user): ?>
            <input class='submit' type='submit' value= '送出' />
      <?php else: ?>
            <div class='reminder'>請先註冊或登入</div>
      <?php endif; ?>         
    </form>
  </div>
</body>
</html>