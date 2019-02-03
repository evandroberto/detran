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

<!-- Body -->
<section id="contact" class="section-padding contact-section bg-light pb-0">
	<div class="container">

		<div class="cta-button">
			<a href="{$PAG_DISCIPLINAS}" class="button">Voltar</a>
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

		{foreach from=$DISCIPLINAS item=D}
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
					<p>{$D.nome}</p>
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
					<p>{$D.sigla}</p>
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
					<p>{$D.curso_sigla} - {$D.curso}</p>
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
					<p>{$D.descricao}</p>
				</div>
			</div>
		</div>
		{/foreach}
	</div>
</section>