<?php
/* Smarty version 3.1.33, created on 2018-12-19 19:15:58
  from 'C:\xampp\www\php7\view\cursos\detalhe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1a8aded00068_08255460',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e72c7fccaeb497a3201a485e5b1dd6960f716ba' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\view\\cursos\\detalhe.tpl',
      1 => 1544879237,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1a8aded00068_08255460 (Smarty_Internal_Template $_smarty_tpl) {
?>	<!-- Page Title -->
	<div class="page-title bg-img section-padding bg-overlay" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/images/img2.jpg)">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<h2><?php echo $_smarty_tpl->tpl_vars['PAGINA']->value;?>
</h2>
				</div>
			</div>
		</div>
	</div>
	<!-- // Page Title -->
</header>
<!-- ====== // Header ====== -->

<!-- ====== Contact Area ====== -->
<section id="contact" class="section-padding contact-section bg-light">
	<div class="container">
		<!-- Section Title -->
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CURSOS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
		<div class="row justify-content-center">
			<div class="col-lg-6">

				<div class="section-title text-center">
					<h2>Detalhar</h2>
				</div>

				<div class="cta-button text-center">
					<a href="single-blog.html" class="button">Avaliações</a>
					<a href="single-blog.html" class="button">Disciplinas</a>
					<a href="single-blog.html" class="button">Matriz</a>
				</div>

				<div class="about-content">
					<h5>Nome</h5>
					<p><?php echo $_smarty_tpl->tpl_vars['C']->value['nome'];?>
</p>

					<h5>Sigla</h5>
					<p><?php echo $_smarty_tpl->tpl_vars['C']->value['sigla'];?>
</p>

					<h5>Fundamentação Legal</h5>
					<p><?php echo $_smarty_tpl->tpl_vars['C']->value['fundamentacao'];?>
</p>

					<h5>Requisitos</h5>
					<p><?php echo $_smarty_tpl->tpl_vars['C']->value['requisito'];?>
</p>

				</div>
			</div>
		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</section><?php }
}
