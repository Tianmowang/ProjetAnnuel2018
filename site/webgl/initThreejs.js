if ( ! Detector.webgl ) Detector.addGetWebGLMessage();
var camera, controls, scene, renderer;
init();
//render(); // remove when using next line for animation loop (requestAnimationFrame)
animate();
function init() {
  scene = new THREE.Scene();
  scene.background = new THREE.Color( 0xcccccc );
  //scene.fog = new THREE.FogExp2( 0xcccccc, 0.002 );
  renderer = new THREE.WebGLRenderer();
  renderer.setPixelRatio( window.devicePixelRatio );
  renderer.setSize( window.innerWidth, window.innerHeight );
  var container = document.getElementById( 'container' );
  container.appendChild( renderer.domElement );
  camera = new THREE.PerspectiveCamera( 60, window.innerWidth / window.innerHeight, 1, 2000 );
  camera.position.set( 690, 275, -380);
  // controls
  controls = new THREE.OrbitControls( camera, renderer.domElement );
  //controls.addEventListener( 'change', render ); // call this only in static scenes (i.e., if there is no animation loop)
  controls.enableDamping = true; // an animation loop is required when either damping or auto-rotation are enabled
  controls.dampingFactor = 0.25;
  controls.panningMode = THREE.HorizontalPanning; // default is THREE.ScreenSpacePanning
  controls.minDistance = 50;
  controls.maxDistance = 600;
  controls.maxPolarAngle = Math.PI / 2;

  window.addEventListener( 'resize', onWindowResize, false );
}
function onWindowResize() {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize( window.innerWidth, window.innerHeight );
}
function animate() {
  requestAnimationFrame( animate );
  controls.update(); // only required if controls.enableDamping = true, or if controls.autoRotate = true
  render();
}
function render() {
  renderer.render( scene, camera );
}
