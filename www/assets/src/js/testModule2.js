
function test2() {
	const materials = [
		'Hydrogen',
		'Helium',
		'Lithium',
		'Beryllium'
	];

	console.log(materials.map(material => material.length));
	fff();
}

function fff(  )
{
	console.log('fff');
}

let aaa = 'aaa';

export var test2module = {
	test2: test2,
	aaa: aaa
}
