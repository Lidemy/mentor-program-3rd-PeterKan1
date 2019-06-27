資料庫名稱：Week9_Peter_users

| 欄位名稱    | 欄位型態     | 說明     | 
|------------|-------------|---------|
| id         | INT         | user id |
| username   | VARCHAR(16) | 帳號     | UNIQUE
| password   | VARCHAR(16) | 密碼     |
| nickname   | VARCHAR(16) | 暱稱     |

資料庫名稱：Week9_Peter_comments

| 欄位名稱    | 欄位型態     | 說明     | 
|------------|-------------|---------|
| id         | INT         | 留言 id  |
| username   | VARCHAR(16) | 使用者 id |
| content    | TEXT        | 留言內容  |
| created_at | DATETIME    | 留言時間  |  

index.php
register.php
login.php
logout.php

handle_register.php
handle_login.php
add_comment.php
conn.php

style.css