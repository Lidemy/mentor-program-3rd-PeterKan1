const request = new XMLHttpRequest();
const body = document.querySelector('body');
const award = document.querySelector('.award');
const picture = document.querySelector('.picture');
const btn = document.querySelector('#btn');

request.onload = () => {
  if (request.status >= 200 && request.status < 400) {
    btn.addEventListener('click', () => {
      let result = JSON.parse(request.responseText);
      switch(result.prize) {
        case 'FIRST':
          award.innerText = "恭喜你中頭獎了！日本東京來回雙人遊！"
          picture.src = 'https://cw1.tw/CW/images/article/201708/article-598d1b33a34a9.jpg'
          body.classList.add('first');
          break
        case 'SECOND':
          award.innerText = "二獎！90 吋電視一台！"
          picture.src = 'https://www.lg.com/tw/images/monitors/24mp88hv/gallery/large01.jpg'
          break
        case 'THIRD':
          award.innerText = "恭喜你抽中三獎：知名 YouTuber簽名握手會入場券一張，bang！"
          picture.src = 'https://i.ytimg.com/vi/RXC60pWN9yc/sddefault.jpg#404_is_fine'
          break
        case 'NONE':
          award.innerText = "銘謝惠顧"
          body.classList.add('none');
          break
      }
    });   
  } else {
    alert('系統不穩定，請再試一次');
  }
}
request.onerror = () => {
  alert('系統不穩定，請再試一次');
}
request.open('GET', 'https://dvwhnbka7d.execute-api.us-east-1.amazonaws.com/default/lottery', true);
request.send();

/*
待處理項目:

1. 顯示 "NONE" 時，文字需反白

*/