const request = require('request');
const process = require('process');

if (process.argv[2] === 'list') {
  request.get(
    'https://lidemy-book-store.herokuapp.com/books?_limit=20',
    (error, response, body) => {
      const obj = JSON.parse(body);
      obj.forEach((book) => {
        console.log(`${book.id}`, `${book.name}`)
      });    
    }
  );
} else if (process.argv[2] === 'read') {
  request.get(
    'https://lidemy-book-store.herokuapp.com/books/' + process.argv[3],
    (error, response, body) => {
      const obj = JSON.parse(body);
      console.log(obj.name)
    }
  );    
} else if (process.argv[2] === 'delete') {
  request.delete(
    'https://lidemy-book-store.herokuapp.com/books/' + process.argv[3],
    () => {
      console.log(process.argv[3]);
    }
  );
} else if (process.argv[2] === 'create') {
  request.post(
    {
      url: 'https://lidemy-book-store.herokuapp.com/books/',
      form: {
        id: '',
        name: process.argv[3]
      }
    },
    () => {
      console.log(`${process.argv[3]}`)
    }
  );
} else if (process.argv[2] === 'update') {
  request.post(
    {
      url: 'https://lidemy-book-store.herokuapp.com/books/',
      form: {
        id: process.argv[3],
        name: process.argv[4]
      }
    },
    () => {
      console.log(`${process.argv[3]}`, `${process.argv[4]}`)
    }
  );
} 