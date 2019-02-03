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
					<h2>Editar</h2>
				</div>
			</div>
		</div>

		<!-- Contact Form -->
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<!-- Form -->
				<form action="" method="post" enctype="multipart/form-data" class="contact-form bg-white">
					{foreach from=$QUESTOES item=Q}
					<div class="form-group">
						<h6>Enunciado</h6>
						<textarea class="form-control" name="enunciado" placeholder="Enunciado" style="height: 200px;">{$Q.enunciado}</textarea>
					</div>

					<div class="form-group">
						<h6>Justificativa</h6>
						<textarea class="form-control" name="justificativa" placeholder="Justificativa" style="height: 100px;">{$Q.justificativa}</textarea>
					</div>

					<div class="row">
						<div class="col-lg-6 form-group">
							<h6>Dificuldade</h6>
							<input type="number" class="form-control" name="dificuldade" min="0" step="1" placeholder="Dificuldade" value="{$Q.dificuldade}" autocomplete="off" required>
						</div>
						<div class="col-lg-6 form-group">
							<h6>Proficiência</h6>
							<input type="number" class="form-control" name="proficiencia" min="0" step="1" placeholder="Proficiência" value="{$Q.proficiencia}" autocomplete="off" required>
						</div>
					</div>

					<div class="form-group">
						<h6>Disciplina</h6>
						<select class="form-control" name="disciplina_id" required>
							<option value="" selected disabled>--- Selecione ---</option>

							{foreach from=$DISCIPLINAS item=D}
								<option value="{$D.id}" {if $Q.disciplina_id == $D.id} selected {/if}>{$D.sigla} - {$D.nome}</option>
							{/foreach}
						</select>
					</div>

					<div class="form-group">
						<h6>Perfil</h6>
						<select class="form-control" name="perfil_id" required>
							<option value="" selected disabled>--- Selecione ---</option>

							{foreach from=$PERFIS item=P}
								<option value="{$P.id}" {if $Q.perfil_id == $P.id} selected {/if}>{$P.codigo} - {$P.nome}</option>
							{/foreach}
						</select>
					</div>

					<div class="form-group">
						<h6>Competência</h6>
						<select class="form-control" name="competencia_id" required>
							<option value="" selected disabled>--- Selecione ---</option>

							{foreach from=$COMPETENCIAS item=CP}
								<option value="{$CP.id}" {if $Q.competencia_id == $CP.id} selected {/if}>{$CP.codigo} - {$CP.nome}</option>
							{/foreach}
						</select>
					</div>

					<div class="form-group">
						<h6>Avaliação</h6>
						<select class="form-control" name="avaliacao_id" required>
							<option value="" selected disabled>--- Selecione ---</option>

							{foreach from=$AVALIACOES item=A}
								<option value="{$A.id}" {if $Q.avaliacao_id == $A.id} selected {/if}>{$A.sigla} - {$A.nome}</option>
							{/foreach}
						</select>
					</div>

					<div class="form-group">
						<h6>Imagem</h6>
						<div class="input-group">
							<input type="text" class="form-control col-md-12" disabled="">
							<label class="input-group-btn">
								<span class="btn btn-img col-md-12">
									Selecionar <input type="file" name="imagem" accept="image/*" style="display: none;">
								</span>
							</label>
						</div>
					</div>

					<input class="form-control" type="hidden" name="img_file" value="{$Q.imagem_file}">
					<input class="form-control" type="hidden" name="img_atual" value="{$Q.imagem}">
					<input class="form-control" type="hidden" name="id" value="{$Q.id}">

					<div class="form-btn text-center">
						<a href="{$PAG_QUESTOES}" class="col-md-3 button btn-back">Cancelar</a>
						<button class="col-md-3 button" type="submit">Salvar</button>
						<!-- <p class="form-message"></p> -->
					</div>
					{/foreach}
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Script -->
<script>
$(function() {
	// We can attach the `fileselect` event to all file inputs on the page
	$(document).on('change', ':file', function() {
		var input = $(this),
		numFiles = input.get(0).files ? input.get(0).files.length : 1,
		label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [numFiles, label]);
	});

	// We can watch for our custom `fileselect` event like this
	$(document).ready( function() {
		$(':file').on('fileselect', function(event, numFiles, label) {

			var input = $(this).parents('.input-group').find(':text'),
				log = numFiles > 1 ? numFiles + ' arquivos selecionados.' : label;

			if( input.length ) {
				input.val(log);
			} else {
				if (log) alert(log);
			}
		});
	}); 
});
</script>