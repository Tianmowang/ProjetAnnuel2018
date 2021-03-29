var texturedoor = THREE.ImageUtils.loadTexture( 'asset/door.jpg' );
var texturedoorMaterial = new THREE.MeshPhongMaterial( { map: texturedoor } );


// toilet
var toiletGeometry = new THREE.BoxGeometry( 5, 200, 100 );
var toilet = new THREE.Mesh( toiletGeometry, texturedoorMaterial );
toilet.castShadow = true;
toilet.position.set(-695, 105, -300);
scene.add( toilet );


// entrer
var entrerGeometry = new THREE.BoxGeometry( 100, 200, 3 );
var entrer = new THREE.Mesh( entrerGeometry, texturedoorMaterial );
entrer.castShadow = true;
entrer.position.set( 500, 105, -396 );
scene.add( entrer );


// kitchen
var kitchenGeometry = new THREE.BoxGeometry( 100, 200, 3 );
var kitchen = new THREE.Mesh( kitchenGeometry, texturedoorMaterial );
kitchen.castShadow = true;
kitchen.position.set( 0, 105, -396 );
scene.add( kitchen );
