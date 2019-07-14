## 請說明 SQL Injection 的攻擊原理以及防範方法

攻擊原理：

在輸入的字串中狹帶特殊字元（`' or 1=1 --`），改變語法邏輯（`select * from users where username='' or 1=1 -- 'password=''`），進而取得資料內容。

防範方法：

使用 prepare statement，將輸入的字串當作參數處理，避免影響 sql 指令。

## 請說明 XSS 的攻擊原理以及防範方法

攻擊原理：

在輸入的字串中狹帶 JavaScript 惡意程式，使網頁受到惡意程式之影響。

防範方法：

使用 escape（`echo htmlspecialchars($str, ENT_QUOTES, ‘utf-8’)`），將原本帶有特殊語意的標籤或程式碼，視為純文字。


## 請說明 CSRF 的攻擊原理以及防範方法

攻擊原理：

利用網頁身分驗證漏洞，偽造使用者對網頁做出 request 的動作。

防範方法：

在 request 中加入隨機 token，使 Server 驗證真偽。

