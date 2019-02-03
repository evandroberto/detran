<?php
/* Smarty version 3.1.33, created on 2018-12-15 19:06:02
  from 'C:\xampp\www\php7\view\avaliacoes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c15428ab3a5b5_09864668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46b8a4e9ca68653e9b7d07e4e7f186d9cb4aead4' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\view\\avaliacoes.tpl',
      1 => 1544896984,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c15428ab3a5b5_09864668 (Smarty_Internal_Template $_smarty_tpl) {
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

		<?php if ($_smarty_tpl->tpl_vars['AVAL_TOTAL']->value < 1) {?>
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
					<th scope="col">Sigla</th>
					<th scope="col">Nome</th>
					<th scope="col">Curso</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			<tbody>

				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AVALIACOES']->value, 'A');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['A']->value) {
?>
				<tr>
					<th scope="row"><?php echo $_smarty_tpl->tpl_vars['A']->value['id'];?>
</th>
					<td><?php echo $_smarty_tpl->tpl_vars['A']->value['sigla'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['A']->value['nome'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['A']->value['curso'];?>
</td>
					<td>
						<a href="<?php echo $_smarty_tpl->tpl_vars['AVAL_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['A']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['A']->value['slug'];?>
" title="Detalhar">
							<i class="far fa-eye fa-lg"></i></a>&emsp;
						<a href="<?php echo $_smarty_tpl->tpl_vars['AVAL_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['A']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['A']->value['slug'];?>
" title="Editar">
							<i class="far fa-edit fa-lg"></i></a>&emsp;
						<a href="<?php echo $_smarty_tpl->tpl_vars['AVAL_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['A']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['A']->value['slug'];?>
" title="Excluir">
							<i class="far fa-trash-alt fa-lg"></i></a>
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
</section><?php }
}
