var floorMaterial = new THREE.MeshPhongMaterial( {color: 0x556676} );
var floorGeometry = new THREE.BoxGeometry( 1600, 1, 1200 );
var floor = new THREE.Mesh( floorGeometry, floorMaterial );
floor.position.set( 0, -1, 0 );
floor.receiveShadow = true;
scene.add( floor );
