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

		<!-- Section Title -->
		<div class="row justify-content-center">
			<div class="col-lg-6">

				<div class="section-title text-center">
					<h2>Detalhar</h2>
				</div>

				<div class="cta-button text-center">
					<a href="{$PAG_COMPETENCIAS}" class="button">Competências</a>
					<a href="{$PAG_PERFIS}" class="button">Perfis</a>
					<a href="{$PAG_QUESTOES}" class="button">Questões</a>
				</div>
			</div>
		</div>

		<div class="table-responsive">
			<table class="table table-sm table-bordered text-center">
				<thead>
					<tr>
						<th scope="col" style="vertical-align: middle;">Perfis/Competências</th>
						{foreach from=$COMPETENCIAS item=CP}
							<th scope="col" style="vertical-align: top;">{$CP.codigo} - {$CP.nome}</th>
						{/foreach}
					</tr>
				</thead>
				<tbody>
					{foreach from=$PERFIS item=P}
					<tr>
						<th scope="row">{$P.codigo} - {$P.nome}</th>
						{foreach from=$COMPETENCIAS item=CP}
							<td style="vertical-align: middle;">X</td>
						{/foreach}
					</tr>
					{/foreach}
				</tbody>
			</table>
		</div>
	</div>
</section>