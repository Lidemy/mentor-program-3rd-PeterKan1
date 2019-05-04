function stars(n) {
  const answer = [];
  for (let i = 1; i <= n; i += 1) {
    answer.push('*'.repeat(i));
  }
  return answer;
}

console.log(stars(5));
