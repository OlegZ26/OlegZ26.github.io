var x = +prompt('Введите число, которое будем возволить в степень');
var n = +prompt('Введите степень, в которую будем возводить число');

function pow(base, exponent) {
  var result = 1;

for (var i = 0; i < exponent; i++) {
    result = result * base;
  }

return result;
}

var powResult = pow(x, n);

console.log(powResult);
