<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Questões');

$questoes = new Questoes();

if (isset(Rotas::$pag[2]))
{
	$questoes->GetQuestoesCurso(Rotas::$pag[2]);
}
else 
{
	$questoes->GetQuestoes();
}

$smarty->assign('QUESTOES', $questoes->Itens());
$smarty->assign('QUEST_TOTAL', $questoes->TotalDados());
$smarty->assign('QUEST_INFO', Rotas::QuestoesInfo());
$smarty->assign('QUEST_CADASTRO', Rotas::QuestoesCadastrar().'/'.Rotas::$pag[2]);
$smarty->assign('QUEST_EDICAO', Rotas::QuestoesEditar().'/'.Rotas::$pag[2]);
$smarty->assign('QUEST_EXCLUSAO', Rotas::QuestoesExcluir());

$smarty->assign('PAGINACAO', $questoes->MostraPaginacao());

$smarty->display('./questoes/lista.tpl');