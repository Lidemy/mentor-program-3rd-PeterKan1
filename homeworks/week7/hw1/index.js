const star = document.querySelector('.star');
const bg = document.querySelector('.bg');
const again = document.querySelector('.again');

// 遊戲開始 & 改變背景顏色
star.addEventListener('click', () => {
  star.classList.add('hidden');
  let waitTime =  Math.floor(Math.random()*2000 + 1000);
  window.setTimeout(() => {
    bg.classList.add('change');
  }, waitTime);
  let time1 = new Date();
  let starTime = time1.getTime();
  // 遊戲成績
  bg.addEventListener('click', (e) => {
    if (e.target.classList.contains('change')) {
      let time2 = new Date();
      let endTime = time2.getTime();
      alert('您的成績:'+ (endTime - starTime - waitTime) / 1000 +'秒');
      again.classList.remove('hidden');
    }
    if (e.target.classList.contains('bg') && !(e.target.classList.contains('change'))) {
      alert('還沒變色');
      again.classList.remove('hidden');
    };
  });
});
// 重玩一次
again.addEventListener('click', () => {
  location.href = "./index.html";
});

/* 
待解決的 bug

1. 沒變色時點擊，alert 後會變色
2. 遊戲結束後點擊背景依然會跳出成績

*/


