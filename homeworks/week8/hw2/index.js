const request = new XMLHttpRequest(); 
const container = document.querySelector('.app')
const message = document.querySelector('.message');
const submit = document.querySelector('#submit');
const board = document.querySelector('.board');

request.onload = () => {
  if (request.status >= 200 && request.status < 400) {
    const json = JSON.parse(request.responseText);
    for (i = 0; i < json.length; i += 1) {
      const div = document.createElement('div');
      div.innerHTML = `
          <div class="board_id">${json[i].id}F</div>
          <div class="board_content">${json[i].content}</div>
      `;
      board.appendChild(div);
    }
    console.log(request.responseText);
  } else {
    console.log(request.status, request.responseText);
  }
}
request.onerror = () => {
  console.log('error');
}
request.open ('GET', 'https://lidemy-book-store.herokuapp.com/posts?_limit=20&_sort=id&_order=desc', true);
request.send();

submit.addEventListener('click', () => {
  const newPost = message.value;
  if(newPost !== '') {
    request.open('POST', 'https://lidemy-book-store.herokuapp.com/posts', true);
    request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    request.send(`content=${newPost}`);
  }
})
