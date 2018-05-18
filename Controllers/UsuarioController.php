<? 
	
	//Incluindo usuarios.php
	require_once "../Models/usuarios.php";
	
	/**
	* Responsável por gerenciar o fluxo de dados entre
	* a camada de modelo e a de visualização
	*  
	* 
	* Camada - Controladores ou Controllers
	* Diretório Pai - controllers
	* Arquivo - UsuarioController.php
	*
	*/


	class UsuarioController { 
		
		/**
		* Efetua a manipulação dos modelos necessários
		* para a aprensentação da lista de contatos
		*/
	
		public function listarUsuarioAction() { 
			
			$o_usuario = new usuarios(); 
		
			//Lista usuários cadastrados 
			$v_usuarios = $o_usuario->listarUsuarios(); 
			
			//definie qual o arquivo HTML que será usado para mostrar a lista de usuários 
			$usr_view = new View('Views/tabUsers.php'); 
			
			//Passando os dados para a view 
			$usr_view->setParams(array('v_usuarios' => $v_usuarios)); 
			
			//Imprime código HTML 
			$usr_view->showContents(); 
		}
	
	
	
	}

?> 