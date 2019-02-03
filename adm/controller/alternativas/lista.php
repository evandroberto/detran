<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Alternativas');
$smarty->assign('PAG_QUESTAO', Rotas::QuestoesInfo().'/'.Rotas::$pag[2].'/'.Rotas::$pag[3]);
$smarty->assign('ALERTA', '');

$questao = new Questoes();
$questao->GetQuestaoId(Rotas::$pag[3]);
$questao = $questao->Itens();

$avaliacao = new Avaliacoes();
$avaliacao->GetAvaliacaoId($questao[1]['avaliacao_id']);
$avaliacao = $avaliacao->Itens();
$smarty->assign('LIMITE', $avaliacao[1]['total_alternativas']-1);

$LIMITE = $avaliacao[1]['total_alternativas']-1;

if (isset($_POST['questao_id']))
{

	for ($i = 0; $i <= $LIMITE; $i++) 
	{
		$id 		= $_POST['id'][$i];
		$gabarito 	= $_POST['gabarito'][$i];
		$descricao  = $_POST['descricao'][$i];
		$questao_id = $_POST['questao_id'];

		$save = new Alternativas();

		$save->PreparaDados($gabarito, $descricao, $questao_id);

		if ($id == 0)
		{
			if ($save->InsereDados())
			{
				$smarty->assign('ALERTA', 'TRUE');
				$smarty->assign('ACTION', 'cadastrados');
			}
		}
		else 
		{
			if ($save->AtualizaDados($id))
			{
				$smarty->assign('ALERTA', 'TRUE');
				$smarty->assign('ACTION', 'atualizados');
			}
		}
	}

	Rotas::Redirecionar(2, Rotas::QuestoesInfo().'/'.Rotas::$pag[2].'/'.Rotas::$pag[3]);
}

$alternativas = new Alternativas();

if (isset(Rotas::$pag[3]))
{
	$alternativas->GetAlternativasQuestao(Rotas::$pag[3]);
}

$smarty->assign('ID', Rotas::$pag[3]);
$smarty->assign('ALTERNATIVAS', $alternativas->Itens());
$smarty->assign('ALT_TOTAL', $alternativas->TotalDados());

$smarty->display('./alternativas/lista.tpl');