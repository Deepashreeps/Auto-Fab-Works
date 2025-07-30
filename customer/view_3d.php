<?php
$file = isset($_GET['file']) ? $_GET['file'] : '';
$modelPath = '../admin/controller/' . $file;

if (!file_exists($modelPath)) {
    die('File does not exist.');
}

$ext = strtolower(pathinfo($modelPath, PATHINFO_EXTENSION));
if ($ext !== 'stl') {
    die('Only STL files are supported.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>STL Viewer - AutoFab Works</title>
  <style>
    body {
      margin: 0;
      background-color: #111;
      font-family: Arial, sans-serif;
    }

    canvas {
      display: block;
      width: 100vw;
      height: 100vh;
    }

    .back-button {
      position: absolute;
      bottom: 15px;
      left: 15px;
      z-index: 10;
      background-color: rgba(255, 255, 255, 0.1);
      color: #fff;
      border: 2px solid #fff;
      padding: 8px 12px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 20px;
      text-decoration: none;
      transition: background-color 0.3s, transform 0.2s;
    }

    .back-button:hover {
      background-color: rgba(255, 255, 255, 0.3);
      transform: scale(1.05);
    }

    .rotation-controls {
      position: absolute;
      top: 15px;
      right: 15px;
      display: flex;
      flex-direction: column;
      gap: 10px;
      z-index: 10;
    }

    .rotation-controls button {
      background-color: rgba(255, 255, 255, 0.1);
      color: #fff;
      border: 1px solid #fff;
      padding: 5px 10px;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
      transition: background-color 0.3s, transform 0.2s;
    }

    .rotation-controls button:hover {
      background-color: rgba(255, 255, 255, 0.3);
      transform: scale(1.05);
    }
  </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/three@0.128/examples/js/loaders/STLLoader.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/three@0.128/examples/js/controls/OrbitControls.js"></script>
</head>
<body>

<a href="view_design.php" class="back-button">&#8592;</a>

<div class="rotation-controls">
  <button onclick="rotateModel('up')">↑</button>
  <button onclick="rotateModel('down')">↓</button>
  <button onclick="rotateModel('left')">←</button>
  <button onclick="rotateModel('right')">→</button>
  <button onclick="rotateModel('cw')">⟳</button>
  <button onclick="rotateModel('ccw')">⟲</button>
  <button onclick="rotateModel('front')">Front</button>
  <button onclick="rotateModel('back')">Back</button>
  <button onclick="rotateModel('top')">Top</button>
  <button onclick="rotateModel('bottom')">Bottom</button>
</div>

<canvas id="viewer"></canvas>

<script>
let scene = new THREE.Scene();
let camera = new THREE.PerspectiveCamera(75, window.innerWidth / window.innerHeight, 0.1, 10000);
let renderer = new THREE.WebGLRenderer({ canvas: document.getElementById('viewer'), antialias: true });
renderer.setSize(window.innerWidth, window.innerHeight);
renderer.setPixelRatio(window.devicePixelRatio);

let model;
const light = new THREE.HemisphereLight(0xffffff, 0x444444, 2);
scene.add(light);

const controls = new THREE.OrbitControls(camera, renderer.domElement);
controls.enableDamping = true;
controls.dampingFactor = 0.05;

const modelPath = '<?php echo $modelPath; ?>';

const loader = new THREE.STLLoader();
loader.load(modelPath, function(geometry) {
    const material = new THREE.MeshStandardMaterial({ color: 0x999999 });
    model = new THREE.Mesh(geometry, material);
    scene.add(model);
    centerModel(model);
}, undefined, function(error) {
    console.error('Error loading STL model:', error);
});

function centerModel(obj) {
    const box = new THREE.Box3().setFromObject(obj);
    const size = box.getSize(new THREE.Vector3()).length();
    const center = box.getCenter(new THREE.Vector3());

    camera.position.set(center.x, center.y, size * 1.5);
    camera.lookAt(center);
    controls.target.copy(center);
}

function rotateModel(direction) {
    if (!model) return;

    const rotationStep = 0.1;
    switch (direction) {
        case 'up':
            model.rotation.x -= rotationStep;
            break;
        case 'down':
            model.rotation.x += rotationStep;
            break;
        case 'left':
            model.rotation.y -= rotationStep;
            break;
        case 'right':
            model.rotation.y += rotationStep;
            break;
        case 'cw':
            model.rotation.z += rotationStep;
            break;
        case 'ccw':
            model.rotation.z -= rotationStep;
            break;
        case 'back':
            model.rotation.set(0, 0, 0);
            break;
        case 'front':
            model.rotation.set(0, Math.PI, 0);
            break;
        case 'bottom':
            model.rotation.set(-Math.PI / 2, 0, 0);
            break;
        case 'top':
            model.rotation.set(Math.PI / 2, 0, 0);
            break;
    }
}

window.addEventListener('resize', () => {
    camera.aspect = window.innerWidth / window.innerHeight;
    camera.updateProjectionMatrix();
    renderer.setSize(window.innerWidth, window.innerHeight);
});

function animate() {
    requestAnimationFrame(animate);
    controls.update();
    renderer.render(scene, camera);
}
animate();
</script>

</body>
</html>