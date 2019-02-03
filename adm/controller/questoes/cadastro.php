<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Questões');
$smarty->assign('PAG_QUESTOES', Rotas::Questoes().'/'.Rotas::$pag[2]);
$smarty->assign('ALERTA', '');

$perfis = new Perfis();
$perfis->GetPerfisCurso(Rotas::$pag[2]);
$smarty->assign('PERFIS', $perfis->Itens());

$disciplinas = new Disciplinas();
$disciplinas->GetDisciplinasCurso(Rotas::$pag[2]);
$smarty->assign('DISCIPLINAS', $disciplinas->Itens());

$competencias = new Competencias();
$competencias->GetCompetenciasCurso(Rotas::$pag[2]);
$smarty->assign('COMPETENCIAS', $competencias->Itens());

$avaliacoes = new Avaliacoes();
$avaliacoes->GetAvaliacoesCurso(Rotas::$pag[2]);
$smarty->assign('AVALIACOES', $avaliacoes->Itens());

if (isset($_POST['enunciado']))
{
	$enunciado 		= $_POST['enunciado'];
	$justificativa 	= $_POST['justificativa'];
	$dificuldade 	= $_POST['dificuldade'];
	$proficiencia 	= $_POST['proficiencia'];
	$perfil_id 		= $_POST['perfil_id'];
	$disciplina_id  = $_POST['disciplina_id'];
	$competencia_id = $_POST['competencia_id'];
	$avaliacao_id	= $_POST['avaliacao_id'];
	$imagem			= $_FILES['imagem']['name'];

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

	$save = new Questoes();

	$save->PreparaDados($enunciado, $justificativa, $dificuldade, $proficiencia, $perfil_id, $disciplina_id, $competencia_id, $avaliacao_id, $imagem);

	if ($save->InsereDados())
	{
		$smarty->assign('ALERTA', 'TRUE');
		$smarty->assign('ACTION', 'cadastrados');

		Rotas::Redirecionar(2, Rotas::Questoes().'/'.Rotas::$pag[2]);
	}
	else 
	{
		$smarty->assign('ALERTA', 'FALSE');
	}
}

$smarty->display('./questoes/cadastro.tpl');