## 請說明雜湊跟加密的差別在哪裡，為什麼密碼要雜湊過後才存入資料庫

加密：

1. 可逆，雙向。

2. 可解析。

雜湊：

1. 不可逆，單向（無限的輸入轉換為有限的輸出。


## 請舉出三種不同的雜湊函數

1. SHA-3

置換方法是先定義字的長度為二的 n 次方，w = 2＾n 位元。SHA-3 的主要應用使用 64 位元的字長，n = 6。

2. md5

輸入不定長度資訊，輸出固定長度 128-bits 的演算法，經過程式流程，生成四個 32 位元資料。

3. RIPEMD-160

160 位元的 RIPEMD-160 哈希值是以 40 位的十六進制所表示。


## 請去查什麼是 Session，以及 Session 跟 Cookie 的差別

Session：

1. 保存在 Server 端，紀錄使用者資訊。

2. 在用戶身份驗證後，產生一組對應的 Session ID，並傳回 Client 端存入瀏覽器的 Cookie。

3. 為確保安全性，Session 設有使用週期。

Cookie：

1. 存在於瀏覽器內，用以儲存 Server 端發送的資料。

2. Cookie 的內容，只針對原 domain 起作用。

3. 為確保安全性，Cookie 設有使用週期。


##  `include`、`require`、`include_once`、`require_once` 的差別

`include`：

程式碼出錯時，顯示 Warning，並 ‘繼續進行’，適用於介面中途等。

`require`：

程式碼出錯時，顯示 Fatal Error，且 ‘停止進行’，適用在初始資料引入。

`include_once`：

與 include 相同，但只引入一次程式碼。

`require_once`：

與 require 相同，但只引入一次程式碼。
