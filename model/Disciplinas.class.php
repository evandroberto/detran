<?php 

Class Disciplinas extends Conexao
{
	private $nome, $sigla, $descricao, $slug, $curso_id;

	function __construct()
	{
		parent::__construct();
	}

	///GETTERS
	function GetNome()
	{
		return $this->nome;
	}

	function GetSigla()
	{
		return $this->sigla;
	}

	function GetDescricao()
	{
		return $this->descricao;
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

	function SetSigla($sigla)
	{
		$this->sigla = $sigla;
	}

	function SetDescricao($descricao)
	{
		$this->descricao = $descricao;
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
	function GetDisciplinas()
	{
		$sql = "
		SELECT 
			d.id, d.sigla, d.nome, d.descricao, d.slug, 
			c.id curso_id, c.nome curso, c.sigla curso_sigla, null questoes
		FROM 
			{$this->prefix}disciplinas d
		JOIN
			{$this->prefix}cursos c
			ON c.id = d.curso_id
			AND c.ativo = TRUE 
		WHERE 
			d.ativo = TRUE
		ORDER BY 
			d.nome ASC
		";

		$sql .= $this->LinksPaginacao($sql);

		$this->ExecutaSQL($sql);
		$this->GetLista();
	}

	function GetDisciplinasAvaliacao($id)
	{
		$sql = "
		SELECT 
			d.id, d.sigla, d.nome, d.descricao, d.slug, 
			c.id curso_id, c.nome curso, c.sigla curso_sigla, da.questoes
		FROM 
			{$this->prefix}disciplinas d
		JOIN
			{$this->prefix}cursos c
			ON c.id = d.curso_id
			AND c.ativo = TRUE
		JOIN 
			{$this->prefix}disciplinas_avaliacao da 
			ON da.disciplina_id = d.id
		JOIN 
			{$this->prefix}avaliacoes a 
			ON a.id = da.avaliacao_id
			AND a.ativo = TRUE
		WHERE 
			a.id = :id
			AND d.ativo = TRUE
		ORDER BY
			d.nome
		";

		$params = array(':id' => (int)$id);

		$sql .= $this->LinksPaginacao($sql, $params);

		$this->ExecutaSQL($sql, $params);
		$this->GetLista();
	}

	function GetDisciplinasCurso($id)
	{
		$sql = "
		SELECT 
			d.id, d.sigla, d.nome, d.descricao, d.slug, 
			c.id curso_id, c.nome curso, c.sigla curso_sigla, null questoes
		FROM 
			{$this->prefix}disciplinas d
		JOIN
			{$this->prefix}cursos c
			ON c.id = d.curso_id
			AND c.ativo = TRUE
		WHERE 
			c.id = :id
			AND d.ativo = TRUE
		ORDER BY
			d.nome
		";

		$params = array(':id' => (int)$id);

		$this->ExecutaSQL($sql, $params);
		$this->GetLista();
	}

	function GetDisciplinasCursoAvaliacao($id)
	{
		$sql = "
		SELECT 
			d.id, d.sigla, d.nome, d.descricao, d.slug, 
			c.id curso_id, c.nome curso, c.sigla curso_sigla, null questoes
		FROM 
			{$this->prefix}disciplinas d
		JOIN
			{$this->prefix}cursos c
			ON c.id = d.curso_id
			AND c.ativo = TRUE
        WHERE
        	c.id = (SELECT curso_id FROM det_avaliacoes WHERE id = :id)
		ORDER BY
			d.nome
		";

		$params = array(':id' => (int)$id);

		$this->ExecutaSQL($sql, $params);
		$this->GetLista();
	}

	function GetDisciplinaId($id)
	{
		$sql = "
		SELECT 
			d.id, d.sigla, d.nome, d.descricao, d.slug, 
			c.id curso_id, c.nome curso, c.sigla curso_sigla, null questoes
		FROM 
			{$this->prefix}disciplinas d
		JOIN
			{$this->prefix}cursos c
			ON c.id = d.curso_id
			AND c.ativo = TRUE
		WHERE 
			d.id = :id
			AND d.ativo = TRUE
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
				'sigla' => $lista['sigla'],
				'descricao' => $lista['descricao'],
				'slug' => $lista['slug'],
				'curso' => $lista['curso'],
				'curso_id' => $lista['curso_id'],
				'curso_sigla' => $lista['curso_sigla'],
				'questoes' => $lista['questoes']
			);

			$i++;
		}
	}

	function PreparaDados($nome, $sigla, $descricao, $curso_id)
	{
		$this->SetNome($nome);
		$this->SetSigla($sigla);
		$this->SetDescricao($descricao);
		$this->SetSlug($nome);
		$this->SetCursoId($curso_id);
	}

	function InsereDados()
	{
		$sql = "
		INSERT INTO 
			{$this->prefix}disciplinas 
			(nome, sigla, descricao, slug, data_criacao, ativo, curso_id)
		VALUES
			(:nome, :sigla, :descricao, :slug, current_timestamp, TRUE, :curso_id)
		";

		$params = array(
			':nome' => $this->GetNome(),
			':sigla' => $this->GetSigla(),
			':descricao' => $this->GetDescricao(),
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
			{$this->prefix}disciplinas 
		SET 
			nome = :nome,
			sigla = :sigla,
			descricao = :descricao,
			slug = :slug,
			curso_id = :curso_id
		WHERE 
			id = :id
		";

		$params = array(
			':id' => (int)$id,
			':nome' => $this->GetNome(),
			':sigla' => $this->GetSigla(),
			':descricao' => $this->GetDescricao(),
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
			{$this->prefix}disciplinas 
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