<?php

	$dbHost = 'localhost';
	$dbUsername = 'enavsoft_fila';
	$dbName = 'enavsoft_filometro';
    $dbPassword ='filometro@123';

    $conexao = new mysqli($dbHost, $dbUsername, $dbName, $dbPassword);
	if($conexao -> connect_errno)
    {
        echo "Erro!";
    }
    else
    {
        echo "Conexão efetuada com Sucesso!";
    }

?>