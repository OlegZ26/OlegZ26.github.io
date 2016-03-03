'use strict';

function pow(x, n) {
  var result = 1;

  for (var i = 0; i < n; i++) {
    result *=x;
  }

  return result;
}

var x;
var n;

module.exports = pow;
