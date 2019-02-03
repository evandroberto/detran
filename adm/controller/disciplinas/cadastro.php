<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Disciplinas');
$smarty->assign('PAG_DISCIPLINAS', Rotas::Disciplinas());
$smarty->assign('ALERTA', '');

if (isset($_POST['nome']))
{
	$nome 	   = $_POST['nome'];
	$sigla 	   = $_POST['sigla'];
	$descricao = $_POST['descricao'];
	$curso_id  = $_POST['curso_id'];

	$save = new Disciplinas();

	$save->PreparaDados($nome, $sigla, $descricao, $curso_id);

	if ($save->InsereDados())
	{
		$smarty->assign('ALERTA', 'TRUE');
		$smarty->assign('ACTION', 'cadastrados');

		Rotas::Redirecionar(2, Rotas::Disciplinas());
	}
	else 
	{
		$smarty->assign('ALERTA', 'FALSE');
	}
}

$cursos = new Cursos();

$cursos->GetCursos();

$smarty->assign('CURSOS', $cursos->Itens());

$smarty->display('./disciplinas/cadastro.tpl');