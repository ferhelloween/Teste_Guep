<? 
	include "conexao.php"; 
	
	//Efetua a busca pelo registro 
	$busca = $_REQUEST['id'];
	
	//Realiza a consulta pelo registro 
	$sql = "SELECT * FROM `Usuario` WHERE ID = $busca"; 
	
	//Executa a conexão 
	$result = $conn->exec($sql); 
				
		if($tbl = $result) {
			$codigo = $tbl['ID'];
			$codigo = $tbl['NOME'];
			$codigo = $tbl['SOBRENOME'];
			$codigo = $tbl['GRUPO'];
			$codigo = $tbl['DATA_DA_CRIACAO'];
			$codigo = $tbl['DATA_DA_ATUALIZACAO'];  
		} else {
			 echo "Registro não localizado"; 	
		}
		
	while(!$result->EOF){ 
		$id = $result->Fields['ID']->Value;	
		$nome = $result->Fields['NOME']->Value;	
		$sobrenome = $result->Fields['SOBRENOME']->Value;	
		$grupos = $result->Fields['GRUPO']->Value;	
		$dataCriacao = $result->Fields['DATA_DA_CRIACAO']->Value;	
		$dataAtualizacao = $result->Fields['DATA_DA_ATUALIZACAO']->Value;	
	}	
			
?> 

<!--Bloco HTML-->
<!DOCTYPE html>
<html>
<head>
	<title>Teste GUEP</title>
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script type="text/javascript"src="FILES/validar.js">  </script>
</head>

<body>
	<!--Criação de formulário-->
				
			
		<div class="container text-center" >
			<h2>Alterar Usuário</h2>
			
		</div> 	
		
		<form class="form-horizontal" id="formulario-usuario" method="POST" action="FILES/gerencia-registos.php?registrar">	
	
		<input type="hidden" name="txtCodigo" value = "<?= $id;?>"> 
						
	
		<!--Nome-->
		<div class="form-group">
			<label class="control-label col-sm-2" for="nome">Nome:</label>
			<div class="col-sm-10">			
				<input type="text"  name="txtNome" id="nome" value="<?= $nome; ?>"/>
				<span class='mes-erro mes-nome'></span> 
			</div>	
		</div>
		<!--Fim-->

		<!--SobreNome--> 
		<div class="form-group">	
			<label class="control-label col-sm-2" for="sobrenome">Sobrenome:</label>  
			<div class="col-sm-10">	
				<input type="text" name="txtSobreNome" id="sobrenome" value="<?= $sobrenome; ?>"/>
				<span class='mes-erro mes-sobrenome'></span>	
			</div>			
		</div>		
		 
		<!--Fim-->

		<!--Grupo--> 
		<div class="form-group">	
			<label class="control-label col-sm-2" for="grupo">Grupo:</label>
				<div class="col-sm-10">							
				<select multiple="multiple" name="txtGrupo[]" id="grupo"> 
					<option value="<?=$grupos;?>"><? =$grupos;?></option>
					<option value="Grupo A">Grupo A</option>	
					<option value="Grupo B">Grupo B</option>
					<option value="Grupo C">Grupo C</option>
					<option value="Grupo D">Grupo D</option>
					<option value="Grupo E">Grupo E</option>
					<option value="Grupo F">Grupo F</option>
				</select> 
				<span class='mes-erro mes-grupos'></span>
				</div>
		</div>
		
		
		<!--Data da Criação-->	
		<input type="hidden" name="txtData" id="data" value="<?=$dataAt?>"> 
		
		<!--Botoẽs-->	
		<div class="form-group"> 
			 <div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default">Alterar</button>
							
			</div>			
		</div>		
		

	</form>
	<!--Fim do formulário-->
