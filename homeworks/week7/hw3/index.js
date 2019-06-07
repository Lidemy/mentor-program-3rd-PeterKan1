let btnPad = document.querySelector('.btn-pad');
let result = document.querySelector('#result');
let num = document.querySelectorAll('.num');
let operator = document.querySelectorAll('.operator');
let equal = document.querySelector('#equal');
let ac = document.querySelector('#ac');

 
btnPad.addEventListener('click', (e) => {
  // 將數字顯示於螢幕上 
  if (e.target.className === 'num') {
    result.innerText += e.target.innerText;
    result.innerText = parseFloat(result.innerText);
  }
  // 操作鍵保留 result.innerText，且將螢幕數字歸零
  if (e.target.className === 'operator') {
    fixedValue = result.innerText;
    result.innerText = '0';
  }
  // 加減乘除
  if (e.target.innerText === '+') {
    equal.addEventListener('click', () => {
      result.innerText = parseFloat(fixedValue) + parseFloat(result.innerText);
    })
  }
  if (e.target.innerText === '−') {
    equal.addEventListener('click', () => {
      result.innerText = parseFloat(fixedValue) - parseFloat(result.innerText);
    })
  }
  if (e.target.innerText === '×') {
    equal.addEventListener('click', () => {
      result.innerText = parseFloat(fixedValue) * parseFloat(result.innerText);
    })
  }
  if (e.target.innerText === '÷') {
    equal.addEventListener('click', () => {
      result.innerText = parseFloat(fixedValue) / parseFloat(result.innerText);
    });
  }   
}); 
  
// ac 重新整理
ac.addEventListener('click', () => {
  location.href = "./index.html";
});

/*
待處理 bug 

1. 無法使用小數點
2. 連續加減乘除答案失準
*/