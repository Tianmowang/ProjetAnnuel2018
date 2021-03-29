var loader = new THREE.ColladaLoader();
  loader.options.convertUpAxis = true;
  loader.load( 'structure/ornamentation/barchairs/model.dae', function ( collada ) {

    var chair = collada.scene;

chair.position.set(100, 15, 350);
chair.scale.set(125, 100, 125);
chair.rotation.z = 3.13;
scene.add(chair);
});
