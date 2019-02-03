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
			<div class="col-lg-6 ">
				<div class="section-title text-center">
					<h2>Selecionar</h2>
				</div>
			</div>
		</div>

		<!-- Contact Form -->
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<!-- Form -->
				<form action="" method="post" class="contact-form bg-white">
					<div class="form-group">
						<h6>Curso</h6>
						<select class="form-control" name="curso_id">
							<option value="" selected disabled>--- Selecione ---</option>

							{foreach from=$CURSOS item=C}
								<option value="{$C.id}">{$C.nome}</option>
							{/foreach}
						</select>
					</div>

					<div class="form-btn text-center">
						<button class="col-md-3 button" type="submit">Ir</button>
						<!-- <p class="form-message"></p> -->
					</div>
				</form>
			</div>
		</div>
	</div>
</section>