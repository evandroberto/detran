<?php
/* Smarty version 3.1.33, created on 2018-12-19 19:05:38
  from 'C:\xampp\www\php7\view\cursos_cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c1a88720da6b9_07375365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79a16063c002468949761c8ae476856d7147fcaf' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\view\\cursos_cadastro.tpl',
      1 => 1545242389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c1a88720da6b9_07375365 (Smarty_Internal_Template $_smarty_tpl) {
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
		<!-- Section Title -->
		<div class="row justify-content-center">
			<div class="col-lg-6 ">
				<div class="section-title text-center">
					<h2>Cadastrar</h2>
				</div>
			</div>
		</div>

		<!-- Contact Form -->
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<!-- Form -->
				<form id="contact-form" action="mail.php" method="post" class="contact-form bg-white">
					<div class="row">
						<div class="col-lg-6 form-group">
							<h6>Nome</h6>
							<input type="text" class="form-control" name="nome" required placeholder="Nome">
						</div>
						<div class="col-lg-6 form-group">
							<h6>Sigla</h6>
							<input type="email" class="form-control" name="sigla" required placeholder="Sigla">
						</div>
					</div>

					<div class="form-group">
						<h6>Fundamentação Legal</h6>
						<textarea class="form-control" name="fundamentacao" required placeholder="Fundamentação Legal"></textarea>
					</div>

					<div class="form-group">
						<h6>Requisitos</h6>
						<textarea class="form-control" name="requisito" required placeholder="Requisitos"></textarea>
					</div>

					<div class="form-btn text-center">
						<button class="col-md-3 button" type="submit">Salvar</button>
						<p class="form-message"></p>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php }
}
