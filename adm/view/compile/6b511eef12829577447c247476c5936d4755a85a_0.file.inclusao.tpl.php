<?php
/* Smarty version 3.1.33, created on 2019-01-05 16:28:25
  from 'C:\xampp\www\php7\adm\view\disciplinas\inclusao.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c30cd1928fa78_61037355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b511eef12829577447c247476c5936d4755a85a' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\adm\\view\\disciplinas\\inclusao.tpl',
      1 => 1546702103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c30cd1928fa78_61037355 (Smarty_Internal_Template $_smarty_tpl) {
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
					<?php if ($_smarty_tpl->tpl_vars['DISC_TOTAL']->value < 1) {?>
						<div class="row">
							<div class="col-lg-5 form-group">
								<h6>Disciplina</h6>
								<select class="form-control" name="disciplina_id">
									<option value="" selected disabled>--- Selecione ---</option>

									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DISCIPLINAS']->value, 'D');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['D']->value) {
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['D']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['D']->value['nome'];?>
</option>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</select>
							</div>

							<div class="col-lg-5 form-group">
								<h6>Questões</h6>
								<input type="number" class="form-control" name="questoes" min="1" step="1" placeholder="Questões" autocomplete="off" required>
							</div>

							<div class="col-lg-2 form-group">
								<h6>Ações</h6>
								<a href="javascript:void(0)" title="Excluir" id="excluir" data-id="<?php echo $_smarty_tpl->tpl_vars['A']->value['id'];?>
"><i class="far fa-trash-alt fa-lg"></i>&emsp;</a>
							</div>
						</div>

					<?php } else { ?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DISC_AVALIACAO']->value, 'DA');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['DA']->value) {
?>
						<div class="row">
							<div class="col-lg-6 form-group">
								<h6>Disciplina</h6>
								<select class="form-control" name="disciplina_id">
									<option value="<?php echo $_smarty_tpl->tpl_vars['DA']->value['id'];?>
" selected disabled><?php echo $_smarty_tpl->tpl_vars['DA']->value['nome'];?>
</option>
								</select>
							</div>

							<div class="col-lg-5 form-group">
								<h6>Questões</h6>
								<input type="number" class="form-control" name="questoes" value="<?php echo $_smarty_tpl->tpl_vars['DA']->value['questoes'];?>
" min="1" step="1" placeholder="Questões" autocomplete="off" required>
							</div>

							<div class="col-lg-1 form-group text-center">
								<h6>&emsp;</h6>
								<a href="javascript:void(0)" title="Excluir" id="excluir" data-id="<?php echo $_smarty_tpl->tpl_vars['DA']->value['id'];?>
"><i class="far fa-trash-alt fa-lg"></i>&emsp;</a>
							</div>
						</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>

					<div class="row">
						<div class="col-lg-1 offset-11 text-center">
							<a href="javascript:void(0)" title="Incluir" id="incluir"><i class="fas fa-plus fa-lg"></i>&emsp;</a>
						</div>
					</div>

					<div class="form-btn text-center">
						<a href="" onclick="goBack()" class="col-md-3 button btn-back">Cancelar</a>
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
function goBack() 
{
	window.history.back();
} 
<?php echo '</script'; ?>
><?php }
}
