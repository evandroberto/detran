<?php

header('Content-Type: application/json');

$response = array();

if (isset($_POST['id']))
{
	$id = $_POST['id'];

	$save = new Competencias();

	if ($save->ExcluiDados($id))
	{
		$response['status']  = 'TRUE';
	}
	else 
	{
		$response['status']  = 'FALSE';
	}

	echo json_encode($response);
}