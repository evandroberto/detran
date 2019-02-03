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
					<h2>Cadastrar</h2>
				</div>
			</div>
		</div>

		<!-- Contact Form -->
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<!-- Form -->
				<form action="" method="post" class="contact-form bg-white">
					<div class="row">
						<div class="col-lg-6 form-group">
							<h6>Nome</h6>
							<input type="text" class="form-control" name="nome" placeholder="Nome" autocomplete="off" required>
						</div>
						<div class="col-lg-6 form-group">
							<h6>Sigla</h6>
							<input type="text" class="form-control" name="sigla" placeholder="Sigla" autocomplete="off" required>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6 form-group">
							<h6>Tempo de Prova (min)</h6>
							<input type="number" class="form-control" name="tempo_prova" min="1" step="1" placeholder="Tempo de Prova" autocomplete="off" required>
						</div>
						<div class="col-lg-6 form-group">
							<h6>Tempo_de Prova - TDH (min)</h6>
							<input type="number" class="form-control" name="tempo_tdh" min="1" step="1" placeholder="Tempo de Prova - TDH" autocomplete="off" required>
						</div>
					</div>

					<div class="row">
						<div class="col-lg-6 form-group">
							<h6>Total de Questões</h6>
							<input type="number" class="form-control" name="total_questoes" min="1" step="1" placeholder="Total de Questões" autocomplete="off" required>
						</div>
						<div class="col-lg-6 form-group">
							<h6>Alternativas por Questão</h6>
							<input type="number" class="form-control" name="total_alternativas" min="1" step="1" placeholder="Total de Alternativas" autocomplete="off" required>
						</div>
					</div>

					<div class="form-group">
						<h6>Curso</h6>
						<select class="form-control" name="curso_id" required>
							<option value="" selected disabled>--- Selecione ---</option>

							{foreach from=$CURSOS item=C}
								<option value="{$C.id}">{$C.nome}</option>
							{/foreach}
						</select>
					</div>

					<div class="form-btn text-center">
						<a href="{$PAG_AVALIACOES}" class="col-md-3 button btn-back">Cancelar</a>
						<button class="col-md-3 button" type="submit">Salvar</button>
						<!-- <p class="form-message"></p> -->
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
