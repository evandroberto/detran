<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Cursos');
$smarty->assign('PAG_CURSOS', Rotas::Cursos());
$smarty->assign('ALERTA', '');

if (isset($_POST['nome']))
{
	$nome 		   = $_POST['nome'];
	$sigla 		   = $_POST['sigla'];
	$fundamentacao = $_POST['fundamentacao'];
	$requisito 	   = $_POST['requisito'];

	$save = new Cursos();

	$save->PreparaDados($nome, $sigla, $fundamentacao, $requisito);

	if ($save->InsereDados())
	{
		$smarty->assign('ALERTA', 'TRUE');
		$smarty->assign('ACTION', 'cadastrados');

		Rotas::Redirecionar(2, Rotas::Cursos());
	}
	else 
	{
		$smarty->assign('ALERTA', 'FALSE');
	}
}

$smarty->display('./cursos/cadastro.tpl');