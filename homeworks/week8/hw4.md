## 什麼是 Ajax？
AJAX（Asynchronous JavaScript And XML），這是一項瀏覽器端網頁開發技術，重點在於「非同步」，且透過 JS 交換資料時，不需更換頁面。

## 用 Ajax 與我們用表單送出資料的差別在哪？
Ajax：可局部的刷新網頁內容，並透過 js 提高使用者體驗。

form：將網頁導向一個新的網址，網頁內容也會重新 render 一次，且無需 js 程式碼。

## JSONP 是什麼？
不受 Same origin policy 所管理的標籤有 ```<img>、<script>```，因此可透過 ```<script src="...">``` 來獲取資料，此作法便是 JSONP。

## 要如何存取跨網域的 API？
第一種方式：AJAX
```
// 發一個新的 request
const request = new XMLHttpRequest()
// 當 load 時會執行 function，
// 可寫為 request.addEventListener('load', ..)
request.onload = function() {
  if (request.status >= 200 && request.status < 400) {
    console.log(request.responseText)
  } else {
    console.log('err')
  }
}
// request 錯誤時就執行
request.onerror = function() {
  console.log('error')
}
// 發 request 到哪裡，true 是非同步(同時做很多事情)，false 是同步
request.open('GET', 'https://reqres.in/api/users', true)
// 把 request 傳出去 
request.send()
```

第二種方式：JSONP
```
=== index.html ===
<script>
  function setData(users) {
    console.log(users)
  }
<script>
<script src="https://test.com/user.js"></script>
...
=== user.js ===
setData([
{
  id: 1,
  name: 'hello'
}, {
  id: 2
}
])
```
## 為什麼我們在第四週時沒碰到跨網域的問題，這週卻碰到了？
第四週使用的是 Node.js，並無受到 Same origin policy 的影響。
