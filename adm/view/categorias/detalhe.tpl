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

<!-- ====== Contact Area ====== -->
<section id="contact" class="section-padding contact-section bg-light">
	<div class="container">

		<div class="cta-button">
			<a href="{$PAG_CATEGORIAS}" class="button">Voltar</a>
		</div>

		<!-- Section Title -->
		{foreach from=$CATEGORIAS item=C}
		<div class="row justify-content-center">
			<div class="col-lg-6">

				<div class="section-title text-center">
					<h2>Detalhar</h2>
				</div>

				<div class="about-content">
					<h5>Nome</h5>
					<p>{$C.nome}</p>
				</div>
			</div>
		</div>
		{/foreach}
	</div>
</section>