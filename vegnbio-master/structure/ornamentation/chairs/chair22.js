var loader = new THREE.ColladaLoader();
  loader.options.convertUpAxis = true;
  loader.load( 'structure/ornamentation/chairs/model.dae', function ( collada ) {

    var chair = collada.scene;

chair.position.set(380, 12, 60);
chair.scale.set(125, 125, 110);
chair.rotation.z = 1.57;
scene.add(chair);
});
