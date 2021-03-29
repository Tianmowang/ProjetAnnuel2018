var texturewall = THREE.ImageUtils.loadTexture( 'asset/wall.jpg' );
texturewall.wrapS = texturewall.wrapT = THREE.RepeatWrapping;
texturewall.repeat.set( 12, 6 );
var texturewallMaterial = new THREE.MeshPhongMaterial( { map: texturewall } );

// wallRight
var wallrightGeometry = new THREE.BoxGeometry( 1400, 275, 5 );
var wallright = new THREE.Mesh( wallrightGeometry, texturewallMaterial );
wallright.castShadow = true;
wallright.position.set( 0, 135, -400 );
scene.add( wallright );

// wallLeft
var wallLeftGeometry = new THREE.BoxGeometry( 1400, 275, 5 );
var wallLeft = new THREE.Mesh( wallLeftGeometry, texturewallMaterial );
wallLeft.castShadow = true;
wallLeft.position.set( 0, 135,  400 );
scene.add( wallLeft );

// walltop
var walltopGeometry = new THREE.BoxGeometry( 5, 275, 800 );
var walltop = new THREE.Mesh( walltopGeometry, texturewallMaterial );
walltop.castShadow = true;
walltop.position.set( -698, 135, 0 );
scene.add( walltop );

// wallback
var wallbackGeometry = new THREE.BoxGeometry( 5, 275, 800 );
var wallback = new THREE.Mesh( wallbackGeometry, texturewallMaterial );
wallback.castShadow = true;
wallback.position.set( 698, 135, 0 );
scene.add( wallback );

var textureplinth = THREE.ImageUtils.loadTexture( 'asset/plinth.jpg' );
textureplinth.wrapS = textureplinth.wrapT = THREE.RepeatWrapping;
textureplinth.repeat.set( 40, 1 );
var textureplinthMaterial = new THREE.MeshPhongMaterial( { map: textureplinth } );

// plinthRight
var plinthrightGeometry = new THREE.BoxGeometry( 1400, 15, 5 );
var plinthright = new THREE.Mesh( plinthrightGeometry, textureplinthMaterial );
plinthright.castShadow = true;
plinthright.position.set( 0, 20, -398 );
scene.add( plinthright );

// plinthLeflt
var plinthleftGeometry = new THREE.BoxGeometry( 1000, 15, 5 );
var plinthleft = new THREE.Mesh( plinthleftGeometry, textureplinthMaterial );
plinthleft.castShadow = true;
plinthleft.position.set( 200, 20, 398 );
scene.add( plinthleft );

// plinthTop
var plinthtopGeometry = new THREE.BoxGeometry( 5, 15, 200 );
var plinthtop = new THREE.Mesh( plinthtopGeometry, textureplinthMaterial );
plinthtop.castShadow = true;
plinthtop.position.set( -696, 20, -300 );
scene.add( plinthtop );

// plinthBack
var plinthbackGeometry = new THREE.BoxGeometry( 5, 15, 800 );
var plinthback = new THREE.Mesh( plinthbackGeometry, textureplinthMaterial );
plinthback.castShadow = true;
plinthback.position.set( 695, 20  , 0 );
scene.add( plinthback );

// Windows
var windowgeometry = new THREE.TorusGeometry( 125, 6, 20, 4 );
var windowmaterial = new THREE.MeshBasicMaterial( { color: 0xffff00 } );
var window1 = new THREE.Mesh( windowgeometry, textureplinthMaterial );
var window2 = new THREE.Mesh( windowgeometry, textureplinthMaterial );
window2.position.set( 696, 150, 150 );
window2.rotation.z = 0.78;
window2.rotation.y = 1.57;

window1.position.set( 696, 150, -150 );
window1.rotation.z = 0.78;
window1.rotation.y = 1.57;
scene.add( window1, window2 );

// glass
var glassGeometry = new THREE.BoxGeometry( 5, 175, 175 );
var glassmaterial = new THREE.MeshBasicMaterial( { color: 0x74b9ff } );
var glassright = new THREE.Mesh( glassGeometry, glassmaterial );
var glassleft = new THREE.Mesh( glassGeometry, glassmaterial );
glassright.castShadow = true;
glassright.position.set( 696, 150, 150 );
scene.add( glassright );

glassleft.castShadow = true;
glassleft.position.set( 696, 150, -150  );
scene.add( glassleft );
