<?php
/* Smarty version 3.1.33, created on 2019-01-27 13:14:57
  from 'C:\xampp\www\php7\adm\view\disciplinas_avaliacao\inclusao.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4da0c1206384_73753739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '831ce5da18004c0c8ef32020f8279596e3728ad1' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\adm\\view\\disciplinas_avaliacao\\inclusao.tpl',
      1 => 1548591279,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c4da0c1206384_73753739 (Smarty_Internal_Template $_smarty_tpl) {
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
					<h2>Selecionar</h2>
				</div>
			</div>
		</div>

		<!-- Contact Form -->
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<!-- Form -->
				<form action="" method="post" class="contact-form bg-white">
					<div id="new">
						<?php if ($_smarty_tpl->tpl_vars['DISC_TOTAL']->value < 1) {?>
							<div class="row" id="row1">
								<div class="col-lg-6 form-group">
									<h6>Disciplina</h6>
									<select id="select" class="form-control" name="disciplina_id[]">
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
									<input type="number" class="form-control" name="questoes[]" min="1" step="1" placeholder="Questões" autocomplete="off" required>
								</div>

								<div class="col-lg-1 form-group">
									<h6>Ações</h6>
									<a class="dell" href="javascript:void(0)" title="Excluir" id="1"><i class="far fa-trash-alt fa-lg"></i>&emsp;</a>
								</div>
							</div>

						<?php } else { ?>
							<?php  $i = 1; ?>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DISC_AVALIACAO']->value, 'DA');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['DA']->value) {
?>
							<div class="row" id="row<?php echo $i?>">
								<div class="col-lg-6 form-group">
									<h6>Disciplina</h6>
									<select class="form-control" name="disciplina_id[]">
										<option value="<?php echo $_smarty_tpl->tpl_vars['DA']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['DA']->value['nome'];?>
</option>
									</select>
								</div>

								<div class="col-lg-5 form-group">
									<h6>Questões</h6>
									<input type="number" class="form-control number" name="questoes[]" value="<?php echo $_smarty_tpl->tpl_vars['DA']->value['questoes'];?>
" min="1" step="1" placeholder="Questões" autocomplete="off" required>
								</div>

								<div class="col-lg-1 form-group text-center">
									<h6>&emsp;</h6>
									<a class="dell" href="javascript:void(0)" title="Excluir" id="<?php echo $i?>"><i class="far fa-trash-alt fa-lg"></i>&emsp;</a>
								</div>
							</div>
							<?php  $i++; ?>

							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					</div>

					<div style="display: none;">
						<select id="select" class="form-control" name="disciplina_id[]">
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

					<div class="row">
						<div class="col-lg-1 offset-11 text-center">
							<a class="add" href="javascript:void(0)" title="Incluir" id="incluir"><i class="fas fa-plus fa-lg"></i>&emsp;</a>
						</div>
					</div>

					<input class="form-control" type="hidden" name="avaliacao_id" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">

					<div class="form-btn text-center">
						<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_AVALIACAO']->value;?>
" class="col-md-3 button btn-back">Cancelar</a>
						<button id="submit" class="col-md-3 button" type="submit" disabled>Salvar</button>
						<!-- <p class="form-message"></p> -->
					</div>
				</form>
			</div>
			<br>
			<blockquote class="blockquote bg-light" style="border: none;">
				<h6>Atenção! O total de questões deve ser igual ao quantitativo definido no cadastro da avaliação.</h6>
			</blockquote>
		</div>
	</div>
</section>

<!-- Script -->
<?php echo '<script'; ?>
> 

$('.add').click(function(e) 
{
	var div_length = $('#new > div').length;
	var i = div_length + 1;

	$("#new").append('<div class="row" id="row'+i+'"><div class="col-lg-6 form-group"><h6>Disciplina</h6><select id="select'+i+'" class="form-control" name="disciplina_id[]" required></select></div><div class="col-lg-5 form-group"><h6>Questões</h6><input type="number" class="form-control number" name="questoes[]" value="" min="1" step="1" placeholder="Questões" autocomplete="off" required></div><div class="col-lg-1 form-group text-center"><h6>&emsp;</h6><a class="dell" href="javascript:void(0)" title="Excluir" id="'+i+'"><i class="far fa-trash-alt fa-lg"></i>&emsp;</a></div></div>');

	var select = $("#select").html();

	$("#select"+i).append(select);

	e.preventDefault();

	$('.dell').click(function(e) 
	{
		var i = $(this).attr('id');

		$("#row"+i).remove();
		e.preventDefault();
	});

	$('.number').on('keyup change', function()
	{
		var limite   = <?php echo $_smarty_tpl->tpl_vars['LIMITE']->value;?>
;
		var questoes = 0;

		$('.number').each(function() 
		{
			questoes += parseInt($(this).val());
		});

		var button = $('#submit');
		
		if (questoes == limite) 
		{
			button.removeAttr('disabled');
		}
		else 
		{
			button.attr('disabled', 'disabled');
		}
	});
});

$('.dell').click(function(e) 
{
	var i = $(this).attr('id');

	$("#row"+i).remove();
	e.preventDefault();
});

$('.number').on('keyup change', function()
{
	var limite   = <?php echo $_smarty_tpl->tpl_vars['LIMITE']->value;?>
;
	var questoes = 0;

	$('.number').each(function() 
	{
		questoes += parseInt($(this).val());
	});

	var button = $('#submit');
	
	if (questoes == limite) 
	{
		button.removeAttr('disabled');
	}
	else 
	{
		button.attr('disabled', 'disabled');
	}
});

function GetDisciplinas(value) 
{
	$.ajax({
		type: "POST",
		url: "acoes_control.php",
		data: "cod_instituicao="+value,
		success: function(data) 
		{
			$("#drop_ue").html(data);
		}
	});
}

<?php echo '</script'; ?>
><?php }
}
