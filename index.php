
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<title>LVPO</title>
<head>

</head>
<style>
  @import url("https://fonts.googleapis.com/css?family=Varela+Round");
html {
  box-sizing: border-box;
}

*,
*:before,
*:after {
  box-sizing: inherit;
  padding: 0;
  margin: 0;
  letter-spacing: 1.1px;
}

body,
html {
  width: 100%;
  height: 100%;
  background: #1e1f24;
  font-family: "Varela Round", sans-serif;
}

.menu {
  margin-left: auto;
  display: flex;
  justify-content: center;
  align-items: center;
  max-width: 1920px;
  margin: 5px;
  height: 80px;
  list-style: none;
}

.menu li {
  width: 125px;
  height: 50px;

  text-align: center;
}
.menu li a {
  font-size: 22px;
  color: rgb(54, 54, 54);
  text-decoration: none;
  transition: all 0.45s;
}
.menu li:hover {
  background: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPHN2ZyB2ZXJzaW9uPSIxLjEi%0D%0AIGlkPSJMYXllcl8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhs%0D%0AaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB3aWR0%0D%0AaD0iMzkwcHgiIGhlaWdodD0iNTBweCIgdmlld0JveD0iMCAwIDM5MCA1MCIgZW5hYmxlLWJhY2tn%0D%0Acm91bmQ9Im5ldyAwIDAgMzkwIDUwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4KPHBhdGggZmlsbD0i%0D%0Abm9uZSIgc3Ryb2tlPSIjZDk0ZjVjIiBzdHJva2Utd2lkdGg9IjEuNSIgc3Ryb2tlLW1pdGVybGlt%0D%0AaXQ9IjEwIiBkPSJNMCw0Ny41ODVjMCwwLDk3LjUsMCwxMzAsMAoJYzEzLjc1LDAsMjguNzQtMzgu%0D%0ANzc4LDQ2LjE2OC0xOS40MTZDMTkyLjY2OSw0Ni41LDI0My42MDMsNDcuNTg1LDI2MCw0Ny41ODVj%0D%0AMzEuODIxLDAsMTMwLDAsMTMwLDAiLz4KPC9zdmc+Cg==");
  -webkit-animation: line 1s;
          animation: line 1s;
}
.menu li:hover a {
  color: #d94f5c;
}
.menu li:not(:last-child) {
  margin-right: 30px;
}

@-webkit-keyframes line {
  0% {
    background-position-x: 390px;
  }
}

@keyframes line {
  0% {
    background-position-x: 390px;
  }
}</style>

<!DOCTYPE html>
<nav>
  <ul class="menu" class="logo" >

    <a href="../FINAL/INDEX.php"> <img src="./partials/static/IMG/logo1.png" alt="" width="125" height="70" /> </a>

    <li><a href="../FINAL/catalogo.php">Juegos</a></li>
    <li><a href="../FINAL/ranking.php">Ranks</a></li>
    <li><a href="../FINAL/register.php">Registrate</a></li>
    <li><a href="../FINAL/login.php">Iniciar Sesion</a></li>
  </ul>
</nav><!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - [CSS] Infinite autoplay carousel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="./partials/static/CSS/header.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="slider">
	<div class="slide-track">
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
		</div>
	</div>
</div>
<!-- partial -->

<link rel="stylesheet" href="./partials/static/CSS/normalize.css">
<link rel="stylesheet" href="./partials/static/CSS/styles.css">

<body>
<div class="principal">

  </div>

