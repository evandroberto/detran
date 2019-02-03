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
	$id 	  	  = $_POST['id'];
	$titulo 	  = $_POST['titulo'];
	$texto 		  = $_POST['texto'];
	$categoria_id = $_POST['categoria_id'];
	$imagem		  = $_FILES['imagem']['name'];
	$arquivo 	  = $_POST['img_file'];

	if (!empty($_FILES['imagem']['name']))
	{
		$send = new ImageUpload();

		if ($send->Upload(900, 'imagem'))
		{
			$imagem = $send->retorno;
			@unlink($arquivo);
		}
		else
		{
			exit('Erro ao enviar a imagem');
		}
	}
	else 
	{
		$imagem = (isset($_POST['img_atual']) ? $_POST['img_atual'] : '');
	}

	$save = new Noticias();

	$save->PreparaDados($titulo, $texto, $categoria_id, $imagem);

	if ($save->AtualizaDados($id))
	{
		$smarty->assign('ALERTA', 'TRUE');
		$smarty->assign('ACTION', 'atualizados');

		Rotas::Redirecionar(2, Rotas::Noticias());
	}
	else 
	{
		$smarty->assign('ALERTA', 'FALSE');
	}
}

$id = $_POST['id'];

$noticias = new Noticias();
$noticias->GetNoticiaId($id);
$smarty->assign('NOTICIAS', $noticias->Itens());

$smarty->display('./noticias/edicao.tpl');