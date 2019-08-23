## CSS 預處理器是什麼？我們可以不用它嗎？

有別於傳統的 css，CSS preprocessor 可設定變數、寫法更流暢等優勢。

操作範例：

在 index.sass 檔案內輸入 sass 程式碼
並在終端機輸入 `sass index.sass index.css` 
可將 .sass 之內容轉換為瀏覽器可讀取之 .css 

當然，我們可以不使用 CSS preprocessor，但當專案內容複雜且需要調整時，處理上會較為麻煩。

## 請舉出任何一個跟 HTTP Cache 有關的 Header 並說明其作用。

Cache 的機制是用來減少 Server 負載，以及縮短 Client 端資源等待的時間，來優化網頁載入的速度。

max-age：設定 cache 過期的時間，`max-age=30` 就是過 30 秒會過期

## Stack 跟 Queue 的差別是什麼？

Stack：First in, last out（類似碟餐盤）

Queue：First in, first out（類似排隊）

## 請去查詢資料並解釋 CSS Selector 的權重是如何計算的（不要複製貼上，請自己思考過一遍再自己寫出來）

權重配分（由左至右）


!important（1; 0; 0; 0; 0）

inline style（0; 1; 0; 0; 0）

id（0; 0; 1; 0; 0）

class、pseudo class、attribute（0; 0; 0; 1; 0）

tag（0; 0; 0; 0; 1）

範例：

.html
```
<div class="wrapper">
  <div class="list">
    <div id="pickme" class="item" color="white">Pick me</div>
  </div>
</div>
```
.css
```
div {color: blue;} // 0; 0; 0; 0; 1
.wrapper {color: yellow;} // 0; 0; 0; 1; 0
.list {color: red;} // 0; 0; 0; 2; 0
.item {color: green} // 0; 0; 0; 3; 0
#pickme {color: pink} // 0; 0; 1; 0; 0
```
依序: white > pick > green > red > yellow > blue 