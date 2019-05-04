function isPalindromes(str) {
  let str2 = '';
  for (let i = str.length - 1; i >= 0; i -= 1) {
    str2 += str[i];
  }
  if (str === str2) {
    return true;
  }
  return false;
}

console.log(isPalindromes('abcba'));
