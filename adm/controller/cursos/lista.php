<?php

$smarty = new Template();

$smarty->assign('GET_TEMPLATE', Rotas::GetTemplate());
$smarty->assign('PAGINA', 'Cursos');

$cursos = new Cursos();

$cursos->GetCursosPag();

$smarty->assign('CURSOS', $cursos->Itens());
$smarty->assign('CURSO_TOTAL', $cursos->TotalDados());
$smarty->assign('CURSO_INFO', Rotas::CursosInfo());
$smarty->assign('CURSO_CADASTRO', Rotas::CursosCadastrar());
$smarty->assign('CURSO_EDICAO', Rotas::CursosEditar());
$smarty->assign('CURSO_EXCLUSAO', Rotas::CursosExcluir());

$smarty->assign('PAGINACAO', $cursos->MostraPaginacao());

$smarty->display('./cursos/lista.tpl');