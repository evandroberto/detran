<?php
/* Smarty version 3.1.33, created on 2019-02-03 14:21:03
  from 'C:\xampp\www\php7\view\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c56eabf6d4cc9_36650759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3115860a4be75c823886144b54cb7422f566acb' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\view\\home.tpl',
      1 => 1549200004,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c56eabf6d4cc9_36650759 (Smarty_Internal_Template $_smarty_tpl) {
?>
</header>

<!-- Body -->
<section id="contact" class="section-padding contact-section bg-secondary">
	<div class="container">
		<!-- Section Title -->
		<div class="row justify-content-center">
			<div class="col-lg-6 ">
				<div class="section-title text-center">
					<h2>Acesso</h2>
				</div>
			</div>
		</div>

		<!-- Contact Form -->
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<!-- Form -->
				<form id="contact-form" action="mail.php" method="post" class="contact-form bg-white">
					<div class="row">
						<div class="col-lg-6 form-group">
							<h6>Login</h6>
							<input type="text" class="form-control" name="login" placeholder="Login">
						</div>
						<div class="col-lg-6 form-group">
							<h6>Senha</h6>
							<input type="password" class="form-control" name="senha" placeholder="Senha">
						</div>
					</div>

					<div class="form-btn text-center">
						<!-- <button class="button" type="submit">Entrar</button> -->
						<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_NOTICIAS']->value;?>
" class="col-md-3 button">Acessar</a>
						<!-- <p class="form-message"></p> -->
					</div>
				</form>
			</div>
		</div>
	</div>
</section><?php }
}
