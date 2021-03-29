var loader = new THREE.ColladaLoader();
  loader.options.convertUpAxis = true;
  loader.load( 'structure/ornamentation/flowers/pot/model.dae', function ( collada ) {

    var flower = collada.scene;

flower.position.set(650, 12, 350);
flower.scale.set(100, 100, 100);
scene.add(flower);
});
