<?php 

Class Alternativas extends Conexao
{
	private $gabarito, $descricao, $questao_id;

	function __construct()
	{
		parent::__construct();
	}

	///GETTERS
	function GetGabarito()
	{
		return $this->gabarito;
	}

	function GetDescricao()
	{
		return $this->descricao;
	}

	function GetQuestaoId()
	{
		return $this->questao_id;
	}

	///SETTERS
	function SetGabarito($gabarito)
	{
		$this->gabarito = $gabarito;
	}

	function SetDescricao($descricao)
	{
		$this->descricao = $descricao;
	}

	function SetQuestaoId($questao_id)
	{
		$this->questao_id = $questao_id;
	}

	///METODOS
	function GetAlternativasQuestao($id)
	{
		$sql = "
		SELECT 
			a.id, a.gabarito, a.descricao, q.id questao_id
		FROM 
			{$this->prefix}alternativas a
		JOIN
			{$this->prefix}questoes q
			ON q.id = a.questao_id
			AND q.ativo = TRUE 
		WHERE 
			q.id = :id
			AND a.ativo = TRUE
		ORDER BY 
			random()
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
				'gabarito' => $lista['gabarito'],
				'descricao' => $lista['descricao'],
				'questao_id' => $lista['questao_id']
			);

			$i++;
		}
	}

	function PreparaDados($gabarito, $descricao, $questao_id)
	{
		$this->SetGabarito($gabarito);
		$this->SetDescricao($descricao);
		$this->SetQuestaoId($questao_id);
	}

	function InsereDados()
	{
		$sql = "
		INSERT INTO 
			{$this->prefix}alternativas 
			(gabarito, descricao, data_criacao, ativo, questao_id)
		VALUES
			(:gabarito, :descricao, current_timestamp, TRUE, :questao_id)
		";

		$params = array(
			':gabarito' => $this->GetGabarito(),
			':descricao' => $this->GetDescricao(),
			':questao_id' => $this->GetQuestaoId()
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
			{$this->prefix}alternativas 
		SET 
			gabarito = :gabarito,
			descricao = :descricao
		WHERE 
			id = :id
		";

		$params = array(
			':id' => (int)$id,
			':gabarito' => $this->GetGabarito(),
			':descricao' => $this->GetDescricao()
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
			{$this->prefix}alternativas 
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