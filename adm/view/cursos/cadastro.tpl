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

<script src="{$GET_TEMPLATE}/template/js/tinymce/tinymce.min.js"></script>

<script>
tinyMCE.init({
	menubar: false,
	statusbar: false,
	selector: 'textarea'
});
</script>

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

					<div class="form-group">
						<h6>Fundamentação Legal</h6>
						<textarea class="form-control" name="fundamentacao" placeholder="Fundamentação Legal"></textarea>
					</div>

					<div class="form-group">
						<h6>Requisitos</h6>
						<textarea class="form-control" name="requisito" placeholder="Requisitos"></textarea>
					</div>

					<div class="form-btn text-center">
						<a href="{$PAG_CURSOS}" class="col-md-3 button btn-back">Cancelar</a>
						<button class="col-md-3 button" type="submit">Salvar</button>
						<!-- <p class="form-message"></p> -->
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
