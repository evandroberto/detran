<?php
/* Smarty version 3.1.33, created on 2018-12-22 13:34:32
  from 'C:\xampp\www\php7\adm\view\disciplinas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1e2f5810a420_07115398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c72f64e08609edfe228224a4526dc717320a4539' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\adm\\view\\disciplinas.tpl',
      1 => 1544896960,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1e2f5810a420_07115398 (Smarty_Internal_Template $_smarty_tpl) {
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

		<?php if ($_smarty_tpl->tpl_vars['DISC_TOTAL']->value < 1) {?>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DISCIPLINAS']->value, 'D');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['D']->value) {
?>
				<tr>
					<th scope="row"><?php echo $_smarty_tpl->tpl_vars['D']->value['id'];?>
</th>
					<td><?php echo $_smarty_tpl->tpl_vars['D']->value['sigla'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['D']->value['nome'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['D']->value['curso'];?>
</td>
					<td>
						<a href="<?php echo $_smarty_tpl->tpl_vars['DISC_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['D']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['D']->value['slug'];?>
" title="Detalhar">
							<i class="far fa-eye fa-lg"></i></a>&emsp;
						<a href="<?php echo $_smarty_tpl->tpl_vars['DISC_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['D']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['D']->value['slug'];?>
" title="Editar">
							<i class="far fa-edit fa-lg"></i></a>&emsp;
						<a href="<?php echo $_smarty_tpl->tpl_vars['DISC_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['D']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['D']->value['slug'];?>
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
