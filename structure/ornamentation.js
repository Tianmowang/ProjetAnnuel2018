// logo
var logoGeo = new THREE.BoxGeometry( 300, 80, 0 );
var texturelogo = THREE.ImageUtils.loadTexture( 'asset/logo.jpg' );
var texturelogoMaterial = new THREE.MeshPhongMaterial( { map: texturelogo } );
var logo = new THREE.Mesh( logoGeo, texturelogoMaterial );
logo.castShadow = true;
logo.position.set( 250, 190,  -397 );
scene.add( logo );

// toilet
var toiletGeo = new THREE.BoxGeometry( 0, 25, 25 );
var texturetoilet = THREE.ImageUtils.loadTexture( 'asset/toilet.jpg' );
var texturetoiletMaterial = new THREE.MeshPhongMaterial( { map: texturetoilet } );
var toilet = new THREE.Mesh( toiletGeo, texturetoiletMaterial );
toilet.castShadow = true;
toilet.position.set( -695, 225,  -300 );
scene.add( toilet );

// parc
var parcGeo = new THREE.BoxGeometry( 0, 275, 600 );
var textureparc = THREE.ImageUtils.loadTexture( 'asset/parc.jpg' );
var textureparcMaterial = new THREE.MeshPhongMaterial( { map: textureparc } );
var parc = new THREE.Mesh( parcGeo, textureparcMaterial );
parc.castShadow = true;
parc.position.set( -695, 135,  100 );
scene.add( parc );
