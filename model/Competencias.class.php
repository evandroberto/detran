<?php 

Class Competencias extends Conexao
{
	private $nome, $codigo, $slug, $curso_id;

	function __construct()
	{
		parent::__construct();
	}

	///GETTERS
	function GetNome()
	{
		return $this->nome;
	}

	function GetCodigo()
	{
		return $this->codigo;
	}

	function GetSlug()
	{
		return $this->slug;
	}

	function GetCursoId()
	{
		return $this->curso_id;
	}

	///SETTERS
	function SetNome($nome)
	{
		$this->nome = $nome;
	}

	function SetCodigo($codigo)
	{
		$this->codigo = $codigo;
	}

	function SetSlug($slug)
	{
		$this->slug = Sistema::GetSlug($slug);
	}

	function SetCursoId($curso_id)
	{
		$this->curso_id = $curso_id;
	}

	///METODOS
	function GetCompetencias()
	{
		$sql = "
		SELECT 
			cp.id, cp.codigo, cp.nome, cp.slug, 
			c.id curso_id, c.nome curso, c.sigla curso_sigla
		FROM 
			{$this->prefix}competencias cp
		JOIN
			{$this->prefix}cursos c
			ON c.id = cp.curso_id
			AND c.ativo = TRUE 
		WHERE 
			cp.ativo = TRUE
		ORDER BY 
			cp.codigo ASC
		";

		$sql .= $this->LinksPaginacao($sql);

		$this->ExecutaSQL($sql);
		$this->GetLista();
	}

	function GetCompetenciasCurso($id)
	{
		$sql = "
		SELECT 
			cp.id, cp.codigo, cp.nome, cp.slug, 
			c.id curso_id, c.nome curso, c.sigla curso_sigla
		FROM 
			{$this->prefix}competencias cp
		JOIN
			{$this->prefix}cursos c
			ON c.id = cp.curso_id
			AND c.ativo = TRUE
		WHERE 
			c.id = :id
			AND cp.ativo = TRUE
		ORDER BY 
			cp.codigo ASC
		";

		$params = array(':id' => (int)$id);

		$this->ExecutaSQL($sql, $params);
		$this->GetLista();
	}

	function GetCompetenciasCursoPag($id)
	{
		$sql = "
		SELECT 
			cp.id, cp.codigo, cp.nome, cp.slug, 
			c.id curso_id, c.nome curso, c.sigla curso_sigla
		FROM 
			{$this->prefix}competencias cp
		JOIN
			{$this->prefix}cursos c
			ON c.id = cp.curso_id
			AND c.ativo = TRUE
		WHERE 
			c.id = :id
			AND cp.ativo = TRUE
		ORDER BY 
			cp.codigo ASC
		";

		$params = array(':id' => (int)$id);

		$sql .= $this->LinksPaginacao($sql, $params);

		$this->ExecutaSQL($sql, $params);
		$this->GetLista();
	}

	function GetCompetenciaId($id)
	{
		$sql = "
		SELECT 
			cp.id, cp.codigo, cp.nome, cp.slug, 
			c.id curso_id, c.nome curso, c.sigla curso_sigla
		FROM 
			{$this->prefix}competencias cp
		JOIN
			{$this->prefix}cursos c
			ON c.id = cp.curso_id
			AND c.ativo = TRUE
		WHERE 
			cp.id = :id
			AND cp.ativo = TRUE
		";

		$params = array(':id' => (int)$id);

		$this->ExecutaSQL($sql, $params);
		$this->GetLista();
	}

	private function GetLista()
	{
		$i = 1;

		while ($lista = $this->ListaDados())
		{
			$this->itens[$i] = array(
				'id' => $lista['id'],
				'nome' => $lista['nome'],
				'codigo' => $lista['codigo'],
				'slug' => $lista['slug'],
				'curso' => $lista['curso'],
				'curso_id' => $lista['curso_id'],
				'curso_sigla' => $lista['curso_sigla']
			);

			$i++;
		}
	}

	function PreparaDados($nome, $codigo, $curso_id)
	{
		$this->SetNome($nome);
		$this->SetCodigo($codigo);
		$this->SetSlug($nome);
		$this->SetCursoId($curso_id);
	}

	function InsereDados()
	{
		$sql = "
		INSERT INTO 
			{$this->prefix}competencias 
			(nome, codigo, slug, data_criacao, ativo, curso_id)
		VALUES
			(:nome, :codigo, :slug, current_timestamp, TRUE, :curso_id)
		";

		$params = array(
			':nome' => $this->GetNome(),
			':codigo' => $this->GetCodigo(),
			':slug' => $this->GetSlug(),
			':curso_id' => $this->GetCursoId()
		);

		if ($this->ExecutaSQL($sql, $params))
		{
			return TRUE;
		}
		else 
		{
			return FALSE;
		}
	}

	function AtualizaDados($id)
	{
		$sql = "
		UPDATE 
			{$this->prefix}competencias 
		SET 
			nome = :nome,
			codigo = :codigo,
			slug = :slug,
			curso_id = :curso_id
		WHERE 
			id = :id
		";

		$params = array(
			':id' => (int)$id,
			':nome' => $this->GetNome(),
			':codigo' => $this->GetCodigo(),
			':slug' => $this->GetSlug(),
			':curso_id' => $this->GetCursoId()
		);

		if ($this->ExecutaSQL($sql, $params))
		{
			return TRUE;
		}
		else 
		{
			return FALSE;
		}
	}

	function ExcluiDados($id)
	{
		$sql = "
		UPDATE 
			{$this->prefix}competencias 
		SET 
			ativo = FALSE
		WHERE 
			id = :id
		";

		$params = array(
			':id' => (int)$id
		);

		if ($this->ExecutaSQL($sql, $params))
		{
			return TRUE;
		}
		else 
		{
			return FALSE;
		}
	}
}