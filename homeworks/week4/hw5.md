## 請以自己的話解釋 API 是什麼

我們可以把 API (Application Programming Interface) 想像是個餐廳服務生、我們與廚房之間的信差，他將填好的菜單送至廚房，再將餐點送至我們面前，透過 API 我們可以順利完成資料的交換。

## 請找出三個課程沒教的 HTTP status code 並簡單介紹

1. 503 Service Unavailable：伺服器臨時維護或是快掛了，暫時無法處理請求。

2. 304 Not Modified：東西跟之前長一樣，可以從快取拿就好。

3. 502 Bad Gateway：伺服器的某個服務沒有正確執行。


## 假設你現在是個餐廳平台，需要提供 API 給別人串接並提供基本的 CRUD 功能，包括：回傳所有餐廳資料、回傳單一餐廳資料、刪除餐廳、新增餐廳、更改餐廳，你的 API 會長什麼樣子？請提供一份 API 文件。

 Base URL: https://ho-jia-international.com

｜ 說明        ｜ Method  ｜ path             ｜ 參數        ｜ 範例                ｜
｜------------｜---------｜------------------｜------------｜---------------------｜ 
｜ 回傳所有餐廳 ｜ Get     ｜ /restaurants     ｜ _limit:數量 ｜ /restaurants_limit5 ｜
｜ 回傳單一餐廳 ｜ Get     ｜ /restaurants/:id ｜ 無          ｜ /restaurants/6     ｜
｜ 刪除餐廳    ｜ Delete  ｜ /restaurants/:id ｜ 無          ｜ 無                  ｜ 
｜ 新增餐廳    ｜ Post    ｜ /restaurants     ｜ name:餐廳名  ｜ 無                  ｜
｜ 更改餐廳    ｜ Patch   ｜ /restaurants/:id ｜ name:餐廳名  ｜ 無                  ｜