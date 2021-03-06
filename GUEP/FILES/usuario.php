<?php 

	
	/**
	* Classe usuário 
	*/
	class Usuario
	{
		
		private $id; //Id do usuário 
		private $nome; //Nome do usuário 
		private $sobrenome; //Sobrenome do usuário 
		private $grupos; //Grupos do usuário 
		private $data_de_criacao; //Data de criação 
		private $data_de_atualizacao; //Data de atualização 

	
		//\recebe o resultSet com os dados da tabela 
		public function setDataFromRS($resultSet) { 
			$this->id = $resultSet["ID"]; 
			$this->nome = $resultSet["NOME"];
			$this->sobrenome = $resultSet["SOBRENOME"];
			$this->grupos = $resultSet["GRUPO"];
			$this->data_de_criacao = $resultSet["DATA_DE_CRIACAO"];
			$this->data_de_atualizacao = $resultSet["DATA_DE_ATUALIZACAO"];

		}

		/*Funções Setters*/		
		
		##ID		
		public function setID($id){ 
			$this->id = $id; 	
			return TRUE;
		} 		
		
		##Nome
		public function setNome($nome){
			if(strlen($nome) < 3 || strlen($nome) > 50)
			return FALSE; 
			
			$this->nome = $nome; 
			return TRUE; 	
	
		}	
	
		##Sobrenome
		public function setNomeCompleto($sobrenome){
			if(strlen($sobrenome) < 3 || strlen($sobrenome) > 100)
			return FALSE; 
			
			$this->sobrenome = $sobrenome; 
			return TRUE; 	
	
		}	
			
		
		##Grupos 
		public function setGrupos($grupos) {			
			
			if($grupos == "") 			
			return FALSE;
			
			$this->grupos = $grupos; 	
			return TRUE; 
	   }
	   
	
		public function setDataCriacao ($data_de_criacao) { 
			$this->data_de_criacao = $data_de_criacao;
			return TRUE;		
		}		   
	   
	   public function setDataAtualizacao ($data_de_atualizacao) { 
			$this->data_de_atualizacao = $data_de_atualizacao;
			return TRUE;
		}
		
	
		/*Funções Getters */	
	
		public function getID() {
			return $this->id; 	
		}	
		
		public function getNome() {
			return $this->nome;
		}
		
		public function getSobreNome() {		
			return $this->sobrenome; 	
		}
		
		public function getGrupos() {
			return $this->grupos;	
		}			
		
		public function getDataCriacao() {
			return $this->data_de_criacao;
		} 
		
		public function getDataAtualizacao() {
			return $this->data_de_atualizacao;	
		}		
		
	} //Fim da classe				
?>	
