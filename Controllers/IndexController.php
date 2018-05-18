<?php 
	/**
	* Controlador que deverá ser chamado quando não for
	* especificado nenhum outro 
	* 
	* 
	* Camada - Controladores ou Controllers
	* Diretório Pai - controllers 
	* Arquivo - IndexController.php
	*/

	class IndexController { 
		 /**
			* Ação que deverá ser executada quando 
			* nenhuma outra for especificada, do mesmo jeito que o
			* arquivo index.html ou index.php é executado quando nenhum
			* é referenciado
		*/

		public function indexAction()
		{
			require_once("Views/template.php");
			//header("Location: Views/template.php"); 
		} 
	}


?> 