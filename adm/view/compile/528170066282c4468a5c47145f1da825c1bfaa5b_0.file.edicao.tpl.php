<?php
/* Smarty version 3.1.33, created on 2018-12-26 21:52:18
  from 'C:\xampp\www\php7\adm\view\cursos\edicao.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c23ea020f1fa1_16756037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '528170066282c4468a5c47145f1da825c1bfaa5b' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\adm\\view\\cursos\\edicao.tpl',
      1 => 1545826585,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c23ea020f1fa1_16756037 (Smarty_Internal_Template $_smarty_tpl) {
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

<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMPLATE']->value;?>
/template/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
tinyMCE.init({
	menubar: false,
	statusbar: false,
	selector: 'textarea'
});
<?php echo '</script'; ?>
>

<!-- Body -->
<section id="contact" class="section-padding contact-section bg-light">
	<div class="container">

		<?php if ($_smarty_tpl->tpl_vars['ALERTA']->value != '') {?>
		<blockquote class="blockquote bg-light">
			<?php if ($_smarty_tpl->tpl_vars['ALERTA']->value == 'TRUE') {?>
				<h6>Os dados foram <?php echo $_smarty_tpl->tpl_vars['ACTION']->value;?>
 com sucesso!</h6>
			<?php } else { ?>
				<h6>Ocorreu um erro! Verifique os dados e tente novamente.</h6>
			<?php }?>
		</blockquote>
		<?php }?>

		<!-- Section Title -->
		<div class="row justify-content-center">
			<div class="col-lg-6 ">
				<div class="section-title text-center">
					<h2>Editar</h2>
				</div>
			</div>
		</div>

		<!-- Contact Form -->
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<!-- Form -->
				<form action="" method="post" class="contact-form bg-white">
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CURSOS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
					<div class="row">
						<div class="col-lg-6 form-group">
							<h6>Nome</h6>
							<input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['nome'];?>
" autocomplete="off" required>
						</div>
						<div class="col-lg-6 form-group">
							<h6>Sigla</h6>
							<input type="text" class="form-control" name="sigla" placeholder="Sigla" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['sigla'];?>
" autocomplete="off" required>
						</div>
					</div>

					<div class="form-group">
						<h6>Fundamentação Legal</h6>
						<textarea class="form-control" name="fundamentacao" placeholder="Fundamentação Legal"><?php echo $_smarty_tpl->tpl_vars['C']->value['fundamentacao'];?>
</textarea>
					</div>

					<div class="form-group">
						<h6>Requisitos</h6>
						<textarea class="form-control" name="requisito" placeholder="Requisitos"><?php echo $_smarty_tpl->tpl_vars['C']->value['requisito'];?>
</textarea>
					</div>

					<input class="form-control" type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['C']->value['id'];?>
">

					<div class="form-btn text-center">
						<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CURSOS']->value;?>
" class="col-md-3 button btn-back">Cancelar</a>
						<button class="col-md-3 button" type="submit">Salvar</button>
						<!-- <p class="form-message"></p> -->
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</form>
			</div>
		</div>
	</div>
</section>
<?php }
}
