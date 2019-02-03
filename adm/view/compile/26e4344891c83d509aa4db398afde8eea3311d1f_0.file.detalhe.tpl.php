<?php
/* Smarty version 3.1.33, created on 2018-12-27 17:53:54
  from 'C:\xampp\www\php7\adm\view\noticias\detalhe.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c2503a2b09918_50123645',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26e4344891c83d509aa4db398afde8eea3311d1f' => 
    array (
      0 => 'C:\\xampp\\www\\php7\\adm\\view\\noticias\\detalhe.tpl',
      1 => 1545929620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c2503a2b09918_50123645 (Smarty_Internal_Template $_smarty_tpl) {
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

		<div class="cta-button">
			<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_NOTICIAS']->value;?>
" class="button">Voltar</a>
		</div>

		<div class="row">
			<!-- Sidebar -->
			<div class="col-lg-4">
				<div class="blog-sidebar">
					<!-- Sidebar Widget -->
					<div class="sidebar-widget">
						<h2 class="sidebar-title">Pesquisar</h2>
						<form action="blog.html" method="get">
							<input type="search" placeholder="Search">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div>

					<!-- Sidebar Widget -->
					<div class="sidebar-widget">
						<h2 class="sidebar-title">Categorias 
							<a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CATEGORIAS']->value;?>
" style="float: right;"><i class="far fa-edit"></i></a>
						</h2>
						<ol>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_NOTICIAS']->value;?>
">Todas</a></li>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
?>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['PAG_NOTICIAS']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['C']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['C']->value['nome'];?>
</a></li>
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ol>
					</div>
				</div>
			</div>

			<!-- Blogs -->
			<div class="col-lg-8">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NOTICIAS']->value, 'N');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['N']->value) {
?>
				<div class="blog-post">
					<?php if ($_smarty_tpl->tpl_vars['N']->value['imagem']) {?>
						<img src="<?php echo $_smarty_tpl->tpl_vars['N']->value['imagem_url'];?>
" alt="Imagem" class="blog-img">
					<?php }?>
					<h4 class="blog-title"><?php echo $_smarty_tpl->tpl_vars['N']->value['titulo'];?>
</h4>
					<p class="blog-meta"><?php echo $_smarty_tpl->tpl_vars['N']->value['data_criacao'];?>
</p>
					<div class="blog-main-content">
						<p><?php echo $_smarty_tpl->tpl_vars['N']->value['texto'];?>
</p>
					</div>
				</div>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
	</div>
</section>
<?php }
}
