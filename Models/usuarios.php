<? 
	

	require_once ("../Lib/PersistModelAbstract.php");	
	//Inclui a classe de conex�o 
	//include "../DAO/conexao.php"; 
	
	//Usa a fun��o para abrir a conex�o 
	//abreSQL();
	//global $sql; // Variavel global que ser� usada para a conex�o com o SQL; 
		
	//Cria a classe de usu�rios que ser� utilizada 
	
	class usuarios extends PersistModelAbstract { 
		
		private $id; //Id do Funcion�rio
		private $nome; //Nome do Funcion�rio 
		private $matricula; //Matr�cula do funcion�rio 
		private $funcao; //Fun��o do usu�rio 
		private $ramal; //Ramal do funcion�rio 
		private $macroCelula; //MacroCelula do Funcion�rio CGR ou ENG 
		private $nivelAcesso; //N�vel de Acesso a Aplica��o 

		//Cria a fun��o construtora 
		public function __construct() { 

			$this->id = $id; 	
			$this->nome = $nome; 	
			$this->matricula = $matricula; 	
			$this->funcao = $funcao; 	
			$this->ramal = $ramal; 	
			$this->macroCelula = $macroCelula; 	
			$this->nivelAcesso = $nivelAcesso; 	

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

		//Macro C�lula
		public function setMacroCelula($macroCelula) { 
			$this->macroCelula = $macroCelula;
		} 
		
		//N�vel de Acesso 
		public function setNivelAcesso($nivelAcesso) { 
			$this->nivelAcesso = $nivelAcesso; 
		} 
		
		
		
		//Criando os m�todos GETTERS 
		public function getID() { 
			return $this->id; 
		} 
		
		public function getNome() { 
			return $this->nome; 
		} 
		
		public function getMatricula() { 
			return $this->matricula; 
		} 
		
		public function getFuncao() { 
			return $this->funcao; 
		} 
		
		public function getRamal() { 
			return $this->ramal; 
		} 
		
		public function getMacroCelula() { 
			return $this->macroCelula; 
		} 
		
		public function getNivelAcesso() { 
			return $this->nivelAcesso; 
		} 
		
		
		//Fun��es de criar. alterar, deletar e listar 
		/*Cria as fun��es da classe*/  
		
		//Listar os usu�rios 
		public function listarUsuarios($nome = null) { 
			
			//Cria a query que ser� usada 
			$consulta = "SELECT [id],[nome],[matricula],[funcao],[ramal],[macrocelula]
			FROM [Passagem].[dbo].[tb_rec_destaque]";
			
			$v_usuarios = array(); //Cria a lista vazia 
			
				try { 
						$o_data = $this->db->query($consulta); 
						while($o_ret = $o_data->fetchObject()) 
						{
							$o_usuario = new usuarios(); 
							$o_usuario->setId($o_ret->id); //ID
							$o_usuario->setNome($o_ret->nome); //Nome
							$o_usuario->setMatricula($o_ret->matricula); //Matr�cula
							$o_usuario->setFuncao($o_ret->funcao); //Fun��o
							$o_usuario->setRamal($o_ret->ramal); //Ramal
							$o_usuario->setMacroCelula($o_ret->macrocelula); //Macro Celula 
							array_push($v_usuarios,$o_usuario);
						}
					} 
				catch(PDOException $e)
				{ echo "Ocorreu um erro".$e; }               
				
					
			return $v_usuarios; 
		} 
		
				
		//Gravar novo usu�rio
		public function gravarUsuario() { 
			//Busca os dados atribuidos 
			$nome = $usuario->getNome();
			$matricula = $usuario->getMatricula(); 
			$funcao = $usuario->getFuncao(); 
			$ramal = $usuario->getRamal(); 
			$macroCelula = $usuario->getMacroCelula(); 
			
			
			//Cria a variavel que ir� gravar o usu�rio 
			$insertUsuario = "INSERT INTO [dbo].[tb_rec_destaque] ([nome],[matricula],[funcao],[ramal],[macrocelula]) VALUES(";
			$insertUsuario .= "'".$nome."',"; 
			$insertUsuario .= "'".$matricula."',"; 
			$insertUsuario .= "'".$funcao."',"; 
			$insertUsuario .= "'".$ramal."',"; 
			$insertUsuario .= "'".$macroCelula."'"; 
			$insertUsuario .= ")";
			
			
			//Cria a instancia de execu��o da Query 
			
			try { 
				$p_insertUsuario = Conexao::getInstancia()->prepare($insertUsuario);
				//Executa a consulta 
				$p_insertUsuario->execute();  
			} catch(PDOException $e) { 
				throw $e; 
			} 
		} 

		//Alterar usu�rio
		public function alterarUsuario() { 


		} 

		//Deletar novo usu�rio 
		public function deletarUsuario() { 
		
	
		} 	
	
		

	} 
		

?> 