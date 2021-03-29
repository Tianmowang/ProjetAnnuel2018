var loader = new THREE.ColladaLoader();
  loader.options.convertUpAxis = true;
  loader.load( 'structure/ornamentation/lamps/model.dae', function ( collada ) {

    var lamp = collada.scene;

lamp.position.set(25, 210, -20);
lamp.scale.set(200, 200, 102);
scene.add(lamp);
});
