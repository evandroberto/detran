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
<section id="contact" class="section-padding contact-section bg-light">
	<div class="container">

		{if $ALERTA != ''}
		<blockquote class="blockquote bg-light">
			{if $ALERTA == 'TRUE'}
				<h6>Os dados foram {$ACTION} com sucesso!</h6>
			{else if}
				<h6>Ocorreu um erro! Verifique os dados e tente novamente.</h6>
			{/if}
		</blockquote>
		{/if}

		<!-- Section Title -->
		<div class="row justify-content-center">
			<div class="col-lg-6 ">
				<div class="section-title text-center">
					<h2>Editar</h2>
				</div>
			</div>
		</div>

		<!-- Contact Form -->
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<!-- Form -->
				<form action="" method="post" class="contact-form bg-white">
					{foreach from=$AVALIACOES item=A}
					<div class="row">
						<div class="col-lg-6 form-group">
							<h6>Nome</h6>
							<input type="text" class="form-control" name="nome" placeholder="Nome" value="{$A.nome}" autocomplete="off" required>
						</div>
						<div class="col-lg-6 form-group">
							<h6>Sigla</h6>
							<input type="text" class="form-control" name="sigla" placeholder="Sigla" value="{$A.sigla}" autocomplete="off" required>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6 form-group">
							<h6>Tempo de Prova (min)</h6>
							<input type="number" class="form-control" name="tempo_prova" min="1" step="1" placeholder="Tempo de Prova" value="{$A.tempo_prova}" autocomplete="off" required>
						</div>
						<div class="col-lg-6 form-group">
							<h6>Tempo_de Prova - TDH (min)</h6>
							<input type="number" class="form-control" name="tempo_tdh" min="1" step="1" placeholder="Tempo de Prova - TDH" value="{$A.tempo_tdh}" autocomplete="off" required>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6 form-group">
							<h6>Total de Questões</h6>
							<input type="number" class="form-control" name="total_questoes" min="1" step="1" placeholder="Total de Questões" value="{$A.total_questoes}" autocomplete="off" required>
						</div>
						<div class="col-lg-6 form-group">
							<h6>Alternativas por Questão</h6>
							<input type="number" class="form-control" name="total_alternativas" min="1" step="1" placeholder="Total de Alternativas" value="{$A.total_alternativas}" autocomplete="off" required>
						</div>
					</div>

					<div class="form-group">
						<h6>Curso</h6>
						<select class="form-control" name="curso_id" required>
							<option value="" selected disabled>--- Selecione ---</option>

							{foreach from=$CURSOS item=C}
								<option value="{$C.id}" {if $A.curso_id == $C.id} selected {/if}>{$C.nome}</option>
							{/foreach}
						</select>
					</div>

					<input class="form-control" type="hidden" name="id" value="{$A.id}">

					<div class="form-btn text-center">
						<a href="{$PAG_AVALIACOES}" class="col-md-3 button btn-back">Cancelar</a>
						<button class="col-md-3 button" type="submit">Salvar</button>
						<!-- <p class="form-message"></p> -->
					</div>
					{/foreach}
				</form>
			</div>
		</div>
	</div>
</section>
