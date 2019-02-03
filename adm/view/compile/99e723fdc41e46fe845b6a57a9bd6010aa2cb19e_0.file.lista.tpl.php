<?php
/* Smarty version 3.1.33, created on 2019-02-03 14:25:24
  from 'C:\xampp\www\detran\adm\view\noticias\lista.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c56ebc4e619b6_85747319',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99e723fdc41e46fe845b6a57a9bd6010aa2cb19e' => 
    array (
      0 => 'C:\\xampp\\www\\detran\\adm\\view\\noticias\\lista.tpl',
      1 => 1548589452,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c56ebc4e619b6_85747319 (Smarty_Internal_Template $_smarty_tpl) {
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
			<a href="<?php echo $_smarty_tpl->tpl_vars['NOT_CADASTRO']->value;?>
" class="button">Nova</a>
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
" title="Editar" style="float: right;">
								<i class="far fa-edit"></i>
							</a>
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

			<?php if ($_smarty_tpl->tpl_vars['NOT_TOTAL']->value < 1) {?>
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
			<!-- Blogs -->
			<div class="col-lg-8">
				<div class="blog-area">
					<div class="row">
						<!-- Single Blog -->
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['NOTICIAS']->value, 'N');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['N']->value) {
?>
						<div class="col-sm-12">
							<div class="single-blog">
								<?php if ($_smarty_tpl->tpl_vars['N']->value['imagem']) {?>
									<div class="blog-thumb" style="background-image: url(<?php echo $_smarty_tpl->tpl_vars['N']->value['imagem_url'];?>
)"></div>
								<?php }?>
								<h4 class="blog-title"><?php echo $_smarty_tpl->tpl_vars['N']->value['titulo'];?>
</h4>
								<p class="blog-meta"><?php echo $_smarty_tpl->tpl_vars['N']->value['data_criacao'];?>
</p>
								<p><?php echo $_smarty_tpl->tpl_vars['N']->value['previa'];?>
 <?php if ($_smarty_tpl->tpl_vars['N']->value['previa'] < $_smarty_tpl->tpl_vars['N']->value['texto']) {?>(...)<?php }?></p>
								<?php if ($_smarty_tpl->tpl_vars['N']->value['previa'] < $_smarty_tpl->tpl_vars['N']->value['texto']) {?>
									<a href="<?php echo $_smarty_tpl->tpl_vars['NOT_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['N']->value['id'];?>
/<?php echo $_smarty_tpl->tpl_vars['N']->value['slug'];?>
" class="button">Leia Mais</a>
								<?php }?>
								<div class="text-right">
									<form id="edicao<?php echo $_smarty_tpl->tpl_vars['N']->value['id'];?>
" name="edicao" method="post" action="<?php echo $_smarty_tpl->tpl_vars['NOT_EDICAO']->value;?>
" style="display:inline;">
										<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['N']->value['id'];?>
">

										<a href="javascript:{}" title="Editar" onclick="document.getElementById('edicao<?php echo $_smarty_tpl->tpl_vars['N']->value['id'];?>
').submit(); return false;"><i class="far fa-edit fa-lg"></i>&emsp;</a>
									</form>

									<form id="exclusao<?php echo $_smarty_tpl->tpl_vars['N']->value['id'];?>
" name="exclusao" method="post" action="<?php echo $_smarty_tpl->tpl_vars['NOT_EXCLUSAO']->value;?>
" style="display:inline;">
										<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['N']->value['id'];?>
">

										<a href="javascript:void(0)" title="Excluir" id="excluir" data-id="<?php echo $_smarty_tpl->tpl_vars['N']->value['id'];?>
"><i class="far fa-trash-alt fa-lg"></i>&emsp;</a>
									</form>
								</div>
							</div>
						</div>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
			</div>
			<?php }?>

		</div>
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
			text: "Este registro não será mais apresentado!",
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
						url: '<?php echo $_smarty_tpl->tpl_vars['NOT_EXCLUSAO']->value;?>
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
