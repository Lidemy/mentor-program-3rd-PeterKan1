const request = require('request')

request.get(
  {
    url: 'https://api.twitch.tv/helix/games/top',
    headers: {
      'Client-ID': '0f8fmwvjvfouvzw0flwgyu3or1zgek',
    }
  },
  (error, response, body) => {
    const obj = JSON.parse(body);
    obj.data.forEach((game) => {
      console.log(`${game.id}` `${game.name}`);
    });
  },
);