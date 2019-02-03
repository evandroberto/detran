<?php
/* Smarty version 3.1.33, created on 2019-02-03 12:19:38
  from 'C:\xampp\www\php7\adm\view\questoes\cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c56ce4a956a77_86989781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b3d9c0f8f382f183057f79a66392f3c07a4a812' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\adm\\view\\questoes\\cadastro.tpl',
      1 => 1549192771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c56ce4a956a77_86989781 (Smarty_Internal_Template $_smarty_tpl) {
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
						<h6>Enunciado</h6>
						<textarea class="form-control" name="enunciado" placeholder="Enunciado" style="height: 200px;"></textarea>
					</div>

					<div class="form-group">
						<h6>Justificativa</h6>
						<textarea class="form-control" name="justificativa" placeholder="Justificativa" style="height: 100px;"></textarea>
					</div>

					<div class="row">
						<div class="col-lg-6 form-group">
							<h6>Dificuldade</h6>
							<input type="number" class="form-control" name="dificuldade" min="0" step="1" placeholder="Dificuldade" autocomplete="off" required>
						</div>
						<div class="col-lg-6 form-group">
							<h6>Proficiência</h6>
							<input type="number" class="form-control" name="proficiencia" min="0" step="1" placeholder="Proficiência" autocomplete="off" required>
						</div>
					</div>

					<div class="form-group">
						<h6>Disciplina</h6>
						<select class="form-control" name="disciplina_id" required>
							<option value="" selected disabled>--- Selecione ---</option>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DISCIPLINAS']->value, 'D');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['D']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['D']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['D']->value['sigla'];?>
 - <?php echo $_smarty_tpl->tpl_vars['D']->value['nome'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>

					<div class="form-group">
						<h6>Perfil</h6>
						<select class="form-control" name="perfil_id" required>
							<option value="" selected disabled>--- Selecione ---</option>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PERFIS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['P']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['P']->value['codigo'];?>
 - <?php echo $_smarty_tpl->tpl_vars['P']->value['nome'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>

					<div class="form-group">
						<h6>Competência</h6>
						<select class="form-control" name="competencia_id" required>
							<option value="" selected disabled>--- Selecione ---</option>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['COMPETENCIAS']->value, 'CP');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CP']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['CP']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['CP']->value['codigo'];?>
 - <?php echo $_smarty_tpl->tpl_vars['CP']->value['nome'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>

					<div class="form-group">
						<h6>Avaliação</h6>
						<select class="form-control" name="avaliacao_id" required>
							<option value="" selected disabled>--- Selecione ---</option>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AVALIACOES']->value, 'A');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['A']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['A']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['A']->value['sigla'];?>
 - <?php echo $_smarty_tpl->tpl_vars['A']->value['nome'];?>
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
						<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_QUESTOES']->value;?>
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
