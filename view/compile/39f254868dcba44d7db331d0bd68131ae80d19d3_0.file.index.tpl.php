<?php
/* Smarty version 3.1.33, created on 2019-02-03 14:25:09
  from 'C:\xampp\www\detran\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c56ebb5c39fb5_62512708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '39f254868dcba44d7db331d0bd68131ae80d19d3' => 
    array (
      0 => 'C:\\xampp\\www\\detran\\view\\index.tpl',
      1 => 1546687194,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c56ebb5c39fb5_62512708 (Smarty_Internal_Template $_smarty_tpl) {
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
">AVALIAÇÕES</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CURSOS']->value;?>
">CURSOS</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_DISCIPLINAS']->value;?>
">DISCIPLINAS</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_MATRIZES']->value;?>
">MATRIZES</a></li>
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
