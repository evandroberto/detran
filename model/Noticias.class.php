<?php 

Class Noticias extends Conexao
{
	private $titulo, $testo, $slug, $categoria_id, $imagem;

	function __construct()
	{
		parent::__construct();
	}

	///GETTERS
	function GetTitulo()
	{
		return $this->titulo;
	}

	function GetTexto()
	{
		return $this->texto;
	}

	function GetSlug()
	{
		return $this->slug;
	}

	function GetCategoriaId()
	{
		return $this->categoria_id;
	}

	function GetImagem()
	{
		return $this->imagem;
	}

	///SETTERS
	function SetTitulo($titulo)
	{
		$this->titulo = $titulo;
	}

	function SetTexto($texto)
	{
		$this->texto = $texto;
	}

	function SetSlug($slug)
	{
		$this->slug = Sistema::GetSlug($slug);
	}

	function SetCategoriaId($categoria_id)
	{
		$this->categoria_id = $categoria_id;
	}

	function SetImagem($imagem)
	{
		$this->imagem = $imagem;
	}

	///METODOS
	function GetNoticias()
	{
		$sql = "
		SELECT 
			n.id, n.titulo, n.texto, n.data_criacao, n.slug, n.imagem,
			c.id categoria_id, c.nome categoria
		FROM 
			{$this->prefix}noticias n
		JOIN
			{$this->prefix}categorias c
			ON c.id = n.categoria_id
			AND c.ativo = TRUE
		WHERE 
			n.ativo = TRUE
		ORDER BY 
			n.data_criacao DESC
		";

		$sql .= $this->LinksPaginacao($sql);

		$this->ExecutaSQL($sql);
		$this->GetLista();
	}

	function GetNoticiasCategoria($id)
	{
		$sql = "
		SELECT 
			n.id, n.titulo, n.texto, n.data_criacao, n.slug, n.imagem,
			c.id categoria_id, c.nome categoria
		FROM 
			{$this->prefix}noticias n
		JOIN
			{$this->prefix}categorias c
			ON c.id = n.categoria_id
			AND c.ativo = TRUE
		WHERE 
			c.id = :id
			AND n.ativo = TRUE
		ORDER BY 
			n.data_criacao DESC
		";

		$params = array(':id' => (int)$id);

		$sql .= $this->LinksPaginacao($sql, $params);

		$this->ExecutaSQL($sql, $params);
		$this->GetLista();
	}

	function GetNoticiaId($id)
	{
		$sql = "
		SELECT 
			n.id, n.titulo, n.texto, n.data_criacao, n.slug, n.imagem,
			c.id categoria_id, c.nome categoria
		FROM 
			{$this->prefix}noticias n
		JOIN
			{$this->prefix}categorias c
			ON c.id = n.categoria_id
			AND c.ativo = TRUE
		WHERE 
			n.id = :id
			AND n.ativo = TRUE
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
				'titulo' => $lista['titulo'],
				'texto' => $lista['texto'],
				'previa' => substr($lista['texto'], 0, 250),
				'slug' => $lista['slug'],
				'imagem' => $lista['imagem'],
				'imagem_url' => Rotas::ImageLink($lista['imagem'], 400, 400), 
				'imagem_file' => Rotas::GetRoot().'/'.Rotas::GetImagePasta().$lista['imagem'],
				'data_criacao' => $lista['data_criacao'],
				'categoria_id' => $lista['categoria_id'],
				'categoria' => $lista['categoria']
			);

			$i++;
		}
	}

	function PreparaDados($titulo, $texto, $categoria_id, $imagem)
	{
		$this->SetTitulo($titulo);
		$this->SetTexto($texto);
		$this->SetSlug($titulo);
		$this->SetCategoriaId($categoria_id);
		$this->SetImagem($imagem);
	}

	function InsereDados()
	{
		$sql = "
		INSERT INTO 
			{$this->prefix}noticias 
			(titulo, texto, slug, data_criacao, categoria_id, imagem, ativo)
		VALUES
			(:titulo, :texto, :slug, current_timestamp, :categoria_id, :imagem, TRUE)
		";

		$params = array(
			':titulo' => $this->GetTitulo(),
			':texto' => $this->GetTexto(),
			':slug' => $this->GetSlug(),
			':categoria_id' => $this->GetCategoriaId(),
			':imagem' => $this->GetImagem()
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
			{$this->prefix}noticias 
		SET 
			titulo = :titulo,
			texto = :texto,
			slug = :slug,
			categoria_id = :categoria_id,
			imagem = :imagem
		WHERE 
			id = :id
		";

		$params = array(
			':id' => (int)$id,
			':titulo' => $this->GetTitulo(),
			':texto' => $this->GetTexto(),
			':slug' => $this->GetSlug(),
			':categoria_id' => $this->GetCategoriaId(),
			':imagem' => $this->GetImagem()
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
			{$this->prefix}noticias 
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