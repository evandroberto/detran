<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Competências');

$competencias = new Competencias();

if (isset(Rotas::$pag[2]))
{
	$competencias->GetCompetenciasCursoPag(Rotas::$pag[2]);
}
else 
{
	$competencias->GetCompetencias();
}

$smarty->assign('COMPETENCIAS', $competencias->Itens());
$smarty->assign('COMP_TOTAL', $competencias->TotalDados());
$smarty->assign('COMP_INFO', Rotas::CompetenciasInfo());
$smarty->assign('COMP_CADASTRO', Rotas::CompetenciasCadastrar());
$smarty->assign('COMP_EDICAO', Rotas::CompetenciasEditar());
$smarty->assign('COMP_EXCLUSAO', Rotas::CompetenciasExcluir());

$smarty->assign('PAGINACAO', $competencias->MostraPaginacao());

$smarty->display('./competencias/lista.tpl');