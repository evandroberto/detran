<?php
/* Smarty version 3.1.33, created on 2019-02-03 13:45:29
  from 'C:\xampp\www\php7\adm\view\alternativas\lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c56e26908cdf8_25239847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fffbb146328a3d1b3dd12286649bb3b7a9a0845' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\adm\\view\\alternativas\\lista.tpl',
      1 => 1549197919,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c56e26908cdf8_25239847 (Smarty_Internal_Template $_smarty_tpl) {
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
					<h2>Listar</h2>
				</div>
			</div>
		</div>

		<!-- Contact Form -->
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<!-- Form -->
				<form action="" method="post" class="contact-form bg-white">
					<?php if ($_smarty_tpl->tpl_vars['ALT_TOTAL']->value < 1) {?>
						<?php
$_smarty_tpl->tpl_vars['I'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['I']->step = 1;$_smarty_tpl->tpl_vars['I']->total = (int) ceil(($_smarty_tpl->tpl_vars['I']->step > 0 ? $_smarty_tpl->tpl_vars['LIMITE']->value+1 - (0) : 0-($_smarty_tpl->tpl_vars['LIMITE']->value)+1)/abs($_smarty_tpl->tpl_vars['I']->step));
if ($_smarty_tpl->tpl_vars['I']->total > 0) {
for ($_smarty_tpl->tpl_vars['I']->value = 0, $_smarty_tpl->tpl_vars['I']->iteration = 1;$_smarty_tpl->tpl_vars['I']->iteration <= $_smarty_tpl->tpl_vars['I']->total;$_smarty_tpl->tpl_vars['I']->value += $_smarty_tpl->tpl_vars['I']->step, $_smarty_tpl->tpl_vars['I']->iteration++) {
$_smarty_tpl->tpl_vars['I']->first = $_smarty_tpl->tpl_vars['I']->iteration === 1;$_smarty_tpl->tpl_vars['I']->last = $_smarty_tpl->tpl_vars['I']->iteration === $_smarty_tpl->tpl_vars['I']->total;?>

							<div class="row">
								<input class="form-control" type="hidden" name="id[<?php echo $_smarty_tpl->tpl_vars['I']->value;?>
]" value="0">

								<input class="form-control" type="hidden" name="gabarito[<?php echo $_smarty_tpl->tpl_vars['I']->value;?>
]" value="0">
								<div class="col-lg-2 form-group text-center">
									<h6>Gabarito</h6>
									<input class="form-check-input" count="<?php echo $_smarty_tpl->tpl_vars['I']->value;?>
" type="radio" name="radio" required>
								</div>

								<div class="col-lg-10 form-group">
									<h6>Descrição</h6>
									<input type="text" class="form-control" name="descricao[<?php echo $_smarty_tpl->tpl_vars['I']->value;?>
]" placeholder="Descrição" autocomplete="off" required>
								</div>
							</div>

						<?php }
}
?>
					<?php } else { ?>
						<?php  $i = 0; ?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALTERNATIVAS']->value, 'A');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['A']->value) {
?>

						<div class="row">
							<input class="form-control" type="hidden" name="id[<?php echo $i?>]" value="<?php echo $_smarty_tpl->tpl_vars['A']->value['id'];?>
">

							<input class="form-control" type="hidden" name="gabarito[<?php echo $i?>]" <?php if ($_smarty_tpl->tpl_vars['A']->value['gabarito'] == 1) {?> value="1" <?php } else { ?> value="0" <?php }?>>
							<div class="col-lg-2 form-group text-center">
								<h6>Gabarito</h6>
								<input class="form-check-input" count="<?php echo $i?>" type="radio" name="radio" value="<?php echo $_smarty_tpl->tpl_vars['A']->value['gabarito'];?>
" <?php if ($_smarty_tpl->tpl_vars['A']->value['gabarito'] == 1) {?> checked <?php }?> required>
							</div>

							<div class="col-lg-9 form-group">
								<h6>Descrição</h6>
								<input type="text" class="form-control" name="descricao[<?php echo $i?>]" placeholder="Descrição" value="<?php echo $_smarty_tpl->tpl_vars['A']->value['descricao'];?>
" autocomplete="off" required>
							</div>
						</div>

						<?php  $i++; ?>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php }?>

					<input class="form-control" type="hidden" name="questao_id" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">

					<div class="form-btn text-center">
						<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_QUESTAO']->value;?>
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

$('input[type=radio]').change(function(e)
{
	var i = $(this).attr('count');

	for (var j = 0; j <= <?php echo $_smarty_tpl->tpl_vars['LIMITE']->value;?>
; j++)
	{
		$("input[name='gabarito["+j+"]']").attr("value", 0);
	}

	$("input[name='gabarito["+i+"]']").attr("value", 1);
});
	
<?php echo '</script'; ?>
><?php }
}
