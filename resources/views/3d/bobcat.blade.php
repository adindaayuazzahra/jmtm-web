<!DOCTYPE html>
<html lang="en">

<head>
    <title>three.js webgl - animation - keyframes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <style>
        body,
        .container {
            background-color: transparent;
        }

        a {
            color: #2983ff;
        }

    </style>
</head>

<body>

    <div id="container"></div>
    <script type="importmap">
        {
				"imports": {
					"three": "./three/build/three.module.js",
					"three/addons/": "./three/jsm/"
				}
			}
	</script>

    <script type="module">

        import * as THREE from 'three';

        import Stats from 'three/addons/libs/stats.module.js';

        import { OrbitControls } from 'three/addons/controls/OrbitControls.js';
        import { RoomEnvironment } from 'three/addons/environments/RoomEnvironment.js';

        import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
        import { DRACOLoader } from 'three/addons/loaders/DRACOLoader.js';

        let mixer;

        const clock = new THREE.Clock();
        const container = document.getElementById('container');

        const stats = new Stats();
        container.appendChild(stats.dom);
        stats.dom.style.display = 'none';

        const renderer = new THREE.WebGLRenderer({ antialias: true });
        renderer.setPixelRatio(window.devicePixelRatio);
        renderer.setSize(window.innerWidth, window.innerHeight);
        container.appendChild(renderer.domElement);

        const pmremGenerator = new THREE.PMREMGenerator(renderer);

        const scene = new THREE.Scene();
        scene.background = new THREE.Color(0xffffff);
        scene.environment = pmremGenerator.fromScene(new RoomEnvironment(renderer), 0.04).texture;

        const camera = new THREE.PerspectiveCamera(30, window.innerWidth / window.innerHeight, 1, 100);
        camera.position.set(5, 1, 8);

        const controls = new OrbitControls(camera, renderer.domElement);
        controls.target.set(0, 0.5, 0);
        controls.update();
        controls.enablePan = false;
        controls.enableDamping = true;

        const dracoLoader = new DRACOLoader();
        dracoLoader.setDecoderPath('./three/jsm/libs/draco/gltf/');

        const loader = new GLTFLoader();
        loader.setDRACOLoader(dracoLoader);
        loader.load('./assets/bobcat2.glb', function (gltf) {

            const model = gltf.scene;
            model.position.set(0, 0.5, -2);
            model.scale.set(0.0015, 0.0015, 0.0015);
            scene.add(model);

            mixer = new THREE.AnimationMixer(model);
            // mixer.clipAction( gltf.animations[ 0 ] ).play();

            animate();

        }, undefined, function (e) {

            console.error(e);

        });


        window.onresize = function () {

            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();

            renderer.setSize(window.innerWidth, window.innerHeight);

        };


        function animate() {

            requestAnimationFrame(animate);

            const delta = clock.getDelta();

            mixer.update(delta);

            controls.update();

            stats.update();

            renderer.render(scene, camera);

        }


    </script>

</body>

</html>
