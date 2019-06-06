## 什麼是 DOM？
瀏覽器提供了一個橋樑，讓 JavaScript 去改變畫面上的東西，簡單理解就是將 Document 轉換成 Object。

## 事件傳遞機制的順序是什麼；什麼是冒泡，什麼又是捕獲？
假設瀏覽器的頁面上有 3 個元素，從上到下分別是 btn、inner、outer，當監聽事件為 click 時：

點擊 btn 會顯示：

outer 捕獲 >> inner 捕獲 >> btn 捕獲 >> btn 冒泡 >> inner 冒泡 >> outer 冒泡

點擊 inner 會顯示：

outer 捕獲 >> inner 捕獲 >> inner 冒泡 >> outer 冒泡

點擊 outer 會顯示：

outer 捕獲 >> outer 冒泡

順序為：先捕獲再冒泡！

## 什麼是 event delegation，為什麼我們需要它？
利用冒泡機制減少監聽的數目，應用：

當子元素太多時，可利用父元素作為代表，以此來減少監聽的數目。

## event.preventDefault() 跟 event.stopPropagation() 差在哪裡，可以舉個範例嗎？

### event.preventDefault()：

阻止預設行為，範例：阻止進入 link。
```
<a href="/test">link</a>

const element = document.querySelector('a')
  element.addEventListener('click', function(e) {
    e.preventDefault() 
  })
```
### event.stopPropagation()：
別向上級回報，阻止當前事件繼續進行捕獲與冒泡。
```
<div class="outer">
  <div class="inner"> 
    <button class="btn"> click me </button>
  </div>
</div>

<script>
  addEvent('.outer')
  addEvent('.inner')
  function addEvent(className) {
    document.querySelector(className)
      .addEventListener('click', () => {
        console.log(className, '冒泡')
      })  
    document.querySelector('.btn')
      .addEventListener('click', (e) => {
        e.stopPropagation()
        console.log('.btn 冒泡')
      })
  }
</script>
```
點擊 button 顯示：.btn 冒泡

點擊 inner 顯示: .inner 冒泡 >> .outer 冒泡

點擊 outer 顯示: .outer 冒泡