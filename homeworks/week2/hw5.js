function join(arr, concatStr) {
  let arr2 = [];
  for (let i = 0; i <= (arr.length - 1); i += 1) {
    if (arr.length - 1 === i) {
      arr2 += arr[i];
    } else {
      arr2 += arr[i] + concatStr;
    }
  }
  return arr2;
}

console.log(join(['a', 'b', 'c'], '!'));


function repeat(str, times) {
  let str2 = '';
  for (let i = 1; i <= times; i += 1) {
    str2 += str;
  }
  return str2;
}
console.log(repeat('abc', 2));
