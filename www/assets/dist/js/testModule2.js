"use strict";

require("core-js/modules/es.array.map");

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.test2module = void 0;

function test2() {
  var materials = ['Hydrogen', 'Helium', 'Lithium', 'Beryllium'];
  console.log(materials.map(function (material) {
    return material.length;
  }));
  fff();
}

function fff() {
  console.log('fff');
}

var aaa = 'aaa';
var test2module = {
  test2: test2,
  aaa: aaa
};
exports.test2module = test2module;
