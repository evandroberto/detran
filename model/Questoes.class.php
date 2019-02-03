<?php 

Class Questoes extends Conexao
{
	private $enunciado, $justificativa, $dificuldade, $proficiencia, $imagem; 
	private $perfil_id, $disciplina_id, $competencia_id, $avaliacao_id;

	function __construct()
	{
		parent::__construct();
	}

	///GETTERS
	function GetEnunciado()
	{
		return $this->enunciado;
	}

	function GetJustificativa()
	{
		return $this->justificativa;
	}

	function GetDificuldade()
	{
		return $this->dificuldade;
	}

	function GetProficiencia()
	{
		return $this->proficiencia;
	}

	function GetImagem()
	{
		return $this->imagem;
	}

	function GetPerfilId()
	{
		return $this->perfil_id;
	}

	function GetDisciplinaId()
	{
		return $this->disciplina_id;
	}

	function GetCompetenciaId()
	{
		return $this->competencia_id;
	}

	function GetAvaliacaoId()
	{
		return $this->avaliacao_id;
	}

	///SETTERS
	function SetEnunciado($enunciado)
	{
		$this->enunciado = $enunciado;
	}

	function SetJustificativa($justificativa)
	{
		$this->justificativa = $justificativa;
	}

	function SetDificuldade($dificuldade)
	{
		$this->dificuldade = $dificuldade;
	}

	function SetProficiencia($proficiencia)
	{
		$this->proficiencia = $proficiencia;
	}

	function SetImagem($imagem)
	{
		$this->imagem = $imagem;
	}

	function SetPerfilId($perfil_id)
	{
		$this->perfil_id = $perfil_id;
	}

	function SetDisciplinaId($disciplina_id)
	{
		$this->disciplina_id = $disciplina_id;
	}

	function SetCompetenciaId($competencia_id)
	{
		$this->competencia_id = $competencia_id;
	}

	function SetAvaliacaoId($avaliacao_id)
	{
		$this->avaliacao_id = $avaliacao_id;
	}

	///METODOS
	function GetQuestoes()
	{
		$sql = "
		SELECT
			q.id, q.enunciado, q.justificativa, q.dificuldade, q.proficiencia, q.imagem,
			d.id disciplina_id, d.sigla disciplina_sigla, d.nome disciplina, 
			c.id curso_id, c.sigla curso_sigla, c.nome curso,
			p.id perfil_id, p.codigo perfil_codigo, p.nome perfil, 
			cp.id competencia_id, cp.codigo competencia_codigo, cp.nome competencia,
			a.id avaliacao_id, a.sigla avaliacao_sigla, a.nome avaliacao
		FROM
			{$this->prefix}questoes q
		JOIN
			{$this->prefix}disciplinas d
			ON d.id = q.disciplina_id
			AND d.ativo = TRUE
		JOIN
			{$this->prefix}cursos c
			ON c.id = d.curso_id
			AND c.ativo = TRUE
		JOIN
			{$this->prefix}perfis p
			ON p.id = q.perfil_id
			AND c.id = p.curso_id
			AND p.ativo = TRUE
		JOIN
			{$this->prefix}competencias cp
			ON cp.id = q.competencia_id
			AND c.id = cp.curso_id
			AND cp.ativo = TRUE
		JOIN
			{$this->prefix}avaliacoes a
			ON a.id = q.avaliacao_id
			AND c.id = a.curso_id
			AND a.ativo = TRUE
		WHERE
			q.ativo = TRUE
		";

		$sql .= $this->LinksPaginacao($sql);

		$this->ExecutaSQL($sql);
		$this->GetLista();
	}

	function GetQuestoesCurso($id)
	{
		$sql = "
		SELECT
			q.id, q.enunciado, q.justificativa, q.dificuldade, q.proficiencia, q.imagem,
			d.id disciplina_id, d.sigla disciplina_sigla, d.nome disciplina, 
			c.id curso_id, c.sigla curso_sigla, c.nome curso,
			p.id perfil_id, p.codigo perfil_codigo, p.nome perfil, 
			cp.id competencia_id, cp.codigo competencia_codigo, cp.nome competencia,
			a.id avaliacao_id, a.sigla avaliacao_sigla, a.nome avaliacao
		FROM
			{$this->prefix}questoes q
		JOIN
			{$this->prefix}disciplinas d
			ON d.id = q.disciplina_id
			AND d.ativo = TRUE
		JOIN
			{$this->prefix}cursos c
			ON c.id = d.curso_id
			AND c.ativo = TRUE
		JOIN
			{$this->prefix}perfis p
			ON p.id = q.perfil_id
			AND c.id = p.curso_id
			AND p.ativo = TRUE
		JOIN
			{$this->prefix}competencias cp
			ON cp.id = q.competencia_id
			AND c.id = cp.curso_id
			AND cp.ativo = TRUE
		JOIN
			{$this->prefix}avaliacoes a
			ON a.id = q.avaliacao_id
			AND c.id = a.curso_id
			AND a.ativo = TRUE
		WHERE
			c.id = :id
			AND q.ativo = TRUE
		";

		$params = array(':id' => (int)$id);

		$sql .= $this->LinksPaginacao($sql, $params);

		$this->ExecutaSQL($sql, $params);
		$this->GetLista();
	}

	function GetQuestaoId($id)
	{
		$sql = "
		SELECT
			q.id, q.enunciado, q.justificativa, q.dificuldade, q.proficiencia, q.imagem,
			d.id disciplina_id, d.sigla disciplina_sigla, d.nome disciplina, 
			c.id curso_id, c.sigla curso_sigla, c.nome curso,
			p.id perfil_id, p.codigo perfil_codigo, p.nome perfil, 
			cp.id competencia_id, cp.codigo competencia_codigo, cp.nome competencia,
			a.id avaliacao_id, a.sigla avaliacao_sigla, a.nome avaliacao
		FROM
			{$this->prefix}questoes q
		JOIN
			{$this->prefix}disciplinas d
			ON d.id = q.disciplina_id
			AND d.ativo = TRUE
		JOIN
			{$this->prefix}cursos c
			ON c.id = d.curso_id
			AND c.ativo = TRUE
		JOIN
			{$this->prefix}perfis p
			ON p.id = q.perfil_id
			AND c.id = p.curso_id
			AND p.ativo = TRUE
		JOIN
			{$this->prefix}competencias cp
			ON cp.id = q.competencia_id
			AND c.id = cp.curso_id
			AND cp.ativo = TRUE
		JOIN
			{$this->prefix}avaliacoes a
			ON a.id = q.avaliacao_id
			AND c.id = a.curso_id
			AND a.ativo = TRUE
		WHERE
			q.id = :id
			AND q.ativo = TRUE
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
				'enunciado' => $lista['enunciado'],
				'justificativa' => $lista['justificativa'],
				'dificuldade' => $lista['dificuldade'],
				'proficiencia' => $lista['proficiencia'],
				'imagem' => $lista['imagem'],
				'imagem_url' => Rotas::ImageLink($lista['imagem'], 400, 400), 
				'imagem_file' => Rotas::GetRoot().'/'.Rotas::GetImagePasta().$lista['imagem'],
				'curso' => $lista['curso'],
				'curso_id' => $lista['curso_id'],
				'curso_sigla' => $lista['curso_sigla'],
				'perfil' => $lista['perfil'],
				'perfil_id' => $lista['perfil_id'],
				'perfil_codigo' => $lista['perfil_codigo'],
				'disciplina' => $lista['disciplina'],
				'disciplina_id' => $lista['disciplina_id'],
				'disciplina_sigla' => $lista['disciplina_sigla'],
				'competencia' => $lista['competencia'],
				'competencia_id' => $lista['competencia_id'],
				'competencia_codigo' => $lista['competencia_codigo'],
				'avaliacao' => $lista['avaliacao'],
				'avaliacao_id' => $lista['avaliacao_id'],
				'avaliacao_sigla' => $lista['avaliacao_sigla']
			);

			$i++;
		}
	}

	function PreparaDados($enunciado, $justificativa, $dificuldade, $proficiencia, 
		$perfil_id, $disciplina_id, $competencia_id, $avaliacao_id, $imagem)
	{
		$this->SetEnunciado($enunciado);
		$this->SetJustificativa($justificativa);
		$this->SetDificuldade($dificuldade);
		$this->SetProficiencia($proficiencia);
		$this->SetImagem($imagem);
		$this->SetPerfilId($perfil_id);
		$this->SetDisciplinaId($disciplina_id);
		$this->SetCompetenciaId($competencia_id);
		$this->SetAvaliacaoId($avaliacao_id);
	}

	function InsereDados()
	{
		$sql = "
		INSERT INTO 
			{$this->prefix}questoes 
			(enunciado, justificativa, dificuldade, proficiencia, imagem, data_criacao, ativo, 
			 perfil_id, disciplina_id, competencia_id, avaliacao_id)
		VALUES
			(:enunciado, :justificativa, :dificuldade, :proficiencia, :imagem, current_timestamp, TRUE,
			 :perfil_id, :disciplina_id, :competencia_id, :avaliacao_id)
		";

		$params = array(
			':enunciado' => $this->GetEnunciado(),
			':justificativa' => $this->GetJustificativa(),
			':dificuldade' => $this->GetDificuldade(),
			':proficiencia' => $this->GetProficiencia(),
			':imagem' => $this->GetImagem(),
			':perfil_id' => $this->GetPerfilId(),
			':disciplina_id' => $this->GetDisciplinaId(),
			':competencia_id' => $this->GetCompetenciaId(),
			':avaliacao_id' => $this->GetAvaliacaoId()
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
			{$this->prefix}questoes 
		SET 
			enunciado = :enunciado,
			justificativa = :justificativa,
			dificuldade = :dificuldade,
			proficiencia = :proficiencia,
			imagem = :imagem,
			perfil_id = :perfil_id,
			disciplina_id = :disciplina_id,
			competencia_id = :competencia_id,
			avaliacao_id = :avaliacao_id
		WHERE 
			id = :id
		";

		$params = array(
			':id' => (int)$id,
			':enunciado' => $this->GetEnunciado(),
			':justificativa' => $this->GetJustificativa(),
			':dificuldade' => $this->GetDificuldade(),
			':proficiencia' => $this->GetProficiencia(),
			':imagem' => $this->GetImagem(),
			':perfil_id' => $this->GetPerfilId(),
			':disciplina_id' => $this->GetDisciplinaId(),
			':competencia_id' => $this->GetCompetenciaId(),
			':avaliacao_id' => $this->GetAvaliacaoId()
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
			{$this->prefix}questoes 
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