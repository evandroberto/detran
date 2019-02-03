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
<section class="blog-section bg-light">
	<div class="container">

		<div class="cta-button">
			<a href="{$PAG_QUESTOES}" class="button">Voltar</a>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="section-title text-center">
					<h2>Detalhar</h2>
				</div>

				<div class="cta-button text-center">
					<a href="{$PAG_ALTERNATIVAS}" class="button">Alternativas</a>
				</div>
			</div>
		</div>

		<div class="row">
			{foreach from=$QUESTOES item=Q}

				<div class="blog-post">
					{if $Q.imagem}
						<div class="blog-thumb" style="background-image: url({$Q.imagem_url})"></div>
					{/if}
					<div class="blog-main-content">
						<h4 class="blog-title">Enunciado</h4>
						<p>{$Q.enunciado}</p><br>

						<h4 class="blog-title">Justificativa</h4>
						<p>{$Q.justificativa}</p><br>

						<h4 class="blog-title">Alternativas</h4>
						{foreach from=$ALTERNATIVAS item=A}
						<blockquote class="blockquote bg-light {if $A.gabarito == FALSE}gabarito{/if}">
							{if $A.gabarito == TRUE}
								<h6>{$A.descricao}</h6>
							{else}
								<p>{$A.descricao}</p>
							{/if}
						</blockquote>
						{/foreach}
					</div>
				</div>

			{/foreach}
		</div>
	</div>
</section>

<section id="" class="section-padding why-choose-us pb-70">
	<div class="container">
		{foreach from=$QUESTOES item=Q}
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
					<p>{$Q.dificuldade}</p>
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
					<p>{$Q.proficiencia}</p>
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
					<p>{$Q.curso_sigla} - {$Q.curso}</p>
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
					<p>{$Q.disciplina_sigla} - {$Q.disciplina}</p>
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
					<p>{$Q.perfil_codigo} - {$Q.perfil}</p>
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
					<p>{$Q.competencia_codigo} - {$Q.competencia}</p>
				</div>
			</div>
		</div>
		{/foreach}
	</div>
</section>