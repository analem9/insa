

//Test example
QUnit.test( "hello test", function( assert ) {
    assert.ok( 1 == "1", "Passed!" );
});


// Test /js/isEven.js 
QUnit.test( "isEven tests", function(assert) {
    assert.expect(5);
    var iseven0 = isEven(0);
    var iseven1 = isEven(1);
    var iseven2 = isEven(2);
    var isevenm1 = isEven(-1);
    var isevenm2 = isEven(-2);
    // assert.ok(iseven0, true, "O is even.");
    // assert.notOk(iseven1, false, "1 is odd.");
    // assert.ok(iseven2, true, "2 is even.");
    // assert.notOk(isevenm1, false, "-1 is odd.");
    // assert.ok(isevenm2, true, "-2 is even.");
    assert.ok(iseven0, "O is even.");
    assert.notOk(iseven1,"1 is odd.");
    assert.ok(iseven2, "2 is even.");
    assert.notOk(isevenm1, "-1 is odd.");
    assert.ok(isevenm2, "-2 is even.");
});

// Test /js/concatenateStr.js 
QUnit.test( "concatenateSrt tests", function(assert) {
    assert.expect(1);
    var concatenateStr1 = concatenateStr("Bobo");
    assert.equal(concatenateStr1, "Bonjour Bobo", "OK");
   
});