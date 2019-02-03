<?php
/* Smarty version 3.1.33, created on 2018-12-27 14:36:06
  from 'C:\xampp\www\php7\adm\view\categorias\detalhe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c24d546d9e4f0_45657083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0fc9eb7350a5362ea757af31890fe0db0373eb1' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\adm\\view\\categorias\\detalhe.tpl',
      1 => 1545917757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c24d546d9e4f0_45657083 (Smarty_Internal_Template $_smarty_tpl) {
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
</header>

<!-- ====== Contact Area ====== -->
<section id="contact" class="section-padding contact-section bg-light">
	<div class="container">

		<div class="cta-button">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
" class="button">Voltar</a>
		</div>

		<!-- Section Title -->
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
		<div class="row justify-content-center">
			<div class="col-lg-6">

				<div class="section-title text-center">
					<h2>Detalhar</h2>
				</div>

				<div class="about-content">
					<h5>Nome</h5>
					<p><?php echo $_smarty_tpl->tpl_vars['C']->value['nome'];?>
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
