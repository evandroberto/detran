<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Disciplinas');
$smarty->assign('PAG_DISCIPLINAS', Rotas::Disciplinas());
$smarty->assign('ALERTA', '');

$cursos = new Cursos();
$cursos->GetCursos();
$smarty->assign('CURSOS', $cursos->Itens());

if (isset($_POST['nome']))
{
	$id 	   = $_POST['id'];
	$nome 	   = $_POST['nome'];
	$sigla 	   = $_POST['sigla'];
	$descricao = $_POST['descricao'];
	$curso_id  = $_POST['curso_id'];

	$save = new Disciplinas();

	$save->PreparaDados($nome, $sigla, $descricao, $curso_id);

	if ($save->AtualizaDados($id))
	{
		$smarty->assign('ALERTA', 'TRUE');
		$smarty->assign('ACTION', 'atualizados');

		Rotas::Redirecionar(2, Rotas::Disciplinas());
	}
	else 
	{
		$smarty->assign('ALERTA', 'FALSE');
	}
}

$id = $_POST['id'];

$disciplinas = new Disciplinas();
$disciplinas->GetDisciplinaId($id);
$smarty->assign('DISCIPLINAS', $disciplinas->Itens());

$smarty->display('./disciplinas/edicao.tpl');