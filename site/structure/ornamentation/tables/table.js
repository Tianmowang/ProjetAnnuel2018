var loader = new THREE.ColladaLoader();
  loader.options.convertUpAxis = true;
  loader.load( 'structure/ornamentation/tables/model.dae', function ( collada ) {

    var table = collada.scene;

table.position.set(300, 12, 370);
table.scale.set(60, 325, 152);
table.rotation.z = 1.57;
scene.add(table);
});
