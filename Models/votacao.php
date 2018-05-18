<? 
	//Criando a classe de votaчуo 
	class Votacao   {  
		
		private $id; //ID da votaчуo
		private $nome; //Nome de quem receberс o voto 
		private $matricula; //Matricula de quem receberс o voto 
		private $funcao; //Funчуo de quem receberс o voto 
		private $ramal; //Ramal de quem receberс o voto 
		private $nota; //Nota de quem recebeu o voto 
		private $motivo; //Motivo da votaчуo 
		
		//Cria a funчуo construtora 
		public function __construct() { 

			$this->id = $id; 	
			$this->nome = $nome; 	
			$this->matricula = $matricula; 	
			$this->funcao = $funcao; 	
			$this->ramal = $ramal; 	
			$this->nota = $nota; 	
			$this->motivo = $motivo; 	

		}
	

		
		//Criando os mщtodos SETTERS 
		
		
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

		
		//Funчѕes GETTERS 
		
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
		
		//Funчуo 
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
		
		
		//Funчѕes de Criar, Atualizar, Deletar e Listar contatos
		
		
		
		
		
		
		
		
	} 


?>