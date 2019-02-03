<?php
/* Smarty version 3.1.33, created on 2019-01-06 00:34:50
  from 'C:\xampp\www\php7\adm\view\matrizes\lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c313f1ac69ea7_02278869',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f09d587106bc43a15c2ada959e4b4df63960d919' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\adm\\view\\matrizes\\lista.tpl',
      1 => 1546731287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c313f1ac69ea7_02278869 (Smarty_Internal_Template $_smarty_tpl) {
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
			<div class="col-lg-6">

				<div class="section-title text-center">
					<h2>Detalhar</h2>
				</div>

				<div class="cta-button text-center">
					<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_COMPETENCIAS']->value;?>
" class="button">Competências</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PERFIS']->value;?>
" class="button">Perfis</a>
					<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_QUESTOES']->value;?>
" class="button">Questões</a>
				</div>
			</div>
		</div>

		<div class="table-responsive">
			<table class="table table-sm table-bordered text-center">
				<thead>
					<tr>
						<th scope="col" style="vertical-align: middle;">Perfis/Competências</th>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['COMPETENCIAS']->value, 'CP');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CP']->value) {
?>
							<th scope="col" style="vertical-align: top;"><?php echo $_smarty_tpl->tpl_vars['CP']->value['codigo'];?>
 - <?php echo $_smarty_tpl->tpl_vars['CP']->value['nome'];?>
</th>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tr>
				</thead>
				<tbody>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PERFIS']->value, 'P');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
?>
					<tr>
						<th scope="row"><?php echo $_smarty_tpl->tpl_vars['P']->value['codigo'];?>
 - <?php echo $_smarty_tpl->tpl_vars['P']->value['nome'];?>
</th>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['COMPETENCIAS']->value, 'CP');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CP']->value) {
?>
							<td style="vertical-align: middle;">X</td>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</tr>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</tbody>
			</table>
		</div>
	</div>
</section><?php }
}
