var loader = new THREE.ColladaLoader();
  loader.options.convertUpAxis = true;
  loader.load( 'structure/ornamentation/bench/model.dae', function ( collada ) {
 //dummy1.dae

    var bench = collada.scene;

bench.position.set(-580, 0, 25);
bench.scale.set(130, 110, 110);
scene.add(bench);
});
