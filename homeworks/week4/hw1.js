const request = require('request');

request.get(
  'https://lidemy-book-store.herokuapp.com/books?_limit=10',
  (error, response, body) => {
    const obj = JSON.parse(body);
    obj.forEach((book) => {
      console.log(`${book.id}`, `${book.name}`)
    });    
  }
);

