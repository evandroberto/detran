<?php 

Class Categorias extends Conexao
{
	private $nome, $slug;

	///GETTERS
	function GetNome()
	{
		return $this->nome;
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

	function SetSlug($slug)
	{
		$this->slug = Sistema::GetSlug($slug);
	}

	///METODOS
	function GetCategorias()
	{
		$sql = "
		SELECT 
			c.id, c.nome, c.slug
		FROM 
			{$this->prefix}categorias c
		WHERE 
			c.ativo = TRUE
		ORDER BY 
			c.nome ASC
		";

		$this->ExecutaSQL($sql);
		$this->GetLista();
	}

	function GetCategoriaId($id)
	{
		$sql = "
		SELECT 
			c.id, c.nome, c.slug
		FROM 
			{$this->prefix}categorias c
		WHERE 
			c.id = :id
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
				'slug' => $lista['slug']
			);

			$i++;
		}
	}

	function PreparaDados($nome)
	{
		$this->SetNome($nome);
		$this->SetSlug($nome);
	}

	function InsereDados()
	{
		$sql = "
		INSERT INTO 
			{$this->prefix}categorias 
			(nome, slug, data_criacao, ativo)
		VALUES
			(:nome, :slug, current_timestamp, TRUE)
		";

		$params = array(
			':nome' => $this->GetNome(),
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

	function AtualizaDados($id)
	{
		$sql = "
		UPDATE 
			{$this->prefix}categorias 
		SET 
			nome = :nome,
			slug = :slug
		WHERE 
			id = :id
		";

		$params = array(
			':id' => (int)$id,
			':nome' => $this->GetNome(),
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
			{$this->prefix}categorias 
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