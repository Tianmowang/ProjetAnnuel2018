var loader = new THREE.ColladaLoader();
  loader.options.convertUpAxis = true;
  loader.load( 'structure/ornamentation/flowers/tank/model.dae', function ( collada ) {

    var flower = collada.scene;

flower.position.set(125, 12, -340);
flower.scale.set(250, 200, 200);
scene.add(flower);
});
