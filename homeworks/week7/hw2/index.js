const form = document.querySelector('.form')
const require = document.querySelectorAll('.require');
const kind1 = document.querySelector('#form__kind1');
const kind2 = document.querySelector('#form__kind2');
let fullRequired = true; // 判斷表單是否送出

form.addEventListener('submit', (e) => {
  // 判斷 kind 
  if (!kind1.checked && !kind2.checked) {
    document.querySelector('.form__kind__both').classList.add('active');
    fullRequired = false; 
    e.preventDefault();
  }
  // 當 kind 修正後，背景顏色改變
  if (kind1.checked || kind2.checked) {
    document.querySelector('.form__kind__both').classList.remove('active');
    fullRequired = true;
    e.preventDefault();
  }
  // 判斷 require  
  for (let i = 0; i < require.length; i += 1) {
    if (require[i].value === "") {
      require[i].classList.add('active');
      fullRequired = false;
      e.preventDefault();
    }
    // 當 require 修正後，背景顏色改變
    if (require[i].value !== "") {
      require[i].classList.remove('active');
      fullRequired = true;
      e.preventDefault();
    }
  }
  if (fullRequired) {
    alert('表單送出')
    return true;
  } else {
    return false;
  }      
});
