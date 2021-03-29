var loader = new THREE.ColladaLoader();
  loader.options.convertUpAxis = true;
  loader.load( 'structure/ornamentation/tables/model.dae', function ( collada ) {

    var table2 = collada.scene;

table2.position.set(50, 12, 0);
table2.scale.set(200, 135, 102);
scene.add(table2);
});
