<?php 
	
	/*********************************************************************************************************/  
	/***Arquivo buscarContrato.php. Utilizado para efetuar a busca de contrato e completar automaticamente **/ 	
	/*******************************************************************************************************/		

	//Inclui a Conexao com o Banco
	include "../STRUTS/Conexao.php";

	#Varíaveis globais que serão usadas para cadastramento 
	SQL(); 
	global $sql; 

	//Cria a consulta que será utilizada
	$consultaContrato = "SELECT num_contrato FROM [REPORT].[dbo].[report_contratos]"; 

 			//Inicia o tratamento da consulta 
 			$listaContratos =  $sql->prepare($consultaContrato);
 			$listaContratos->execute(); //Executa a consulta	
			
			echo json_encode($listaContratos->fetchAll(PDO::FETCH_ASSOC));	


?>