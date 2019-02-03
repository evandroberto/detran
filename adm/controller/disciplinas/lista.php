<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Disciplinas');

$disciplinas = new Disciplinas();

if (isset(Rotas::$pag[2]))
{
	$disciplinas->GetDisciplinasAvaliacao(Rotas::$pag[2]);
}
else 
{
	$disciplinas->GetDisciplinas();
}

$smarty->assign('DISCIPLINAS', $disciplinas->Itens());
$smarty->assign('DISC_TOTAL', $disciplinas->TotalDados());
$smarty->assign('DISC_INFO', Rotas::DisciplinasInfo());
$smarty->assign('DISC_CADASTRO', Rotas::DisciplinasCadastrar());
$smarty->assign('DISC_EDICAO', Rotas::DisciplinasEditar());
$smarty->assign('DISC_EXCLUSAO', Rotas::DisciplinasExcluir());
$smarty->assign('DISC_INCLUSAO', Rotas::DisciplinasIncluir());

$param = (isset(Rotas::$pag[2]) ? isset(Rotas::$pag[2]) : 0);

$smarty->assign('PARAM', $param);

$smarty->assign('PAGINACAO', $disciplinas->MostraPaginacao());

$smarty->display('./disciplinas/lista.tpl');