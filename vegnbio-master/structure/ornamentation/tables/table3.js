var loader = new THREE.ColladaLoader();
  loader.options.convertUpAxis = true;
  loader.load( 'structure/ornamentation/tables/model.dae', function ( collada ) {
 //dummy1.dae

    var table3 = collada.scene;

table3.position.set(450, 12, 0);
table3.scale.set(200, 135, 102);
scene.add(table3);
});
