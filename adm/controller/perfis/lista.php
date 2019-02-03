<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Perfis');

$perfis = new Perfis();

if (isset(Rotas::$pag[2]))
{
	$perfis->GetPerfisCursoPag(Rotas::$pag[2]);
}
else 
{
	$perfis->GetPerfis();
}

$smarty->assign('PERFIS', $perfis->Itens());
$smarty->assign('PERF_TOTAL', $perfis->TotalDados());
$smarty->assign('PERF_INFO', Rotas::PerfisInfo());
$smarty->assign('PERF_CADASTRO', Rotas::PerfisCadastrar());
$smarty->assign('PERF_EDICAO', Rotas::PerfisEditar());
$smarty->assign('PERF_EXCLUSAO', Rotas::PerfisExcluir());

$smarty->assign('PAGINACAO', $perfis->MostraPaginacao());

$smarty->display('./perfis/lista.tpl');