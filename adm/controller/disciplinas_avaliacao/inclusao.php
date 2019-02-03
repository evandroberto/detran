<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Disciplinas');
$smarty->assign('PAG_AVALIACAO', Rotas::AvaliacoesInfo().'/'.Rotas::$pag[2]);
$smarty->assign('ALERTA', '');

$avaliacao = new Avaliacoes();
$avaliacao->GetAvaliacaoId(Rotas::$pag[2]);
$avaliacao = $avaliacao->Itens();
$smarty->assign('LIMITE', $avaliacao[1]['total_questoes']);

$disciplinas = new Disciplinas();
$disciplinas->GetDisciplinasCursoAvaliacao(Rotas::$pag[2]);
$smarty->assign('DISCIPLINAS', $disciplinas->Itens());

$disc_avaliacao = new Disciplinas();
$disc_avaliacao->GetDisciplinasAvaliacao(Rotas::$pag[2]);
$smarty->assign('DISC_AVALIACAO', $disc_avaliacao->Itens());

if (isset($_POST['avaliacao_id']))
{
	$avaliacao_id  = $_POST['avaliacao_id'];

	$save = new DisciplinasAvaliacao();

	$save->ExcluiDados($avaliacao_id);

	for ($i = 0; $i < sizeof($_POST['disciplina_id']); $i++) 
	{
		$disciplina_id = $_POST['disciplina_id'][$i];
		$questoes 	   = $_POST['questoes'][$i];

		$save->PreparaDados($avaliacao_id, $disciplina_id, $questoes);

		if ($save->InsereDados($avaliacao_id, $disciplina_id, $questoes))
		{
			$smarty->assign('ALERTA', 'TRUE');
			$smarty->assign('ACTION', 'atualizados');
		}
	}

	Rotas::Redirecionar(2, Rotas::AvaliacoesInfo().'/'.Rotas::$pag[2]);
}

$smarty->assign('ID', Rotas::$pag[2]);
$smarty->assign('DISC_TOTAL', $disc_avaliacao->TotalDados());

$smarty->display('./disciplinas_avaliacao/inclusao.tpl');