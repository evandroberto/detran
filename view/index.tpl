<!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="UTF-8">
	<title>{$TITULO}</title>

	<!-- ====== Google Fonts ====== -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	
	<!-- ====== ALL CSS ====== -->
	<link rel="stylesheet" href="{$GET_TEMPLATE}/template/css/bootstrap.min.css">
	<link rel="stylesheet" href="{$GET_TEMPLATE}/template/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="{$GET_TEMPLATE}/template/css/lightbox.min.css">
	<link rel="stylesheet" href="{$GET_TEMPLATE}/template/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{$GET_TEMPLATE}/template/css/animate.css">
	<link rel="stylesheet" href="{$GET_TEMPLATE}/template/css/style.css">
	<link rel="stylesheet" href="{$GET_TEMPLATE}/template/css/responsive.css">

</head>

<body data-spy="scroll" data-target=".navbar-nav">
	
	 <!-- Preloader -->
	<!-- <div class="preloader">
		<div class="spinner">
			<div class="cube1"></div>
			<div class="cube2"></div>
		</div>
	</div> -->
	
	<!-- ====== Header ====== -->
	<header id="header" class="header">
		<!-- ====== Navbar ====== -->
		<nav class="navbar navbar-expand-lg fixed-top">
			<div class="container">
				<!-- Logo -->
				<a class="navbar-brand logo" href="index.html">
					<img src="{$GET_TEMPLATE}/template/images/logo.png" alt="logo">
				</a>
				<!-- // Logo -->

				<!-- Mobile Menu -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"><span><i class="fa fa-bars"></i></span></button>
				<!-- Mobile Menu -->

				<div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="{$GET_HOME}">INÍCIO</a></li>
						<li class="nav-item"><a class="nav-link" href="{$PAG_NOTICIAS}">NOTÍCIAS</a></li>
						<li class="nav-item"><a class="nav-link" href="{$PAG_AVALIACOES}">AVALIAÇÕES</a></li>
						<li class="nav-item"><a class="nav-link" href="{$PAG_CURSOS}">CURSOS</a></li>
						<li class="nav-item"><a class="nav-link" href="{$PAG_DISCIPLINAS}">DISCIPLINAS</a></li>
						<li class="nav-item"><a class="nav-link" href="{$PAG_MATRIZES}">MATRIZES</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- ====== // Navbar ====== -->



	{php}

	Rotas::GetPagina();

	{/php}

	<!-- ====== Footer Area ====== -->
	<footer class="footer-area" id="counter">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="copyright-text">
						<p class="text-white">DETRAN - Departamento de Trânsito do Distrito Federal</a></p>
						Desenvolvido por Evandro Roberto Mota
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- ====== // Footer Area ====== -->

	<!-- ====== ALL JS ====== -->
	<script src="{$GET_TEMPLATE}/template/js/jquery-3.3.1.min.js"></script>
	<script src="{$GET_TEMPLATE}/template/js/bootstrap.min.js"></script>
	<script src="{$GET_TEMPLATE}/template/js/lightbox.min.js"></script>
	<script src="{$GET_TEMPLATE}/template/js/owl.carousel.min.js"></script>
	<script src="{$GET_TEMPLATE}/template/js/jquery.mixitup.js"></script>
	<script src="{$GET_TEMPLATE}/template/js/wow.min.js"></script>
	<script src="{$GET_TEMPLATE}/template/js/typed.js"></script>
	<script src="{$GET_TEMPLATE}/template/js/skill.bar.js"></script>
	<script src="{$GET_TEMPLATE}/template/js/fact.counter.js"></script>
	<script src="{$GET_TEMPLATE}/template/js/main.js"></script>

</body>

</html>
