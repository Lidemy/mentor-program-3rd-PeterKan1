function printFactor(n) {
  for (let i = 1; n >= i; i += 1) {
    if (n % i === 0) {
      console.log(i);
    }
  }
}
printFactor(20);
