<?php

	$dbHost = 'localhost';
	$dbUsername = 'enavsoft_fila';
    $dbPassword ='filometro@123';
	$dbName = 'enavsoft_filometro';
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
    
//Teste de Conexão

//	if($conexao->connect_errno)
//    {
//        echo "Erro!";
//    }
//    else
//    {
//        echo "Conexão efetuada com Sucesso!";
//    }

?>