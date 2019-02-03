<?php 

Class Avaliacoes extends Conexao
{
	private $nome, $sigla, $tempo_prova, $tempo_tdh, $total_questoes, $total_alternativas, $slug, $curso_id;

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

	function GetTempoProva()
	{
		return $this->tempo_prova;
	}

	function GetTempoTDH()
	{
		return $this->tempo_tdh;
	}

	function GetTotalQuestoes()
	{
		return $this->total_questoes;
	}

	function GetTotalAlternativas()
	{
		return $this->total_alternativas;
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

	function SetTempoProva($tempo_prova)
	{
		$this->tempo_prova = $tempo_prova;
	}

	function SetTempoTDH($tempo_tdh)
	{
		$this->tempo_tdh = $tempo_tdh;
	}

	function SetTotalQuestoes($total_questoes)
	{
		$this->total_questoes = $total_questoes;
	}

	function SetTotalAlternativas($total_alternativas)
	{
		$this->total_alternativas = $total_alternativas;
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
	function GetAvaliacoes()
	{
		$sql = "
		SELECT 
			a.id, a.sigla, a.nome, a.slug, c.nome curso, c.id curso_id,
			a.tempo_prova, a.tempo_tdh, a.total_questoes, a.total_alternativas
		FROM 
			{$this->prefix}avaliacoes a
		JOIN
			{$this->prefix}cursos c
			ON c.id = a.curso_id
			AND c.ativo = TRUE 
		WHERE 
			a.ativo = TRUE
		ORDER BY 
			a.nome ASC
		";

		$sql .= $this->LinksPaginacao($sql);

		$this->ExecutaSQL($sql);
		$this->GetLista();
	}

	function GetAvaliacoesCurso($id)
	{
		$sql = "
		SELECT 
			a.id, a.sigla, a.nome, a.slug, c.nome curso, c.id curso_id,
			a.tempo_prova, a.tempo_tdh, a.total_questoes, a.total_alternativas
		FROM 
			{$this->prefix}avaliacoes a
		JOIN
			{$this->prefix}cursos c
			ON c.id = a.curso_id
			AND c.ativo = TRUE
		WHERE 
			c.id = :id
			AND a.ativo = TRUE
		ORDER BY 
			a.nome ASC
		";

		$params = array(':id' => (int)$id);

		$sql .= $this->LinksPaginacao($sql, $params);

		$this->ExecutaSQL($sql, $params);
		$this->GetLista();
	}

	function GetAvaliacaoId($id)
	{
		$sql = "
		SELECT 
			a.id, a.sigla, a.nome, a.slug, c.nome curso, c.id curso_id,
			a.tempo_prova, a.tempo_tdh, a.total_questoes, a.total_alternativas
		FROM 
			{$this->prefix}avaliacoes a
		JOIN
			{$this->prefix}cursos c
			ON c.id = a.curso_id
			AND c.ativo = TRUE
		WHERE 
			a.id = :id
			AND a.ativo = TRUE
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
				'tempo_prova' => $lista['tempo_prova'],
				'tempo_tdh' => $lista['tempo_tdh'],
				'total_questoes' => $lista['total_questoes'],
				'total_alternativas' => $lista['total_alternativas'],
				'slug' => $lista['slug'],
				'curso' => $lista['curso'],
				'curso_id' => $lista['curso_id']
			);

			$i++;
		}
	}

	function PreparaDados($nome, $sigla, $tempo_prova, $tempo_tdh, $total_questoes, $total_alternativas, $curso_id)
	{
		$this->SetNome($nome);
		$this->SetSigla($sigla);
		$this->SetTempoProva($tempo_prova);
		$this->SetTempoTDH($tempo_tdh);
		$this->SetTotalQuestoes($total_questoes);
		$this->SetTotalAlternativas($total_alternativas);
		$this->SetSlug($nome);
		$this->SetCursoId($curso_id);
	}

	function InsereDados()
	{
		$sql = "
		INSERT INTO 
			{$this->prefix}avaliacoes 
			(nome, sigla, tempo_prova, tempo_tdh, total_questoes, total_alternativas, 
			 slug, data_criacao, ativo, curso_id)
		VALUES
			(:nome, :sigla, :tempo_prova, :tempo_tdh, :total_questoes, :total_alternativas, 
			 :slug, current_timestamp, TRUE, :curso_id)
		";

		$params = array(
			':nome' => $this->GetNome(),
			':sigla' => $this->GetSigla(),
			':tempo_prova' => $this->GetTempoProva(),
			':tempo_tdh' => $this->GetTempoTDH(),
			':total_questoes' => $this->GetTotalQuestoes(),
			':total_alternativas' => $this->GetTotalAlternativas(),
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
			{$this->prefix}avaliacoes 
		SET 
			nome = :nome,
			sigla = :sigla,
			tempo_prova = :tempo_prova,
			tempo_tdh = :tempo_tdh,
			total_questoes = :total_questoes,
			total_alternativas = :total_alternativas,
			slug = :slug,
			curso_id = :curso_id
		WHERE 
			id = :id
		";

		$params = array(
			':id' => (int)$id,
			':nome' => $this->GetNome(),
			':sigla' => $this->GetSigla(),
			':tempo_prova' => $this->GetTempoProva(),
			':tempo_tdh' => $this->GetTempoTDH(),
			':total_questoes' => $this->GetTotalQuestoes(),
			':total_alternativas' => $this->GetTotalAlternativas(),
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
			{$this->prefix}avaliacoes 
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