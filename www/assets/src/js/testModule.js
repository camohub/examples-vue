
function test() {
	const materials = [
		'Hydrogen',
		'Helium',
		'Lithium',
		'Beryllium'
	];

	console.log(materials.map(material => material.length));
}

let xxx = 'xxx';

module.exports.test = test;
module.exports.xxx = xxx;
