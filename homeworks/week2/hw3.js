function reverse(str) {
  let str2 = '';
  for (let i = str.length - 1; i >= 0; i -= 1) {
    str2 += str[i];
  }
  console.log(str2);
}
reverse('1,2,3,4');
