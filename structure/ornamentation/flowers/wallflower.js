var loader = new THREE.ColladaLoader();
  loader.options.convertUpAxis = true;
  loader.load( 'structure/ornamentation/flowers/model.dae', function ( collada ) {

    var wallflower = collada.scene;

wallflower.position.set(-512 , 0, 395);
wallflower.scale.set(106, 25, 160);
scene.add(wallflower);
});
