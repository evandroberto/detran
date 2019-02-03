<?php 

Class DisciplinasAvaliacao extends Conexao
{
	private $avaliacao_id, $disciplina_id, $questoes;

	function __construct()
	{
		parent::__construct();
	}

	///GETTERS
	function GetAvaliacao()
	{
		return $this->avaliacao_id;
	}

	function GetDisciplina()
	{
		return $this->disciplina_id;
	}

	function GetQuestoes()
	{
		return $this->questoes;
	}

	///SETTERS
	function SetAvaliacao($avaliacao_id)
	{
		$this->avaliacao_id = $avaliacao_id;
	}

	function SetDisciplina($disciplina_id)
	{
		$this->disciplina_id = $disciplina_id;
	}

	function SetQuestoes($questoes)
	{
		$this->questoes = $questoes;
	}

	///METODOS
	function PreparaDados($avaliacao_id, $disciplina_id, $questoes)
	{
		$this->SetAvaliacao($avaliacao_id);
		$this->SetDisciplina($disciplina_id);
		$this->SetQuestoes($questoes);
	}

	function InsereDados()
	{
		$sql = "
		INSERT INTO 
			{$this->prefix}disciplinas_avaliacao 
			(questoes, disciplina_id, avaliacao_id, data_criacao)
		VALUES
			(:questoes, :disciplina_id, :avaliacao_id, current_timestamp)
		";

		$params = array(
			':questoes' => $this->GetQuestoes(),
			':disciplina_id' => $this->GetDisciplina(),
			':avaliacao_id' => $this->GetAvaliacao()
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

	function ExcluiDados($avaliacao_id)
	{
		$sql = "
		DELETE FROM
			{$this->prefix}disciplinas_avaliacao 
		WHERE 
			avaliacao_id = :avaliacao_id
		";

		$params = array(
			':avaliacao_id' => (int)$avaliacao_id
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