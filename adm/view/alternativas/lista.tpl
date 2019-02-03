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
					<h2>Listar</h2>
				</div>
			</div>
		</div>

		<!-- Contact Form -->
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<!-- Form -->
				<form action="" method="post" class="contact-form bg-white">
					{if $ALT_TOTAL < 1}
						{for $I=0 to $LIMITE}

							<div class="row">
								<input class="form-control" type="hidden" name="id[{$I}]" value="0">

								<input class="form-control" type="hidden" name="gabarito[{$I}]" value="0">
								<div class="col-lg-2 form-group text-center">
									<h6>Gabarito</h6>
									<input class="form-check-input" count="{$I}" type="radio" name="radio" required>
								</div>

								<div class="col-lg-10 form-group">
									<h6>Descrição</h6>
									<input type="text" class="form-control" name="descricao[{$I}]" placeholder="Descrição" autocomplete="off" required>
								</div>
							</div>

						{/for}
					{else}
						{php} $i = 0; {/php}
						{foreach from=$ALTERNATIVAS item=A}

						<div class="row">
							<input class="form-control" type="hidden" name="id[{php}echo $i{/php}]" value="{$A.id}">

							<input class="form-control" type="hidden" name="gabarito[{php}echo $i{/php}]" {if $A.gabarito == 1} value="1" {else} value="0" {/if}>
							<div class="col-lg-2 form-group text-center">
								<h6>Gabarito</h6>
								<input class="form-check-input" count="{php}echo $i{/php}" type="radio" name="radio" value="{$A.gabarito}" {if $A.gabarito == 1} checked {/if} required>
							</div>

							<div class="col-lg-9 form-group">
								<h6>Descrição</h6>
								<input type="text" class="form-control" name="descricao[{php}echo $i{/php}]" placeholder="Descrição" value="{$A.descricao}" autocomplete="off" required>
							</div>
						</div>

						{php} $i++; {/php}
						{/foreach}
					{/if}

					<input class="form-control" type="hidden" name="questao_id" value="{$ID}">

					<div class="form-btn text-center">
						<a href="{$PAG_QUESTAO}" class="col-md-3 button btn-back">Cancelar</a>
						<button class="col-md-3 button" type="submit">Salvar</button>
						<!-- <p class="form-message"></p> -->
					</div>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Script -->
<script>

$('input[type=radio]').change(function(e)
{
	var i = $(this).attr('count');

	for (var j = 0; j <= {$LIMITE}; j++)
	{
		$("input[name='gabarito["+j+"]']").attr("value", 0);
	}

	$("input[name='gabarito["+i+"]']").attr("value", 1);
});
	
</script>