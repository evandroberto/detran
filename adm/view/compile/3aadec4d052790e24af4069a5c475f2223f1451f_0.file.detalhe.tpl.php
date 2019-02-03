<?php
/* Smarty version 3.1.33, created on 2019-01-06 13:06:46
  from 'C:\xampp\www\php7\adm\view\disciplinas\detalhe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c31ef568f8cc1_11864445',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3aadec4d052790e24af4069a5c475f2223f1451f' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\adm\\view\\disciplinas\\detalhe.tpl',
      1 => 1546776404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c31ef568f8cc1_11864445 (Smarty_Internal_Template $_smarty_tpl) {
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
<section id="contact" class="section-padding contact-section bg-light pb-0">
	<div class="container">

		<div class="cta-button">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_DISCIPLINAS']->value;?>
" class="button">Voltar</a>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="section-title text-center">
					<h2>Detalhar</h2>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="" class="section-padding why-choose-us pb-70">
	<div class="container">

		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DISCIPLINAS']->value, 'D');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['D']->value) {
?>
		<!-- //Section Title -->
		<div class="row">
			<div class="col-md-6">
				<div class="single-why-me why-me-left">
					<div class="why-me-icon">
						<div class="d-table">
							<div class="d-table-cell">
								<i class="far fa-clipboard"></i>
							</div>
						</div>
					</div>
					<h4>Nome</h4>
					<p><?php echo $_smarty_tpl->tpl_vars['D']->value['nome'];?>
</p>
				</div>
			</div>

			<div class="col-md-6">
				<div class="single-why-me why-me-right">
					<div class="why-me-icon">
						<div class="d-table">
							<div class="d-table-cell">
								<i class="fas fa-clipboard"></i>
							</div>
						</div>
					</div>
					<h4>Sigla</h4>
					<p><?php echo $_smarty_tpl->tpl_vars['D']->value['sigla'];?>
</p>
				</div>
			</div>

			<div class="col-md-6">
				<div class="single-why-me why-me-left">
					<div class="why-me-icon">
						<div class="d-table">
							<div class="d-table-cell">
								<i class="fas fa-cubes"></i>
							</div>
						</div>
					</div>
					<h4>Curso</h4>
					<p><?php echo $_smarty_tpl->tpl_vars['D']->value['curso_sigla'];?>
 - <?php echo $_smarty_tpl->tpl_vars['D']->value['curso'];?>
</p>
				</div>
			</div>

			<div class="col-md-6">
				<div class="single-why-me why-me-right">
					<div class="why-me-icon">
						<div class="d-table">
							<div class="d-table-cell">
								<i class="fas fa-align-left"></i>
							</div>
						</div>
					</div>
					<h4>Descrição</h4>
					<p><?php echo $_smarty_tpl->tpl_vars['D']->value['descricao'];?>
</p>
				</div>
			</div>
		</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
</section><?php }
}
