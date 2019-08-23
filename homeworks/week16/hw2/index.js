// Stack - first in, last out

function Stack() {
  let arr = [];
  return {
    push: (e) => {
      arr[arr.length] = e;
      return arr;
    },
    pop: () => {
      let result = arr[arr.length - 1] 
      arr.splice(arr.length - 1, 1);
      return result;
    }
  }
}
const stack = new Stack();
stack.push(10)
stack.push(5)
console.log(stack.pop()) // 5
console.log(stack.pop()) // 10

// Queue - first in, last out

function Queue() {
  let arr = [];
  return {
    push: (e) => {
      arr[arr.length] = e;
      return arr;
    },
    pop: () => {
      let result = arr[0] 
      arr.splice(0, 1);
      return result;
    }
  }
}
const queue = new Queue();
	queue.push(1);
	queue.push(2);
	console.log(queue.pop()); // 1
  console.log(queue.pop()); // 2
