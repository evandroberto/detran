	<!-- Page Title -->
	<div class="page-title bg-img section-padding bg-overlay" style="background-image: url({$GET_TEMPLATE}/template/images/img2.jpg)">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<h2>{$PAGINA}</h2>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- List Results -->
<section id="contact" class="section-padding contact-section bg-light">
	<div class="container">

		<div class="cta-button text-right">
			<a href="{$NOT_CADASTRO}" class="button">Nova</a>
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
							<a href="{$PAG_CATEGORIAS}" title="Editar" style="float: right;">
								<i class="far fa-edit"></i>
							</a>
						</h2>
						<ol>
							<li><a href="{$PAG_NOTICIAS}">Todas</a></li>
							{foreach from=$CATEGORIAS item=C}
							<li><a href="{$PAG_NOTICIAS}/{$C.id}">{$C.nome}</a></li>
							{/foreach}
						</ol>
					</div>
				</div>
			</div>

			{if $NOT_TOTAL < 1}
			<!-- Section Title -->
			<div class="row justify-content-center">
				<div class="col-lg-6 ">
					<div class="section-title text-center">
						<h2>Oops! Não encontramos {$PAGINA}</h2>
					</div>
				</div>
			</div>

			{else}
			<!-- Blogs -->
			<div class="col-lg-8">
				<div class="blog-area">
					<div class="row">
						<!-- Single Blog -->
						{foreach from=$NOTICIAS item=N}
						<div class="col-sm-12">
							<div class="single-blog">
								{if $N.imagem}
									<div class="blog-thumb" style="background-image: url({$N.imagem_url})"></div>
								{/if}
								<h4 class="blog-title">{$N.titulo}</h4>
								<p class="blog-meta">{$N.data_criacao}</p>
								<p>{$N.previa} {if $N.previa < $N.texto}(...){/if}</p>
								{if $N.previa < $N.texto}
									<a href="{$NOT_INFO}/{$N.id}/{$N.slug}" class="button">Leia Mais</a>
								{/if}
								<div class="text-right">
									<form id="edicao{$N.id}" name="edicao" method="post" action="{$NOT_EDICAO}" style="display:inline;">
										<input type="hidden" name="id" value="{$N.id}">

										<a href="javascript:{}" title="Editar" onclick="document.getElementById('edicao{$N.id}').submit(); return false;"><i class="far fa-edit fa-lg"></i>&emsp;</a>
									</form>

									<form id="exclusao{$N.id}" name="exclusao" method="post" action="{$NOT_EXCLUSAO}" style="display:inline;">
										<input type="hidden" name="id" value="{$N.id}">

										<a href="javascript:void(0)" title="Excluir" id="excluir" data-id="{$N.id}"><i class="far fa-trash-alt fa-lg"></i>&emsp;</a>
									</form>
								</div>
							</div>
						</div>
						{/foreach}
					</div>
				</div>
			</div>
			{/if}

		</div>
	</div>
</section>

<!-- Pagination -->
<section id="contact" class="contact-section bg-light">
	<div class="container">
		<div class="row justify-content-center">
			{$PAGINACAO}
		</div>
	</div>
</section>

<!-- Script -->
<script type="text/javascript">

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
						url: '{$NOT_EXCLUSAO}',
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

</script>