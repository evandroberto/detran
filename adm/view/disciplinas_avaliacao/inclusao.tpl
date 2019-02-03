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
					<h2>Selecionar</h2>
				</div>
			</div>
		</div>

		<!-- Contact Form -->
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<!-- Form -->
				<form action="" method="post" class="contact-form bg-white">
					<div id="new">
						{if $DISC_TOTAL < 1}
							<div class="row" id="row1">
								<div class="col-lg-6 form-group">
									<h6>Disciplina</h6>
									<select id="select" class="form-control" name="disciplina_id[]">
										<option value="" selected disabled>--- Selecione ---</option>

										{foreach from=$DISCIPLINAS item=D}
											<option value="{$D.id}">{$D.nome}</option>
										{/foreach}
									</select>
								</div>

								<div class="col-lg-5 form-group">
									<h6>Questões</h6>
									<input type="number" class="form-control" name="questoes[]" min="1" step="1" placeholder="Questões" autocomplete="off" required>
								</div>

								<div class="col-lg-1 form-group">
									<h6>Ações</h6>
									<a class="dell" href="javascript:void(0)" title="Excluir" id="1"><i class="far fa-trash-alt fa-lg"></i>&emsp;</a>
								</div>
							</div>

						{else}
							{php} $i = 1; {/php}

							{foreach from=$DISC_AVALIACAO item=DA}
							<div class="row" id="row{php}echo $i{/php}">
								<div class="col-lg-6 form-group">
									<h6>Disciplina</h6>
									<select class="form-control" name="disciplina_id[]">
										<option value="{$DA.id}" selected>{$DA.nome}</option>
									</select>
								</div>

								<div class="col-lg-5 form-group">
									<h6>Questões</h6>
									<input type="number" class="form-control number" name="questoes[]" value="{$DA.questoes}" min="1" step="1" placeholder="Questões" autocomplete="off" required>
								</div>

								<div class="col-lg-1 form-group text-center">
									<h6>&emsp;</h6>
									<a class="dell" href="javascript:void(0)" title="Excluir" id="{php}echo $i{/php}"><i class="far fa-trash-alt fa-lg"></i>&emsp;</a>
								</div>
							</div>
							{php} $i++; {/php}

							{/foreach}
						{/if}
					</div>

					<div style="display: none;">
						<select id="select" class="form-control" name="disciplina_id[]">
							<option value="" selected disabled>--- Selecione ---</option>

							{foreach from=$DISCIPLINAS item=D}
								<option value="{$D.id}">{$D.nome}</option>
							{/foreach}
						</select>
					</div>

					<div class="row">
						<div class="col-lg-1 offset-11 text-center">
							<a class="add" href="javascript:void(0)" title="Incluir" id="incluir"><i class="fas fa-plus fa-lg"></i>&emsp;</a>
						</div>
					</div>

					<input class="form-control" type="hidden" name="avaliacao_id" value="{$ID}">

					<div class="form-btn text-center">
						<a href="{$PAG_AVALIACAO}" class="col-md-3 button btn-back">Cancelar</a>
						<button id="submit" class="col-md-3 button" type="submit" disabled>Salvar</button>
						<!-- <p class="form-message"></p> -->
					</div>
				</form>
			</div>
			<br>
			<blockquote class="blockquote bg-light" style="border: none;">
				<h6>Atenção! O total de questões deve ser igual ao quantitativo definido no cadastro da avaliação.</h6>
			</blockquote>
		</div>
	</div>
</section>

<!-- Script -->
<script> 

$('.add').click(function(e) 
{
	var div_length = $('#new > div').length;
	var i = div_length + 1;

	$("#new").append('<div class="row" id="row'+i+'"><div class="col-lg-6 form-group"><h6>Disciplina</h6><select id="select'+i+'" class="form-control" name="disciplina_id[]" required></select></div><div class="col-lg-5 form-group"><h6>Questões</h6><input type="number" class="form-control number" name="questoes[]" value="" min="1" step="1" placeholder="Questões" autocomplete="off" required></div><div class="col-lg-1 form-group text-center"><h6>&emsp;</h6><a class="dell" href="javascript:void(0)" title="Excluir" id="'+i+'"><i class="far fa-trash-alt fa-lg"></i>&emsp;</a></div></div>');

	var select = $("#select").html();

	$("#select"+i).append(select);

	e.preventDefault();

	$('.dell').click(function(e) 
	{
		var i = $(this).attr('id');

		$("#row"+i).remove();
		e.preventDefault();
	});

	$('.number').on('keyup change', function()
	{
		var limite   = {$LIMITE};
		var questoes = 0;

		$('.number').each(function() 
		{
			questoes += parseInt($(this).val());
		});

		var button = $('#submit');
		
		if (questoes == limite) 
		{
			button.removeAttr('disabled');
		}
		else 
		{
			button.attr('disabled', 'disabled');
		}
	});
});

$('.dell').click(function(e) 
{
	var i = $(this).attr('id');

	$("#row"+i).remove();
	e.preventDefault();
});

$('.number').on('keyup change', function()
{
	var limite   = {$LIMITE};
	var questoes = 0;

	$('.number').each(function() 
	{
		questoes += parseInt($(this).val());
	});

	var button = $('#submit');
	
	if (questoes == limite) 
	{
		button.removeAttr('disabled');
	}
	else 
	{
		button.attr('disabled', 'disabled');
	}
});

function GetDisciplinas(value) 
{
	$.ajax({
		type: "POST",
		url: "acoes_control.php",
		data: "cod_instituicao="+value,
		success: function(data) 
		{
			$("#drop_ue").html(data);
		}
	});
}

</script>