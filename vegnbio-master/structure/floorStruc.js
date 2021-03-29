// room
var roomGeometry = new THREE.BoxGeometry( 800, 15, 1000 );
var textureroom = THREE.ImageUtils.loadTexture( 'asset/lagune_teck_gris.jpg' );
textureroom.wrapS = textureroom.wrapT = THREE.RepeatWrapping;
textureroom.repeat.set( 5, 5 );
var roomMaterial = new THREE.MeshPhongMaterial( { map: textureroom } );
var room = new THREE.Mesh( roomGeometry, roomMaterial );
room.castShadow = true;
room.position.set(200 , 5, 0);
room.rotation.y = 1.57;
scene.add( room );

// room2
var room2Geometry = new THREE.BoxGeometry( 200, 15, 400 );
var textureroom2 = THREE.ImageUtils.loadTexture( 'asset/lagune_teck_gris.jpg' );
textureroom2.wrapS = textureroom2.wrapT = THREE.RepeatWrapping;
textureroom2.repeat.set( 1.12, 2 );
var room2Material = new THREE.MeshPhongMaterial( { map: textureroom2 } );
var room2 = new THREE.Mesh( room2Geometry, room2Material );
room2.castShadow = true;
room2.rotation.y = 1.57;
room2.position.set(-500 , 5, -300);
scene.add( room2 );

// grass
var grassGeometry = new THREE.BoxGeometry( 400, 2, 600 );
var texturegrass = THREE.ImageUtils.loadTexture( 'asset/grass.jpg' );
texturegrass.wrapS = texturegrass.wrapT = THREE.RepeatWrapping;
texturegrass.repeat.set( 4, 4 );
var grassMaterial = new THREE.MeshPhongMaterial( { map: texturegrass } );
var grass = new THREE.Mesh( grassGeometry, grassMaterial );
grass.castShadow = true;
grass.position.set(-500 , 0, 100);
scene.add( grass );
