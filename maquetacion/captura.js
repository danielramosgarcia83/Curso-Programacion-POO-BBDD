var camera = document.getElementById('camera');
var capture = document.getElementById('capture');
var captureBtn = document.getElementById('capture-btn');

// obtener acceso a la cámara
navigator.mediaDevices.getUserMedia({ video: true })
  .then(function (stream) {
    camera.srcObject = stream;
    camera.play();
    captureBtn.disabled = false;
  })
  .catch(function (error) {
    console.log("Error: " + error);
  });

// función para capturar la imagen desde la cámara
var x = 100;
var y = 100;
var width = 200;
var height = 150;

function capture() {
  
  var context = capture.getContext('2d');
  context.drawImage(camera, x, y, width, height, 0, 0, width, height);
}

var shadow = true;
function capture() {
  var context = capture.getContext('2d');
  if(shadow) {
    context.fillStyle = "rgba(0, 0, 0, 0.5)";
    context.fillRect(x, y, width, height);
  }
  context.drawImage(camera, x, y, width, height, 0, 0, width, height);
}
