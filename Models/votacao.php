<? 
	//Criando a classe de vota��o 
	class Votacao   {  
		
		private $id; //ID da vota��o
		private $nome; //Nome de quem receber� o voto 
		private $matricula; //Matricula de quem receber� o voto 
		private $funcao; //Fun��o de quem receber� o voto 
		private $ramal; //Ramal de quem receber� o voto 
		private $nota; //Nota de quem recebeu o voto 
		private $motivo; //Motivo da vota��o 
		
		//Cria a fun��o construtora 
		public function __construct() { 

			$this->id = $id; 	
			$this->nome = $nome; 	
			$this->matricula = $matricula; 	
			$this->funcao = $funcao; 	
			$this->ramal = $ramal; 	
			$this->nota = $nota; 	
			$this->motivo = $motivo; 	

		}
	

		
		//Criando os m�todos SETTERS 
		
		
		//ID
		public function setId($id) { 
			$this->id = $id;
		} 

		
		//Nome
		public function setNome($nome) { 
			$this->nome = $nome; 
		} 	

		//Matricula
		public function setMatricula($matricula) { 
			$this->matricula = $matricula;
		} 
		
		
		//Funcao
		public function setFuncao($funcao) { 
			$this->funcao = $funcao;
		} 
		
		//Ramal
		public function setRamal($ramal) { 
			$this->ramal = $ramal; 
		} 
	
	
		//Nota 
		public function setNota($nota) {  
			$this->nota = $nota; 
		} 
		
		//Motivo 
		public function setMotivo($motivo) { 
			$this->motivo = $motivo;
		} 

		
		//Fun��es GETTERS 
		
		//ID 
		public function getId() { 
			return $this->id;
		} 
		
		//Nome 
		public function getNome() { 
			return $this->nome; 
		} 
		
		//Matricula 
		public function getMatricula() { 
			return $this->matricula; 
		} 
		
		//Fun��o 
		public function getFuncao() { 
			return $this->funcao; 
		} 
		
		//Ramal  
		public function getRamal() { 
			return $this->ramal; 
		} 

		//Nota 
		public function getNota() { 
			return $this->nota; 
		} 
		
		//Motivo 
		public function getMotivo() { 
			return $this->motivo; 
		} 
		
		
		//Fun��es de Criar, Atualizar, Deletar e Listar contatos
		
		
		
		
		
		
		
		
	} 


?>