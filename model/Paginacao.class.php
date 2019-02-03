<?php 

Class Paginacao extends Conexao 
{
	public $limite, $inicio, $paginas;
	public $links = array();

	function GetPaginacao($sql, $params=null)
	{
		if (isset($params))
		{
			$this->ExecutaSQL($sql, $params);
		}
		else 
		{
			$this->ExecutaSQL($sql);
		}

		$total = $this->TotalDados();

		$p = (int)isset($_GET['p']) ? $_GET['p'] : 1;

		if ($p > $total)
		{
			$p = $total;
		}

		$this->limite = Config::LIMIT_PAG;
		$this->inicio = ($p * $this->limite) - $this->limite;
		$this->paginas = ceil($total / $this->limite);

		$tolerancia = 1;
		$mostrar = $p + $tolerancia;

		if ($mostrar > $this->paginas)
		{
			$mostrar = $this->paginas;
		}

		for ($i = ($p - $tolerancia); $i <= $mostrar; $i++)
		{
			if ($i < 1)
			{
				$i = 1;
			}
			array_push($this->links, $i);
		}
	}
}

?>