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

<!-- List Results -->
<section id="contact" class="section-padding contact-section bg-light">
	<div class="container">

		<div class="cta-button text-right">
			<a href="{$PERF_CADASTRO}" class="button">Novo</a>
		</div>

		{if $PERF_TOTAL < 1}
		<!-- Section Title -->
		<div class="row justify-content-center">
			<div class="col-lg-6 ">
				<div class="section-title text-center">
					<h2>Oops! Não encontramos {$PAGINA}</h2>
				</div>
			</div>
		</div>

		{else}
		<!-- Section Title -->
		<div class="row justify-content-center">
			<div class="col-lg-6 ">
				<div class="section-title text-center">
					<h2>Listar</h2>
				</div>
			</div>
		</div>

		<table class="table table-hover text-center">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Código</th>
					<th scope="col">Nome</th>
					<th scope="col">Curso</th>
					<th scope="col">Ações</th>
				</tr>
			</thead>
			<tbody>

				{foreach from=$PERFIS item=P}
				<tr>
					<th scope="row">{$P.id}</th>
					<td>{$P.codigo}</td>
					<td>{$P.nome}</td>
					<td>{$P.curso}</td>
					<td class="col-md-2">
						<a href="{$PERF_INFO}/{$P.id}/{$P.slug}" title="Detalhar">
							<i class="far fa-eye fa-lg"></i></a>&emsp;

						<form id="edicao{$P.id}" name="edicao" method="post" action="{$PERF_EDICAO}" style="display:inline;">
							<input type="hidden" name="id" value="{$P.id}">

							<a href="javascript:{}" title="Editar" onclick="document.getElementById('edicao{$P.id}').submit(); return false;"><i class="far fa-edit fa-lg"></i>&emsp;</a>
						</form>

						<form id="exclusao{$P.id}" name="exclusao" method="post" action="{$PERF_EXCLUSAO}" style="display:inline;">
							<input type="hidden" name="id" value="{$P.id}">

							<a href="javascript:void(0)" title="Excluir" id="excluir" data-id="{$P.id}"><i class="far fa-trash-alt fa-lg"></i>&emsp;</a>
						</form>
					</td>
				</tr>
				{/foreach}
			<tr>
			</tbody>
		</table>
		{/if}
	</div>
</section>

<!-- Pagination -->
<section id="contact" class="contact-section bg-light">
	<div class="container">
		<div class="row justify-content-center">
			{$PAGINACAO}
		</div>
	</div>
</section>

<!-- Script -->
<script type="text/javascript">

	$(document).ready(function() 
	{			
		$(document).on('click', '#excluir', function(e)
		{	
			var id = $(this).data('id');
			var form = e.target.form; // storing the form

			SwalDelete(id, form);
			e.preventDefault();
		});
	});

	function SwalDelete(id, path) 
	{	
		swal({
			title: 'Tem certeza?',
			text: "As entidades relacionadas com este registro não serão mais apresentadas!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#ffc900',
			confirmButtonText: 'Sim, quero excluir!',
			cancelButtonColor: '#000',
			cancelButtonText: 'Cancelar',
			showLoaderOnConfirm: true,
			  
			preConfirm: function() {
				return new Promise(function(resolve) 
				{
					$.ajax({
						url: '{$PERF_EXCLUSAO}',
						type: 'POST',
						data: 'id='+id,
						dataType: 'html'
					})
					.done(function(response)
					{
						if (response.search('TRUE')) 
						{
							swal(
								'Pronto!', 'Exclusão realizada com sucesso!', 'success'
							).then(function(result)
							{
  								location.reload();
             				});
						}
						else if (response.search('FALSE')) 
						{
							swal('Oops...', 'Algo deu errado! Tente mais tarde.', 'error');
						}
					})
					.fail(function(error)
					{
						console.log(error);
						swal('Oops...', 'Algo deu errado! Tente mais tarde.', 'error');
					});
				});
		    },
			allowOutsideClick: false			  
		});	
	}

</script>