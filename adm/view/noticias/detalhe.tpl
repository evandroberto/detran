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

		<div class="cta-button">
			<a href="{$PAG_NOTICIAS}" class="button">Voltar</a>
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
							<a href="{$PAG_CATEGORIAS}" style="float: right;"><i class="far fa-edit"></i></a>
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

			<!-- Blogs -->
			<div class="col-lg-8">
				{foreach from=$NOTICIAS item=N}
				<div class="blog-post">
					{if $N.imagem}
						<img src="{$N.imagem_url}" alt="Imagem" class="blog-img">
					{/if}
					<h4 class="blog-title">{$N.titulo}</h4>
					<p class="blog-meta">{$N.data_criacao}</p>
					<div class="blog-main-content">
						<p>{$N.texto}</p>
					</div>
				</div>
				{/foreach}
			</div>
		</div>
	</div>
</section>
