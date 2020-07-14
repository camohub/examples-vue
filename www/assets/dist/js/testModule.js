"use strict";

require("core-js/modules/es.array.map");

function test() {
  var materials = ['Hydrogen', 'Helium', 'Lithium', 'Beryllium'];
  console.log(materials.map(function (material) {
    return material.length;
  }));
}

var xxx = 'xxx';
module.exports.test = test;
module.exports.xxx = xxx;
