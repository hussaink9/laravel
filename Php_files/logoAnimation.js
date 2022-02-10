import { OrbitControls } from 'https://cdn.jsdelivr.net/npm/three@0.121.1/examples/jsm/controls/OrbitControls.js';

const canvas = document.querySelector('canvas');

const size = {
  width: canvas.clientWidth,
  height: canvas.clientHeight,
};

const renderer = new THREE.WebGLRenderer({
  canvas,
  alpha: true,
});

renderer.setSize(size.width, size.height);
renderer.setPixelRatio(window.devicePixelRatio);

const camera = new THREE.PerspectiveCamera(
  45,
  size.width / size.height,
  0.1,
  1000
);

camera.position.z = 0.6;

const scene = new THREE.Scene();

const directionalLight = new THREE.DirectionalLight(0xffffff, 2);
scene.add(directionalLight);

const ambientLight = new THREE.AmbientLight(0xffffff);
scene.add(ambientLight);

const pointLight = new THREE.PointLight(0xffffff, 3);
scene.add(pointLight);

const pointLight2 = new THREE.PointLight(0xffffff, 3);
scene.add(pointLight2);

pointLight2.position.z = 10;

const loader = new THREE.GLTFLoader();

let model = null;
loader.load(
  './models/logo.glb',
  gltf => {
    model = gltf.scene.children[0];
    model.scale.set(0.5, 0.5, 0.5);
    scene.add(gltf.scene);
  },
  xhr => {
    console.log((xhr.loaded / xhr.total) * 100 + '% loaded');
  },
  error => {
    console.log('an error occurred', error);
  }
);

const controls = new OrbitControls(camera, canvas);

function animate() {
  requestAnimationFrame(animate);

  renderer.render(scene, camera);

  controls.update();
}

animate();

let previousTop;
function handleOnScoll() {
  const isScrollUp = this.oldScroll > this.scrollY;
  this.oldScroll = this.scrollY;

  const top = document.body.getBoundingClientRect().top * 0.0001;
  const absTop = Math.abs(top);

  if (absTop <= 0.25) camera.scale.z = 1 + Math.abs(top * 3.5);

  if (absTop >= 0.2 && !isScrollUp) openLogo();
  else if (absTop < 0.25 && isScrollUp) closeLogo();

  if (!(absTop >= 0.1 && absTop <= 0.17)) return;

  const x = camera.position.x,
    y = camera.position.y,
    z = camera.position.z;

  let rotSpeed = 0.2;

  if (isScrollUp) {
    camera.position.x = x * Math.cos(rotSpeed) - z * Math.sin(rotSpeed);
    camera.position.z = z * Math.cos(rotSpeed) + x * Math.sin(rotSpeed);
  } else {
    camera.position.x = x * Math.cos(rotSpeed) + z * Math.sin(rotSpeed);
    camera.position.z = z * Math.cos(rotSpeed) - x * Math.sin(rotSpeed);
  }

  // camera.lookAt(scene.position);

  if (absTop >= 0.1 && !isScrollUp) canvas.classList.add('canvas-transparent');
  else if (absTop < 0.15 && isScrollUp)
    canvas.classList.remove('canvas-transparent');
}

document.body.onscroll = handleOnScoll;

function openLogo() {
  $(document).ready(function () {
    $('.extra').hide();
    $('.model1').animate(
      {
        left: '480px',
        width: '300px',
        height: '300px',
      },
      500
    );

    $('.model2').animate(
      {
        right: '280px',
        width: '300px',
        height: '300px',
      },
      500
    );

    $('.heading').animate(
      {
        top: '15px',
        fontSize: '30px',
      },
      500
    );

    $('#col1').css({ visibility: 'visible' });
  });
}

function closeLogo() {
  // console.log('Close Logo!');
}
