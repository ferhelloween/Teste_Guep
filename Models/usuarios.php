<? 
	

	require_once ("../Lib/PersistModelAbstract.php");	
	//Inclui a classe de conexão 
	//include "../DAO/conexao.php"; 
	
	//Usa a função para abrir a conexão 
	//abreSQL();
	//global $sql; // Variavel global que será usada para a conexão com o SQL; 
		
	//Cria a classe de usuários que será utilizada 
	
	class usuarios extends PersistModelAbstract { 
		
		private $id; //Id do Funcionário
		private $nome; //Nome do Funcionário 
		private $matricula; //Matrícula do funcionário 
		private $funcao; //Função do usuário 
		private $ramal; //Ramal do funcionário 
		private $macroCelula; //MacroCelula do Funcionário CGR ou ENG 
		private $nivelAcesso; //Nível de Acesso a Aplicação 

		//Cria a função construtora 
		public function __construct() { 

			$this->id = $id; 	
			$this->nome = $nome; 	
			$this->matricula = $matricula; 	
			$this->funcao = $funcao; 	
			$this->ramal = $ramal; 	
			$this->macroCelula = $macroCelula; 	
			$this->nivelAcesso = $nivelAcesso; 	

		}
	
	
		//Criando os métodos SETTERS 
		
		
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

		//Macro Célula
		public function setMacroCelula($macroCelula) { 
			$this->macroCelula = $macroCelula;
		} 
		
		//Nível de Acesso 
		public function setNivelAcesso($nivelAcesso) { 
			$this->nivelAcesso = $nivelAcesso; 
		} 
		
		
		
		//Criando os métodos GETTERS 
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
		
		
		//Funções de criar. alterar, deletar e listar 
		/*Cria as funções da classe*/  
		
		//Listar os usuários 
		public function listarUsuarios($nome = null) { 
			
			//Cria a query que será usada 
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
							$o_usuario->setMatricula($o_ret->matricula); //Matrícula
							$o_usuario->setFuncao($o_ret->funcao); //Função
							$o_usuario->setRamal($o_ret->ramal); //Ramal
							$o_usuario->setMacroCelula($o_ret->macrocelula); //Macro Celula 
							array_push($v_usuarios,$o_usuario);
						}
					} 
				catch(PDOException $e)
				{ echo "Ocorreu um erro".$e; }               
				
					
			return $v_usuarios; 
		} 
		
				
		//Gravar novo usuário
		public function gravarUsuario() { 
			//Busca os dados atribuidos 
			$nome = $usuario->getNome();
			$matricula = $usuario->getMatricula(); 
			$funcao = $usuario->getFuncao(); 
			$ramal = $usuario->getRamal(); 
			$macroCelula = $usuario->getMacroCelula(); 
			
			
			//Cria a variavel que irá gravar o usuário 
			$insertUsuario = "INSERT INTO [dbo].[tb_rec_destaque] ([nome],[matricula],[funcao],[ramal],[macrocelula]) VALUES(";
			$insertUsuario .= "'".$nome."',"; 
			$insertUsuario .= "'".$matricula."',"; 
			$insertUsuario .= "'".$funcao."',"; 
			$insertUsuario .= "'".$ramal."',"; 
			$insertUsuario .= "'".$macroCelula."'"; 
			$insertUsuario .= ")";
			
			
			//Cria a instancia de execução da Query 
			
			try { 
				$p_insertUsuario = Conexao::getInstancia()->prepare($insertUsuario);
				//Executa a consulta 
				$p_insertUsuario->execute();  
			} catch(PDOException $e) { 
				throw $e; 
			} 
		} 

		//Alterar usuário
		public function alterarUsuario() { 


		} 

		//Deletar novo usuário 
		public function deletarUsuario() { 
		
	
		} 	
	
		

	} 
		

?> 