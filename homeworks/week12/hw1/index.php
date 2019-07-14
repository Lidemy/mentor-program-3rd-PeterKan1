<?php 
require_once('./conn.php'); 
require_once('./check_login.php'); 
require_once('./utils.php');
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
    <form class="add_message" method="POST" action="add_comment.php">
      <input type='hidden' value='0' name='parent_id'/>
      <input class="message" name="content" type="text" placeholder="想說些什麼嗎？"/>
      <?php if ($user): ?>
            <input class='submit' type='submit' value= '送出' />
      <?php else: ?>
            <div class='reminder'>請先註冊或登入</div>
      <?php endif; ?>         
    </form>
    <?php
      $page = 1;
      if (isset($_GET['page']) && !empty($_GET['page'])) {
        $page = (int)$_GET['page'];
      }
      $size = 20;
      $start = $size * ($page - 1);
      $sql = "SELECT C.id, C.content, C.created_at, C.username, U.nickname 
              FROM PeterKan01_comments as C 
              LEFT JOIN PeterKan01_users  as U ON C.username = U.username
              WHERE C.parent_id = 0
              ORDER BY C.id DESC
              LIMIT $start, $size";
      $result = $conn->query($sql);
    ?>
    <?php
      $count_sql = "SELECT count(*) as count FROM PeterKan01_comments WHERE parent_id=0 ";
      $count_result = $conn->query($count_sql);
      if ($count_result && $count_result->num_rows > 0)  {
        $count= $count_result->fetch_assoc()['count'];
        $total_page = ceil($count / $size);
        echo '<div class="page">';
        for($i = 1; $i <= $total_page; $i += 1) {
          echo "<a href='./index.php?page=$i'>$i</a>";
        }
        echo '</div>';
      }
    ?>   
    <div class="message_contents">
    <?php  
      if ($result) {
        while($row = $result->fetch_assoc()) {
    ?>
      <div class='message_box'>
        <div class='nickname' name="username"><?php echo escape($row['nickname'])?> 
          <span class='time' name="created_at"><?php echo $row['created_at']?></span>
        </div>
        <div class='content' name="content"><?php echo escape($row['content'])?></div>         
        <?php 
          if ($user === $row['username']) {
            echo renderEditBtn($row['id']);
            echo renderDeleteBtn($row['id']);
          }
        ?>          
        <!-- 子留言 -->
        <div class='sub-message_contents'>
        <?php 
          $parent_id = $row['id'];
          $sql_sub = "SELECT C.id, C.content, C.created_at, C.username, U.nickname 
                      FROM PeterKan01_comments as C 
                      LEFT JOIN PeterKan01_users  as U ON C.username = U.username
                      WHERE C.parent_id = $parent_id
                      ORDER BY C.id ASC";
          $result_sub = $conn->query($sql_sub);
          if ($result_sub) {
            while($row_sub = $result_sub->fetch_assoc()) {
        ?>
          <div class='sub-message_box'>
            <div class='sub-nickname' name="username"><?php echo escape($row_sub['nickname'])?>
              <span class='sub-time' name="created_at"><?php echo $row_sub['created_at']?></span>
            </div>
            <div class='sub-content' name="content"><?php echo escape($row_sub['content'])?></div>
            <?php 
              if ($user === $row_sub['username']) {
                echo renderEditBtn($row_sub['id']);
                echo renderDeleteBtn($row_sub['id']);
              }
            ?>
          </div>
          <?php
            }
          }
          ?>
          <div class='add-sub-message_box'>
            <form method="POST" action="add_comment.php">
              <input type='hidden' value='<?php echo $parent_id; ?>' name='parent_id'/>
              <input class="add-sub-message" name="content" type="text" />
              <?php if ($user): ?>
              <input class='sub-submit' type='submit' value= '回覆' />
              <?php else: ?>
              <div class='sub-reminder'>請先登入或註冊</div>
              <?php endif; ?>         
            </form>
          </div>
        </div>    
      </div>
    <?php
        }
      }
    ?>
    </div>  
  </div>
</body>
</html>