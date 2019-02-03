<?php 

Class Cursos extends Conexao
{
	private $nome, $sigla, $fundamentacao, $requisito, $slug;

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

	function GetFundamentacao()
	{
		return $this->fundamentacao;
	}

	function GetRequisito()
	{
		return $this->requisito;
	}

	function GetSlug()
	{
		return $this->slug;
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

	function SetFundamentacao($fundamentacao)
	{
		$this->fundamentacao = $fundamentacao;
	}

	function SetRequisito($requisito)
	{
		$this->requisito = $requisito;
	}

	function SetSlug($slug)
	{
		$this->slug = Sistema::GetSlug($slug);
	}

	///METODOS
	function GetCursos()
	{
		$sql = "
		SELECT 
			* 
		FROM 
			{$this->prefix}cursos
		WHERE 
			ativo = TRUE
		ORDER BY 
			nome ASC
		";

		$this->ExecutaSQL($sql);
		$this->GetLista();
	}

	function GetCursosPag()
	{
		$sql = "
		SELECT 
			* 
		FROM 
			{$this->prefix}cursos
		WHERE 
			ativo = TRUE
		ORDER BY 
			nome ASC
		";

		$sql .= $this->LinksPaginacao($sql);

		$this->ExecutaSQL($sql);
		$this->GetLista();
	}

	function GetCursoId($id)
	{
		$sql = "
		SELECT 
			* 
		FROM 
			{$this->prefix}cursos
		WHERE 
			id = :id
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
				'fundamentacao' => $lista['fundamentacao'],
				'requisito' => $lista['requisito'],
				'slug' => $lista['slug']
			);

			$i++;
		}
	}

	function PreparaDados($nome, $sigla, $fundamentacao, $requisito, $slug=null)
	{
		$this->SetNome($nome);
		$this->SetSigla($sigla);
		$this->SetFundamentacao($fundamentacao);
		$this->SetRequisito($requisito);
		$this->SetSlug($nome);
	}

	function InsereDados()
	{
		$sql = "
		INSERT INTO 
			{$this->prefix}cursos (nome, sigla, fundamentacao, requisito, slug)
		VALUES
			(:nome, :sigla, :fundamentacao, :requisito, :slug)
		";

		$params = array(
			':nome' => $this->GetNome(),
			':sigla' => $this->GetSigla(),
			':fundamentacao' => $this->GetFundamentacao(),
			':requisito' => $this->GetRequisito(),
			':slug' => $this->GetSlug(),
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
			{$this->prefix}cursos 
		SET 
			nome = :nome,
			sigla = :sigla,
			fundamentacao = :fundamentacao,
			requisito = :requisito,
			slug = :slug
		WHERE 
			id = :id
		";

		$params = array(
			':id' => (int)$id,
			':nome' => $this->GetNome(),
			':sigla' => $this->GetSigla(),
			':fundamentacao' => $this->GetFundamentacao(),
			':requisito' => $this->GetRequisito(),
			':slug' => $this->GetSlug()
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
			{$this->prefix}cursos 
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

?>