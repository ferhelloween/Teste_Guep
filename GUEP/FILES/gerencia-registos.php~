<?php 
	
	include "conexao.php"; //Inclui o arquivo de conexao 
	include_once("usuario.php"); //Inclui o arquivo de usuários 
	
	if($_POST["action"] == "registrar") { 
		
		$novoUsuario = new Usuario();  	
		$errorMsg = FALSE; 
		
		if (!$novoUsuario->setNome($_POST["txtNome"])) { 
			$errorMsg = "O nome deve conter entre 3 e 50 caracterres"; 
		} 
		else if (!$novoUsuario->setNomeCompleto($_POST["txtSobreNome"]) { 
			$errorMsg = "O sobrenome deve conter entre 3 e 100 caracteres"; 		
		}
		else if (!$novoUsuario->setGrupos[$_POST["txtGrupo"]]) { 
			$errorMsg = "Favor escolher dois grupos"; 		
		} 
		
		if($errorMsg == FALSE ) {
			$sql = "INSERT INTO 'Usuario' (NOME,SOBRENOME,GRUPO,DATA_DA_CRIACAO)
			VALUES (
			'".$novoUsuario->getNome()."',		 
			'".$novoUsuario->getSobreNome()."', 
			'".$novoUsuario->getGrupos()."', 
			'".$novoUsuario->getDataCriacao()."'
			)"; 
			
			//echo $sql;			
			
			//Executa o insert 
			$result = $conn->exec($sql);	
			echo "<p>Registro cadastrado com sucesso!!!</p>"; 
			echo "<A href='../index.php'>Clique aqui para inserir um novo registro.</a> " 
			
			catch(PDOException $e)
   		 {
  				  echo $sql . "<br>" . $e->getMessage();
  			  }

				$conn = null;
			 
	}
		else {
			echo "<B>".$errorMsg."</B><BR>";	
		}
	}
	if($_POST["action"] == "alterar") { 
	
		$id = $_REQUEST["txtCodigo"];
		
		$novoUsuario = new Usuario();  	
		$errorMsg = FALSE; 
		
		if (!$novoUsuario->setNome($_POST["txtNome"])) { 
			$errorMsg = "O nome deve conter entre 3 e 50 caracterres"; 
		} 
		else if (!$novoUsuario->setNomeCompleto($_POST["txtSobreNome"]) { 
			$errorMsg = "O sobrenome deve conter entre 3 e 100 caracteres"; 		
		}
		else if (!$novoUsuario->setGrupos[$_POST["txtGrupo"]]) { 
			$errorMsg = "Favor escolher dois grupos"; 		
		} 
		
		if($errorMsg == FALSE ) {
			$sql = "UPDATE UPDATE `Usuario` SET ";
			$sql .= "NOME ='".$novoUsuario->getNome()."',";
			$sql .= "SOBRENOME ='".$novoUsuario->getSobreNome()."',";
			$sql .= "GRUPO ='".$novoUsuario->getGrupos()."',";
			$sql .= "DATA_DA_ATUALIZACAO ='".$novoUsuario->getDataAtualizacao()."'";
			$sql .= "WHERE ID = '".$id."'";
		}
?> 