<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Notícias');
$smarty->assign('PAG_NOTICIAS', Rotas::Noticias());
$smarty->assign('ALERTA', '');

$categorias = new Categorias();
$categorias->GetCategorias();
$smarty->assign('CATEGORIAS', $categorias->Itens());

if (isset($_POST['titulo']))
{
	$titulo 	  = $_POST['titulo'];
	$texto 		  = $_POST['texto'];
	$categoria_id = $_POST['categoria_id'];
	$imagem		  = $_FILES['imagem']['name'];

	if (!empty($_FILES['imagem']['name']))
	{
		$send = new ImageUpload();

		if ($send->Upload(900, 'imagem'))
		{
			$imagem = $send->retorno;
		}
		else
		{
			exit('Erro ao enviar a imagem');
		}
	}
	else 
	{
		$imagem = '';
	}

	$save = new Noticias();

	$save->PreparaDados($titulo, $texto, $categoria_id, $imagem);

	if ($save->InsereDados())
	{
		$smarty->assign('ALERTA', 'TRUE');
		$smarty->assign('ACTION', 'cadastrados');

		Rotas::Redirecionar(2, Rotas::Noticias());
	}
	else 
	{
		$smarty->assign('ALERTA', 'FALSE');
	}
}

$smarty->display('./noticias/cadastro.tpl');