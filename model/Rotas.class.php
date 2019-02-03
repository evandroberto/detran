<?php

Class Rotas
{
	public static $pag;
	private static $pasta_controller = 'controller';
	private static $pasta_view = 'view';
	private static $pasta_adm = 'adm';

	static function GetHome()
	{
		return Config::SITE_URL . '/' . Config::SITE_MAIN;
	}

	static function GetRoot()
	{
		return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_MAIN;
	}

	static function GetTemplate()
	{
		return self::GetHome() . '/' . self::$pasta_view;
	}

	static function GetImagePasta()
	{
		return 'media/img/';
	}

	static function GetImageURL()
	{
		return self::GetHome() .'/' .self::GetImagePasta();
	}

	static function ImageLink($img, $largura, $altura)
	{
		//return self::GetImageURL()."thumb.php?src={$img}&w={$largura}&h={$altura}&zc=1";
		return self::GetImageURL()."{$img}";
	}

	static function GetAdm()
	{
		return self::GetHome() . '/' . self::$pasta_adm;
	}

	static function GetPagina()
	{
		if (isset($_GET['pag']))
		{
			$pagina = $_GET['pag'];

			self::$pag = explode('/', $pagina);
	
			$pagina = 'controller/' . self::$pag[0] . '/' . self::$pag[1] .'.php';
			
			if (file_exists($pagina))
			{
				include $pagina;
			}
			else
			{
				include 'erro.php';
			}
		}
		else 
		{
			include 'home.php';
		}
	}

	static function Redirecionar($tempo, $pagina)
	{
		$url = '<meta http-equiv="refresh" content="'.$tempo.'; url='. $pagina .'">';
		echo $url;
	}

	///ALTERNATIVAS
	static function Alternativas()
	{
		return self::GetAdm() . '/alternativas/lista';
	}

	///AVALIACOES
	static function Avaliacoes()
	{
		return self::GetAdm() . '/avaliacoes/lista';
	}

	static function AvaliacoesInfo()
	{
		return self::GetAdm() . '/avaliacoes/info';
	}

	static function AvaliacoesCadastrar()
	{
		return self::GetAdm() . '/avaliacoes/cadastro';
	}

	static function AvaliacoesEditar()
	{
		return self::GetAdm() . '/avaliacoes/edicao';
	}

	static function AvaliacoesExcluir()
	{
		return self::GetAdm() . '/avaliacoes/exclusao';
	}

	///COMPETENCIAS
	static function Competencias()
	{
		return self::GetAdm() . '/competencias/lista';
	}

	static function CompetenciasInfo()
	{
		return self::GetAdm() . '/competencias/info';
	}

	static function CompetenciasCadastrar()
	{
		return self::GetAdm() . '/competencias/cadastro';
	}

	static function CompetenciasEditar()
	{
		return self::GetAdm() . '/competencias/edicao';
	}

	static function CompetenciasExcluir()
	{
		return self::GetAdm() . '/competencias/exclusao';
	}

	///CATEGORIAS
	static function Categorias()
	{
		return self::GetAdm() . '/categorias/lista';
	}

	static function CategoriasInfo()
	{
		return self::GetAdm() . '/categorias/info';
	}

	static function CategoriasCadastrar()
	{
		return self::GetAdm() . '/categorias/cadastro';
	}

	static function CategoriasEditar()
	{
		return self::GetAdm() . '/categorias/edicao';
	}

	static function CategoriasExcluir()
	{
		return self::GetAdm() . '/categorias/exclusao';
	}

	///CURSOS
	static function Cursos()
	{
		return self::GetAdm() . '/cursos/lista';
	}

	static function CursosInfo()
	{
		return self::GetAdm() . '/cursos/info';
	}

	static function CursosCadastrar()
	{
		return self::GetAdm() . '/cursos/cadastro';
	}

	static function CursosEditar()
	{
		return self::GetAdm() . '/cursos/edicao';
	}

	static function CursosExcluir()
	{
		return self::GetAdm() . '/cursos/exclusao';
	}

	///DISCIPLINAS
	static function Disciplinas()
	{
		return self::GetAdm() . '/disciplinas/lista';
	}

	static function DisciplinasInfo()
	{
		return self::GetAdm() . '/disciplinas/info';
	}

	static function DisciplinasCadastrar()
	{
		return self::GetAdm() . '/disciplinas/cadastro';
	}

	static function DisciplinasEditar()
	{
		return self::GetAdm() . '/disciplinas/edicao';
	}

	static function DisciplinasExcluir()
	{
		return self::GetAdm() . '/disciplinas/exclusao';
	}

	///DISCIPLINAS AVALIACAO
	static function DisciplinasIncluir()
	{
		return self::GetAdm() . '/disciplinas_avaliacao/inclusao';
	}

	///MATRIZES
	static function Matrizes()
	{
		return self::GetAdm() . '/matrizes/lista';
	}

	///NOTICIAS
	static function Noticias()
	{
		return self::GetAdm() . '/noticias/lista';
	}

	static function NoticiasInfo()
	{
		return self::GetAdm() . '/noticias/info';
	}

	static function NoticiasCadastrar()
	{
		return self::GetAdm() . '/noticias/cadastro';
	}

	static function NoticiasEditar()
	{
		return self::GetAdm() . '/noticias/edicao';
	}

	static function NoticiasExcluir()
	{
		return self::GetAdm() . '/noticias/exclusao';
	}

	///PERFIS
	static function Perfis()
	{
		return self::GetAdm() . '/perfis/lista';
	}

	static function PerfisInfo()
	{
		return self::GetAdm() . '/perfis/info';
	}

	static function PerfisCadastrar()
	{
		return self::GetAdm() . '/perfis/cadastro';
	}

	static function PerfisEditar()
	{
		return self::GetAdm() . '/perfis/edicao';
	}

	static function PerfisExcluir()
	{
		return self::GetAdm() . '/perfis/exclusao';
	}

	///QUESTOES
	static function Questoes()
	{
		return self::GetAdm() . '/questoes/lista';
	}

	static function QuestoesInfo()
	{
		return self::GetAdm() . '/questoes/info';
	}

	static function QuestoesCadastrar()
	{
		return self::GetAdm() . '/questoes/cadastro';
	}

	static function QuestoesEditar()
	{
		return self::GetAdm() . '/questoes/edicao';
	}

	static function QuestoesExcluir()
	{
		return self::GetAdm() . '/questoes/exclusao';
	}
}

?>