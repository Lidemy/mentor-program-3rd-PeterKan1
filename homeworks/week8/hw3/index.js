const request = new XMLHttpRequest();
const gamelist = document.querySelector('.gamelist')

request.onload = () => {
  if (request.status >= 200 && request.status < 400) {
    const data = JSON.parse(request.responseText);
    const result = data.streams
    for (let i = 0; i < result.length; i += 1) {
      const list = document.createElement('div');
      list.classList.add('profile');
      list.innerHTML = `
        <a href=${result[i].channel.url} target="_blank" class="url">
          <img src=${result[i].preview.medium} class="cover">
        </a>
        <div class="streamer">
          <img src=${result[i].channel.logo} class="logo">
            <ul>
              <li class="status">${result[i].channel.status}</li>
              <li class="display_name">${result[i].channel.display_name}</li>
              <li class="views">viewers: ${result[i].viewers}</li>
            </ul>
          <div>      
        `;
        gamelist.appendChild(list)
    }
    console.log(request.responseText);
  } else {
    console.log(request.status, request.responseText)
  }
}
request.onerror = () => {
  console.log('error')
}
request.open('GET', 'https://api.twitch.tv/kraken/streams/?game=League%20of%20Legends&limit=20', true);
request.setRequestHeader('Accept', 'application/vnd.twitchtv.v5+json');
request.setRequestHeader('Client-ID', '0f8fmwvjvfouvzw0flwgyu3or1zgek');
request.send();