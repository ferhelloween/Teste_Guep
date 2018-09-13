<?php 
	
	/************************************************************************************************************/  
	/** Arquivo processa_contrato.php. Utilizado para efetuar a busca de contrato e completar automaticamente **/ 	
	/**********************************************************************************************************/		

	//Inclui a Conexao com o Banco
	include "../STRUTS/Conexao.php";

	#Varíaveis globais que serão usadas para cadastramento 
	SQL(); 
	global $sql; 

	$num_contrato  = filter_input(INPUT_GET, 'contrato', FILTER_SANITIZE_STRING); 
	
		if(!empty($contrato)) {

			$limit = 1;
			$buscaDados = "SELECT num_contrato,operadora,gestora_contrato FROM [REPORT].[dbo].[report_contratos] 
			WHERE num_contrato = :num_contrato LIMIT :limit";
			
			$resultDados = $sql->prepare($buscaDados); //Prepara a consulta 
			$resultDados->bindParam(':num_contrato',$contrato,PDO::PARAM_STR); 
			$resultDados->bindParam(':limit',$limit,PDO::PARAM_INT); 
			$resultDados->execute(); //Executa a consulta 

			$array_valores = array();

			if($resultDados->rowCount() != 0) { 
				$row_contrato = $resultDados->fetch(PDO::FETCH_ASSOC); 
				$array_valores['operadora'] = $row_contrato['operadora']; 
				$array_valores['gestora_contrato'] = $row_contrato['gestora_contrato'];

			} else {
				$array_valores['operadora']	= 'CONTRATO INEXISTENTE !!!'; 
			}

			echo json_encode($array_valores);
		}

?> 