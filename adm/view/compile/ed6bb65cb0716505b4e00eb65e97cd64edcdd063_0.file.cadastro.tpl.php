<?php
/* Smarty version 3.1.33, created on 2018-12-27 03:25:45
  from 'C:\xampp\www\php7\adm\view\cursos\cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c243829940753_98763863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ed6bb65cb0716505b4e00eb65e97cd64edcdd063' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\adm\\view\\cursos\\cadastro.tpl',
      1 => 1545826593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c243829940753_98763863 (Smarty_Internal_Template $_smarty_tpl) {
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
					<h2>Cadastrar</h2>
				</div>
			</div>
		</div>

		<!-- Contact Form -->
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<!-- Form -->
				<form action="" method="post" class="contact-form bg-white">
					<div class="row">
						<div class="col-lg-6 form-group">
							<h6>Nome</h6>
							<input type="text" class="form-control" name="nome" placeholder="Nome" autocomplete="off" required>
						</div>
						<div class="col-lg-6 form-group">
							<h6>Sigla</h6>
							<input type="text" class="form-control" name="sigla" placeholder="Sigla" autocomplete="off" required>
						</div>
					</div>

					<div class="form-group">
						<h6>Fundamentação Legal</h6>
						<textarea class="form-control" name="fundamentacao" placeholder="Fundamentação Legal"></textarea>
					</div>

					<div class="form-group">
						<h6>Requisitos</h6>
						<textarea class="form-control" name="requisito" placeholder="Requisitos"></textarea>
					</div>

					<div class="form-btn text-center">
						<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CURSOS']->value;?>
" class="col-md-3 button btn-back">Cancelar</a>
						<button class="col-md-3 button" type="submit">Salvar</button>
						<!-- <p class="form-message"></p> -->
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php }
}
