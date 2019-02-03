<?php
/* Smarty version 3.1.33, created on 2019-02-02 16:19:42
  from 'C:\xampp\www\php7\adm\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c55b50e96ca32_00067550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fef6b92ea0ecb6d2a593d58c530c181ba8145ab' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\adm\\view\\index.tpl',
      1 => 1549120776,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c55b50e96ca32_00067550 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['TITULO']->value;?>
</title>

	<!-- ====== Google Fonts ====== -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

	<!-- ====== Favicon ====== -->
	<link rel="shortcut icon" type="image/png" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/images/favicon.png">
	
	<!-- ====== ALL CSS ====== -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/css/lightbox.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/css/animate.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/css/style.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/css/responsive.css">
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/js/sweetalert/sweetalert2.css">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/js/sweetalert/sweetalert2.all.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
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
					<img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/images/logo.png" alt="logo">
				</a>
				<!-- // Logo -->

				<!-- Mobile Menu -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-expanded="false"><span><i class="fa fa-bars"></i></span></button>
				<!-- Mobile Menu -->

				<div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
">INÍCIO</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_NOTICIAS']->value;?>
">NOTÍCIAS</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_AVALIACOES']->value;?>
">ACOMPANHAMENTO</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_AVALIACOES']->value;?>
">RELATÓRIOS</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ADMINISTRAÇÃO</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['PAG_AVALIACOES']->value;?>
">AVALIAÇÕES</a>
								<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPETENCIAS']->value;?>
">COMPETÊNCIAS</a>
								<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CURSOS']->value;?>
">CURSOS</a>
								<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['PAG_DISCIPLINAS']->value;?>
">DISCIPLINAS</a>
								<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['PAG_MATRIZES']->value;?>
">MATRIZES</a>
								<a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PERFIS']->value;?>
">PERFIS</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- ====== // Navbar ====== -->



	<?php 

	Rotas::GetPagina();

	?>

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
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/js/jquery-3.3.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/js/sweetalert/sweetalert2.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/js/lightbox.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/js/jquery.mixitup.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/js/wow.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/js/typed.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/js/skill.bar.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/js/fact.counter.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/js/main.js"><?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
