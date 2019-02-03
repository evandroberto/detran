<?php
/* Smarty version 3.1.33, created on 2018-12-08 17:35:30
  from 'C:\xampp\www\php7\view\curso_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0bf2d2d1c3b5_86400975',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e86700097d5776fe3e4b12d022ccd3d930d954f' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\view\\curso_info.tpl',
      1 => 1544286928,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0bf2d2d1c3b5_86400975 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cursos']->value, 'curso');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['curso']->value) {
?>
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="section-title text-center">
					<h2>Detalhar</h2>
				</div>

				<div class="about-content">
					<h5>Nome</h5>
					<p><?php echo $_smarty_tpl->tpl_vars['curso']->value['nome'];?>
</p>

					<h5>Sigla</h5>
					<p><?php echo $_smarty_tpl->tpl_vars['curso']->value['sigla'];?>
</p>

					<h5>Fundamentação Legal</h5>
					<p><?php echo $_smarty_tpl->tpl_vars['curso']->value['fundamentacao'];?>
</p>

					<h5>Requisitos</h5>
					<p><?php echo $_smarty_tpl->tpl_vars['curso']->value['requisito'];?>
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
