<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/partials/header1.css">
	<link rel="stylesheet" href="/partials/header.css">

</head>
</div>



<!--Conexion con animaciones y funcionalidad del carrusel y del navbar-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="./partials/js/scripts.js"></script>

<!-- Función utilizada para reducir la barra de navegación, eliminar el relleno y agregar un fondo negro -->
<script>
	$(window).scroll(function() {
		if ($(document).scrollTop() > 50) {
			$('.nav').addClass('affix');
			console.log("OK");
		} else {
			$('.nav').removeClass('affix');
		}
	});
</script>

<!-- Pie de pagia -->
<?php require "./partials/footer.php" ?>
<body>
	<div class="slider">
		<div class="slide-track">
			<div class="slide">
					<img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/sponsors/utt.png" height="100" width="240" alt="" />
			</div>
			<div class="slide">
				<img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/sponsors/Intel.png" height="100" width="240" alt="" />
			</div>
			<div class="slide">
				<img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/sponsors/google.png" height="100" width="240" alt="" />
			</div>
			<div class="slide">
				<img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/sponsors/nvidia.png" height="100" width="240" alt="" />
			</div>
			<div class="slide">
				<img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/sponsors/twitch.png" height="100" width="240" alt="" />
			</div>
			<div class="slide">
				<img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/sponsors/nintendo.png" height="100" width="240" alt="" />
			</div>
			<div class="slide">
				<img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/sponsors/Valve.png" height="100" width="240" alt="" />
			</div>
			<div class="slide">
				<img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/sponsors/blizzard.png" height="100" width="240" alt="" />
			</div>
			<div class="slide">
				<img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/sponsors/utt.png" height="100" width="240" alt="" />
			</div>
			<div class="slide">
				<img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/sponsors/Intel.png" height="100" width="240" alt="" />
			</div>
			<div class="slide">
				<img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/sponsors/google.png" height="100" width="240" alt="" />
			</div>
			<div class="slide">
				<img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/sponsors/nvidia.png" height="100" width="240" alt="" />
			</div>
			<div class="slide">
				<img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/sponsors/twitch.png" height="100" width="240" alt="" />
			</div>
			<div class="slide">
				<img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/sponsors/nintendo.png" height="100" width="240" alt="" />
			</div>
			<div class="slide">
				<img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/sponsors/Valve.png" height="100" width="240" alt="" />
			</div>
			<div class="slide">
				<img src="https://raw.githubusercontent.com/RobiiAragon/Proyecto-esperanza/main/static/img/sponsors/blizzard.png" height="100" width="240" alt="" />
			</div>
		</div>
	</div>