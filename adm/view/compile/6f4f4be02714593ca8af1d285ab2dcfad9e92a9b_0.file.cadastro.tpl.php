<?php
/* Smarty version 3.1.33, created on 2019-01-06 15:00:12
  from 'C:\xampp\www\php7\adm\view\noticias\cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c3209ecdf4211_57843853',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6f4f4be02714593ca8af1d285ab2dcfad9e92a9b' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\adm\\view\\noticias\\cadastro.tpl',
      1 => 1546711844,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c3209ecdf4211_57843853 (Smarty_Internal_Template $_smarty_tpl) {
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
				<form action="" method="post" enctype="multipart/form-data" class="contact-form bg-white">
					<div class="form-group">
						<h6>Título</h6>
						<input type="text" class="form-control" name="titulo" placeholder="Título" autocomplete="off" required>
					</div>

					<div class="form-group">
						<h6>Texto</h6>
						<textarea class="form-control" name="texto" placeholder="Texto"></textarea>
					</div>

					<div class="form-group">
						<h6>Categoria</h6>
						<select class="form-control" name="categoria_id" required>
							<option value="" selected disabled>--- Selecione ---</option>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
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

					<div class="form-group">
						<h6>Imagem</h6>
						<div class="input-group">
							<input type="text" class="form-control col-md-12" disabled="">
							<label class="input-group-btn">
								<span class="btn btn-img col-md-12">
									Selecionar <input type="file" name="imagem" accept="image/*" style="display: none;">
								</span>
							</label>
						</div>
					</div>

					<div class="form-btn text-center">
						<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_NOTICIAS']->value;?>
" class="col-md-3 button btn-back">Cancelar</a>
						<button class="col-md-3 button" type="submit">Salvar</button>
						<!-- <p class="form-message"></p> -->
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Script -->
<?php echo '<script'; ?>
>
$(function() {
	// We can attach the `fileselect` event to all file inputs on the page
	$(document).on('change', ':file', function() {
		var input = $(this),
		numFiles = input.get(0).files ? input.get(0).files.length : 1,
		label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [numFiles, label]);
	});

	// We can watch for our custom `fileselect` event like this
	$(document).ready( function() {
		$(':file').on('fileselect', function(event, numFiles, label) {

			var input = $(this).parents('.input-group').find(':text'),
				log = numFiles > 1 ? numFiles + ' arquivos selecionados.' : label;

			if( input.length ) {
				input.val(log);
			} else {
				if (log) alert(log);
			}
		});
	}); 
});
<?php echo '</script'; ?>
><?php }
}
