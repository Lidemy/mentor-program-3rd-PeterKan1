function capitalize(str) {
  console.log(typeof str[0]);
  return str[0].toUpperCase() + str.slice(1);
}

console.log(capitalize('nick'));
