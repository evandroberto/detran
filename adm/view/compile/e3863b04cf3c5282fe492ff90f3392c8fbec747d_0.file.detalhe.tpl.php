<?php
/* Smarty version 3.1.33, created on 2019-01-06 14:32:15
  from 'C:\xampp\www\php7\adm\view\questoes\detalhe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c32035fa37b08_63811395',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3863b04cf3c5282fe492ff90f3392c8fbec747d' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\adm\\view\\questoes\\detalhe.tpl',
      1 => 1546781533,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c32035fa37b08_63811395 (Smarty_Internal_Template $_smarty_tpl) {
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
<section class="blog-section bg-light">
	<div class="container">

		<div class="cta-button">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_QUESTOES']->value;?>
" class="button">Voltar</a>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="section-title text-center">
					<h2>Detalhar</h2>
				</div>

				<div class="cta-button text-center">
					<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ALTERNATIVAS']->value;?>
" class="button">Alternativas</a>
				</div>
			</div>
		</div>

		<div class="row">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['QUESTOES']->value, 'Q');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Q']->value) {
?>

				<div class="blog-post">
					<?php if ($_smarty_tpl->tpl_vars['Q']->value['imagem']) {?>
						<div class="blog-thumb" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['Q']->value['imagem_url'];?>
)"></div>
					<?php }?>
					<div class="blog-main-content">
						<h4 class="blog-title">Enunciado</h4>
						<p><?php echo $_smarty_tpl->tpl_vars['Q']->value['enunciado'];?>
</p><br>

						<h4 class="blog-title">Justificativa</h4>
						<p><?php echo $_smarty_tpl->tpl_vars['Q']->value['justificativa'];?>
</p><br>

						<h4 class="blog-title">Alternativas</h4>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALTERNATIVAS']->value, 'A');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['A']->value) {
?>
						<blockquote class="blockquote bg-light <?php if ($_smarty_tpl->tpl_vars['A']->value['gabarito'] == FALSE) {?>gabarito<?php }?>">
							<?php if ($_smarty_tpl->tpl_vars['A']->value['gabarito'] == TRUE) {?>
								<h6><?php echo $_smarty_tpl->tpl_vars['A']->value['descricao'];?>
</h6>
							<?php } else { ?>
								<p><?php echo $_smarty_tpl->tpl_vars['A']->value['descricao'];?>
</p>
							<?php }?>
						</blockquote>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>

			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</div>
	</div>
</section>

<section id="" class="section-padding why-choose-us pb-70">
	<div class="container">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['QUESTOES']->value, 'Q');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Q']->value) {
?>
		<!-- //Section Title -->
		<div class="row">
			<div class="col-md-6">
				<div class="single-why-me why-me-left">
					<div class="why-me-icon">
						<div class="d-table">
							<div class="d-table-cell">
								<i class="fas fa-signal"></i>
							</div>
						</div>
					</div>
					<h4>Dificuldade</h4>
					<p><?php echo $_smarty_tpl->tpl_vars['Q']->value['dificuldade'];?>
</p>
				</div>
			</div>

			<div class="col-md-6">
				<div class="single-why-me why-me-right">
					<div class="why-me-icon">
						<div class="d-table">
							<div class="d-table-cell">
								<i class="fas fa-square-root-alt"></i>
							</div>
						</div>
					</div>
					<h4>Proficiência</h4>
					<p><?php echo $_smarty_tpl->tpl_vars['Q']->value['proficiencia'];?>
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
					<p><?php echo $_smarty_tpl->tpl_vars['Q']->value['curso_sigla'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Q']->value['curso'];?>
</p>
				</div>
			</div>

			<div class="col-md-6">
				<div class="single-why-me why-me-right">
					<div class="why-me-icon">
						<div class="d-table">
							<div class="d-table-cell">
								<i class="fas fa-cube"></i>
							</div>
						</div>
					</div>
					<h4>Disciplina</h4>
					<p><?php echo $_smarty_tpl->tpl_vars['Q']->value['disciplina_sigla'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Q']->value['disciplina'];?>
</p>
				</div>
			</div>

			<div class="col-md-6">
				<div class="single-why-me why-me-left">
					<div class="why-me-icon">
						<div class="d-table">
							<div class="d-table-cell">
								<i class="fas fa-user"></i>
							</div>
						</div>
					</div>
					<h4>Perfil</h4>
					<p><?php echo $_smarty_tpl->tpl_vars['Q']->value['perfil_codigo'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Q']->value['perfil'];?>
</p>
				</div>
			</div>

			<div class="col-md-6">
				<div class="single-why-me why-me-right">
					<div class="why-me-icon">
						<div class="d-table">
							<div class="d-table-cell">
								<i class="fas fa-users"></i>
							</div>
						</div>
					</div>
					<h4>Competência</h4>
					<p><?php echo $_smarty_tpl->tpl_vars['Q']->value['competencia_codigo'];?>
 - <?php echo $_smarty_tpl->tpl_vars['Q']->value['competencia'];?>
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
