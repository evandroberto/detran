<?php

Class Sistema
{
	static function VoltaPagina()
	{
		echo '<script> function goBack() { window.history.back(); } </script>';
		echo '<button onclick="goBack()" class="btn btn-default">'.
			 '<i class="glyphicon glyphicon-circle-arrow-left" ></i> Voltar </button> ';
	}

	static function GetSlug($string)
	{
		if (is_string($string))
		{
			$string = strtolower(trim(utf8_decode($string)));

			$before = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr';
			$after  = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
			
			$string = strtr($string, utf8_decode($before), $after);

			$replace = array(
				'/[^a-z0-9.-]/' => '-',
				'/-+/' => '-',
				'/\-{2,}/' => ''
			);

			$string = preg_replace(array_keys($replace), array_values($replace), $string);
		}
		return trim(substr($string, 0, 55));
	}
	
	static function Criptografia($valor)
	{
		return hash('SHA512', $valor);
	}
}