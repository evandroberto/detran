<?php 

Class Conexao extends Config  
{
	private $host, $name, $user, $pwd;

	protected $obj, $itens = array(), $prefix;

	public $limite, $inicio, $paginas, $links;

	function __construct()
	{
		$this->host   = self::DB_HOST;
		$this->name   = self::DB_NAME;
		$this->user   = self::DB_USER;
		$this->pwd    = self::DB_PWD;
		$this->prefix = self::DB_PREFIX;

		try 
		{
			if ($this->ConectaDB() == null)
			{
				$this->ConectaDB();
			}
		} 
		catch (Exception $e) 
		{
			exit($e->getMessage());
		}
	}

	private function ConectaDB()
	{
		$options = array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
		);

		$link = new PDO("pgsql:host={$this->host};dbname={$this->name}", $this->user, $this->pwd, $options);

		return $link;
	}

	function ExecutaSQL($query, array $params = null)
	{
		$this->obj = $this->ConectaDB()->prepare($query);

		if (count($params) > 0)
		{
			foreach ($params as $key => $value)
			{
				$this->obj->bindvalue($key, $value);
			}
		}

		return $this->obj->execute();
	}

	function ListaDados()
	{
		return $this->obj->fetch(PDO::FETCH_ASSOC);
	}

	function TotalDados()
	{
		return $this->obj->rowCount();
	}

	function Itens()
	{
		return $this->itens;
	}

	function LinksPaginacao($sql, $params=null)
	{
		$pag = new Paginacao();
		$pag->GetPaginacao($sql, $params);

		$this->paginas = $pag->paginas;
		$this->limite = $pag->limite;
		$this->inicio = $pag->inicio;
		$this->links = $pag->links;

		if ($this->paginas > 0)
		{
			return "LIMIT {$this->limite} OFFSET {$this->inicio}";
		}
		else {
			return "";
		}
	}

	protected function CriaPaginacao($paginas = array())
	{
		$pag  = '<ul class="cta-button pagination">';

		foreach ($paginas as $p)
		{
			$pag .= '<li><a href="?p='. $p .'" class="button">'. $p .'</a></li>';
		}

		$pag .= '</ul>';

		if ($this->paginas > 1)
		{
			return $pag;
		}
	}

	function MostraPaginacao()
	{
		return $this->CriaPaginacao($this->links);
	}
}

?>