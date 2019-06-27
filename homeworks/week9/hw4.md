## 資料庫欄位型態 VARCHAR 跟 TEXT 的差別是什麼

VARCHAR 可限制字串長度，用於節省空間，可用於輸入帳號、密碼等。

TEXT 則無限制，用於輸入文章、留言內容等。



## Cookie 是什麼？在 HTTP 這一層要怎麼設定 Cookie，瀏覽器又會以什麼形式帶去 Server？

COOKIE 瀏覽器內在 Client 端的暫存訊息，用於識別用戶身份。

在 HTTP 中，Cookie 是透過在 header 告訴瀏覽器端說要設置 cookie，並根據初設定的網站範圍，當符合這個範圍的時候，就會帶著這個 cookie 在 header 裡面發送至 Server。



## 我們本週實作的會員系統，你能夠想到什麼潛在的問題嗎？

用戶資料在管理員面前一覽無遺，可能會有安全性問題。
