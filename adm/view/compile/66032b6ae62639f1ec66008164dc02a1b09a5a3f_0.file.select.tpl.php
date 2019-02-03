<?php
/* Smarty version 3.1.33, created on 2019-01-05 14:35:22
  from 'C:\xampp\www\php7\adm\view\matrizes\select.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c30b29a2fe3c6_28847398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66032b6ae62639f1ec66008164dc02a1b09a5a3f' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\adm\\view\\matrizes\\select.tpl',
      1 => 1546695319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c30b29a2fe3c6_28847398 (Smarty_Internal_Template $_smarty_tpl) {
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
		<!-- Section Title -->
		<div class="row justify-content-center">
			<div class="col-lg-6 ">
				<div class="section-title text-center">
					<h2>Selecionar</h2>
				</div>
			</div>
		</div>

		<!-- Contact Form -->
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<!-- Form -->
				<form action="" method="post" class="contact-form bg-white">
					<div class="form-group">
						<h6>Curso</h6>
						<select class="form-control" name="curso_id">
							<option value="" selected disabled>--- Selecione ---</option>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CURSOS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['nome'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>

					<div class="form-btn text-center">
						<button class="col-md-3 button" type="submit">Ir</button>
						<!-- <p class="form-message"></p> -->
					</div>
				</form>
			</div>
		</div>
	</div>
</section><?php }
}
