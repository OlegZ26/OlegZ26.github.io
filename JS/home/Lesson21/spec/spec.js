var pow = require('../js/pow.js');

describe("function pow", function() {
  it("return right answer", function() {
    var result = pow(4,4);
    expect(result).toEqual(256);
  });

  it("return right answer", function() {
    var result = pow(0,4);

    expect(result).toEqual(0);
  });

  it("return right answer", function() {
    var result = pow(4,0);

    expect(result).toEqual(1);
  });

  it("return right answer", function() {
    var result = pow(-4,4);

    expect(result).toEqual(256);
  });

  it("return right answer", function() {
    var result = pow(-4,-4);

    expect(result).toEqual(1);
  });
});
