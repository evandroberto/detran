<?php
/* Smarty version 3.1.33, created on 2018-12-27 13:52:26
  from 'C:\xampp\www\php7\adm\view\avaliacoes\edicao.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c24cb0ab4e722_43381056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3b2c6d55d88a0eb4d1de86883296ac027e7bca9' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\adm\\view\\avaliacoes\\edicao.tpl',
      1 => 1545913292,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c24cb0ab4e722_43381056 (Smarty_Internal_Template $_smarty_tpl) {
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AVALIACOES']->value, 'A');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['A']->value) {
?>
					<div class="row">
						<div class="col-lg-6 form-group">
							<h6>Nome</h6>
							<input type="text" class="form-control" name="nome" placeholder="Nome" value="<?php echo $_smarty_tpl->tpl_vars['A']->value['nome'];?>
" autocomplete="off" required>
						</div>
						<div class="col-lg-6 form-group">
							<h6>Sigla</h6>
							<input type="text" class="form-control" name="sigla" placeholder="Sigla" value="<?php echo $_smarty_tpl->tpl_vars['A']->value['sigla'];?>
" autocomplete="off" required>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6 form-group">
							<h6>Tempo de Prova (min)</h6>
							<input type="number" class="form-control" name="tempo_prova" min="1" step="1" placeholder="Tempo de Prova" value="<?php echo $_smarty_tpl->tpl_vars['A']->value['tempo_prova'];?>
" autocomplete="off" required>
						</div>
						<div class="col-lg-6 form-group">
							<h6>Tempo_de Prova - TDH (min)</h6>
							<input type="number" class="form-control" name="tempo_tdh" min="1" step="1" placeholder="Tempo de Prova - TDH" value="<?php echo $_smarty_tpl->tpl_vars['A']->value['tempo_tdh'];?>
" autocomplete="off" required>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6 form-group">
							<h6>Total de Questões</h6>
							<input type="number" class="form-control" name="total_questoes" min="1" step="1" placeholder="Total de Questões" value="<?php echo $_smarty_tpl->tpl_vars['A']->value['total_questoes'];?>
" autocomplete="off" required>
						</div>
						<div class="col-lg-6 form-group">
							<h6>Alternativas por Questão</h6>
							<input type="number" class="form-control" name="total_alternativas" min="1" step="1" placeholder="Total de Alternativas" value="<?php echo $_smarty_tpl->tpl_vars['A']->value['total_alternativas'];?>
" autocomplete="off" required>
						</div>
					</div>

					<div class="form-group">
						<h6>Curso</h6>
						<select class="form-control" name="curso_id" required>
							<option value="" selected disabled>--- Selecione ---</option>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CURSOS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['C']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['A']->value['curso_id'] == $_smarty_tpl->tpl_vars['C']->value['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['C']->value['nome'];?>
</option>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>
					</div>

					<input class="form-control" type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['A']->value['id'];?>
">

					<div class="form-btn text-center">
						<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_AVALIACOES']->value;?>
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
