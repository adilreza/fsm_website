<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Webcam Stream</title>
 
<style>
#container {
	margin: 0px;
    padding: 0px;
	width: 100%;
    height: 100%;
	height: auto;
}
#videoElement {
    margin:0px;
    padding:0px;
	width: 100%;
	height: 100%;
}
</style>
</head>
 
<body>
<div id="container">
	<video autoplay="true" id="videoElement">
		No video supported.
	</video>
</div>
<script>
		var video = document.querySelector("#videoElement");
		var constraints={ audio:true, video: true };

	if (navigator.mediaDevices.getUserMedia) {
	  navigator.mediaDevices.getUserMedia(constraints)
		.then(function (mediaStream) {
		  video.srcObject = mediaStream;
		  video.play();
		})
		.catch(function (err) {
		  console.log("Something went wrong!");
		});
	}
</script>
</body>
</html>