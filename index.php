<? 
	/****************** 
	Novo projeto de Recurso de Destaque
	Desenvolvedores - Equipe de governança CGR TIVIT
	Inicio do Projeto em 14/05/2018 
	****************/

	//Nome do arquivo index.php 
	
	//configurand o PHP para mostrar os erros na tela 
	ini_set('display_errors', 1);

	echo "<title>Recurso de destaque V2</title>";
	
	//echo "Em desenvolvimento"; 
	
	require_once 'lib/App.php'; 	
	$o_App = new App(); 
	$o_App->dispatch(); 


?> 