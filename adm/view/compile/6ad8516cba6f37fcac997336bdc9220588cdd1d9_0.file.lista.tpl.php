<?php
/* Smarty version 3.1.33, created on 2019-01-06 15:18:49
  from 'C:\xampp\www\php7\adm\view\questoes\lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c320e490804d2_69373775',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ad8516cba6f37fcac997336bdc9220588cdd1d9' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\adm\\view\\questoes\\lista.tpl',
      1 => 1546784326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c320e490804d2_69373775 (Smarty_Internal_Template $_smarty_tpl) {
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

<!-- List Results -->
<section id="contact" class="section-padding contact-section bg-light">
	<div class="container">

		<div class="cta-button text-right">
			<a href="<?php echo $_smarty_tpl->tpl_vars['QUEST_CADASTRO']->value;?>
" class="button">Nova</a>
		</div>

		<?php if ($_smarty_tpl->tpl_vars['QUEST_TOTAL']->value < 1) {?>
		<!-- Section Title -->
		<div class="row justify-content-center">
			<div class="col-lg-6 ">
				<div class="section-title text-center">
					<h2>Oops! Não encontramos <?php echo $_smarty_tpl->tpl_vars['PAGINA']->value;?>
</h2>
				</div>
			</div>
		</div>

		<?php } else { ?>
		<!-- Section Title -->
		<div class="row justify-content-center">
			<div class="col-lg-6 ">
				<div class="section-title text-center">
					<h2>Listar</h2>
				</div>
			</div>
		</div>

		<table class="table table-hover text-center">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Proficiência</th>
					<th scope="col">Curso</th>
					<th scope="col">Disciplina</th>
					<th scope="col">Perfil</th>
					<th scope="col">Competência</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			<tbody>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['QUESTOES']->value, 'Q');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Q']->value) {
?>
				<tr>
					<th scope="row"><?php echo $_smarty_tpl->tpl_vars['Q']->value['id'];?>
</th>
					<td><?php echo $_smarty_tpl->tpl_vars['Q']->value['proficiencia'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['Q']->value['curso'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['Q']->value['disciplina'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['Q']->value['perfil'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['Q']->value['competencia'];?>
</td>
					<td class="col-md-2">
						<a href="<?php echo $_smarty_tpl->tpl_vars['QUEST_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['Q']->value['curso_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['Q']->value['id'];?>
" title="Detalhar">
							<i class="far fa-eye fa-lg"></i></a>&emsp;

						<form id="edicao<?php echo $_smarty_tpl->tpl_vars['Q']->value['id'];?>
" name="edicao" method="post" action="<?php echo $_smarty_tpl->tpl_vars['QUEST_EDICAO']->value;?>
" style="display:inline;">
							<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['Q']->value['id'];?>
">

							<a href="javascript:{}" title="Editar" onclick="document.getElementById('edicao<?php echo $_smarty_tpl->tpl_vars['Q']->value['id'];?>
').submit(); return false;"><i class="far fa-edit fa-lg"></i>&emsp;</a>
						</form>

						<form id="exclusao<?php echo $_smarty_tpl->tpl_vars['Q']->value['id'];?>
" name="exclusao" method="post" action="<?php echo $_smarty_tpl->tpl_vars['QUEST_EXCLUSAO']->value;?>
" style="display:inline;">
							<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['Q']->value['id'];?>
">

							<a href="javascript:void(0)" title="Excluir" id="excluir" data-id="<?php echo $_smarty_tpl->tpl_vars['Q']->value['id'];?>
"><i class="far fa-trash-alt fa-lg"></i>&emsp;</a>
						</form>
					</td>
				</tr>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<tr>
			</tbody>
		</table>
		<?php }?>
	</div>
</section>

<!-- Pagination -->
<section id="contact" class="contact-section bg-light">
	<div class="container">
		<div class="row justify-content-center">
			<?php echo $_smarty_tpl->tpl_vars['PAGINACAO']->value;?>

		</div>
	</div>
</section>

<!-- Script -->
<?php echo '<script'; ?>
 type="text/javascript">

	$(document).ready(function() 
	{			
		$(document).on('click', '#excluir', function(e)
		{	
			var id = $(this).data('id');
			var form = e.target.form; // storing the form

			SwalDelete(id, form);
			e.preventDefault();
		});
	});

	function SwalDelete(id, path) 
	{	
		swal({
			title: 'Tem certeza?',
			text: "As entidades relacionadas com este registro não serão mais apresentadas!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#ffc900',
			confirmButtonText: 'Sim, quero excluir!',
			cancelButtonColor: '#000',
			cancelButtonText: 'Cancelar',
			showLoaderOnConfirm: true,
			  
			preConfirm: function() {
				return new Promise(function(resolve) 
				{
					$.ajax({
						url: '<?php echo $_smarty_tpl->tpl_vars['QUEST_EXCLUSAO']->value;?>
',
						type: 'POST',
						data: 'id='+id,
						dataType: 'html'
					})
					.done(function(response)
					{
						if (response.search('TRUE')) 
						{
							swal(
								'Pronto!', 'Exclusão realizada com sucesso!', 'success'
							).then(function(result)
							{
  								location.reload();
             				});
						}
						else if (response.search('FALSE')) 
						{
							swal('Oops...', 'Algo deu errado! Tente mais tarde.', 'error');
						}
					})
					.fail(function(error)
					{
						console.log(error);
						swal('Oops...', 'Algo deu errado! Tente mais tarde.', 'error');
					});
				});
		    },
			allowOutsideClick: false			  
		});	
	}

<?php echo '</script'; ?>
><?php }
}
