<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Avaliações');
$smarty->assign('PAG_AVALIACOES', Rotas::Avaliacoes());
$smarty->assign('ALERTA', '');

$cursos = new Cursos();
$cursos->GetCursos();
$smarty->assign('CURSOS', $cursos->Itens());

if (isset($_POST['nome']))
{
	$nome 				= $_POST['nome'];
	$sigla 				= $_POST['sigla'];
	$tempo_prova 		= $_POST['tempo_prova'];
	$tempo_tdh			= $_POST['tempo_tdh'];
	$total_questoes 	= $_POST['total_questoes'];
	$total_alternativas = $_POST['total_alternativas'];
	$curso_id 			= $_POST['curso_id'];

	$save = new Avaliacoes();

	$save->PreparaDados($nome, $sigla, $tempo_prova, $tempo_tdh, $total_questoes, $total_alternativas, $curso_id);

	if ($save->InsereDados())
	{
		$smarty->assign('ALERTA', 'TRUE');
		$smarty->assign('ACTION', 'cadastrados');

		Rotas::Redirecionar(2, Rotas::Avaliacoes());
	}
	else 
	{
		$smarty->assign('ALERTA', 'FALSE');
	}
}

$smarty->display('./avaliacoes/cadastro.tpl');