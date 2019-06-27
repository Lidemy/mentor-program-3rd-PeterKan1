<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Log in</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <nav class="nav">
    <h1>Message Board</h1>
    <a class="reg" href="./register.php">Sign up</a>
    <div class="warning">「本站為練習用網站，因教學用途刻意忽略資安的實作，註冊時請勿使用任何真實的帳號或密碼」</div>
  </nav>
  <div class=container>
    <h1 class='title'>會員登入</h1>
    <form class="user" action="handle_login.php" method="POST">
	    帳號：<input type="text" name="username" id="username"><br>
	    密碼：<input type="password" name="password" id="password"><br>
	    <input class="submit" type="submit" value="登入">
    </form>
    <a class="register_text" href="register.php">還不是會員？</a>
  </div>
  
</body>
</html>