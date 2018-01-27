<?php 

	//Criando a conexão com o banco de dados 
	//Cria as variáveis 
	$username = 'guep'; 
	$password = 'guep1234'; 
	
	try {
		$conn = new PDO('mysql:host=localhost;dbname=GUEP', $username, $password);
		 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $e) {
   		 echo 'ERROR: ' . $e->getMessage();
			}	

?> 

