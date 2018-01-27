<?php 
	//Arquivo index.php 
	
	$dataAt = date('d/m/Y H:i:s'); //Cria a variavel de data/hora 
	
	
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
			<h2>Cadastro de Usuários</h2>
			
		</div> 	
		
		<form class="form-horizontal" id="formulario-usuario" method="POST" action="FILES/gerencia-registos.php?registrar">	
	
		<!--Nome-->
		<div class="form-group">
			<label class="control-label col-sm-2" for="nome">Nome:</label>
			<div class="col-sm-10">			
				<input type="text"  name="txtNome" id="nome"/>
				<span class='mes-erro mes-nome'></span> 
			</div>	
		</div>
		<!--Fim-->

		<!--SobreNome--> 
		<div class="form-group">	
			<label class="control-label col-sm-2" for="sobrenome">Sobrenome:</label>  
			<div class="col-sm-10">	
				<input type="text" name="txtSobreNome" id="sobrenome"/>
				<span class='mes-erro mes-sobrenome'></span>	
			</div>			
		</div>		
		 
		<!--Fim-->

		<!--Grupo--> 
		<div class="form-group">	
			<label class="control-label col-sm-2" for="grupo">Grupo:</label>
				<div class="col-sm-10">							
				<select multiple="multiple" name="txtGrupo[]" id="grupo"> 
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
				<button type="submit" class="btn btn-default">Registrar</button>
				<button type="reset" class="btn btn-default">Limpar</button>			
			</div>			
		</div>		
		

	</form>
	<!--Fim do formulário-->
	<br>
	
	<div class="container text-center">		
		<h3>Usuários</h3>
	</div>	
	
	<!--Tabela-->
	<table class="table table-bordered table-striped">
		
		<!--Títulos-->		
		<tr>	
			<th>Nome</th>
			<th>Sobrenome</th>
			<th>Grupos</th>
			<th>Visuaalizar</th>		
		</tr>
		<!--Fim--> 
	
		<!--Resultados-->
		<?php 		
			//Cria a consulta para exibir os resultados na tela 
		 /*	$consulta = "SELECT * FROM 'Usuario'"; 
			
			//Executa a consulta 
			$result = $conn->exec($consulta);
				while(!$result->EOF) {
				
					$id = $result->Fields['ID']->Value;
					$nome = $result->Fields['NOME']->Value; 
					$sobrenome = $result->Fields['SOBRENOME']->Value; 
					$grupos = $result->Fields['GRUPO']->Value; 

				//Exibe o resultado na Tela 
			
			echo "	
		*/ 
		?>	
		<tr> 
			<td><!--.$nome.--></td>
			<td><!--.$sobrenome.--></td>
			<td><!--.$grupos."--></td>
			<td><button class='tn btn-primary btn-md' data-toggle='modal' data-target='#myModal' id='btninfo'>Abrir</button></td>
		</tr> 
		<!--Fim-->
			
	
	
		<!--Criando o modal para abrir o campo de alteração-->	
	<div id="myModal<?php echo $id;?>" class="modal fade" role="dialog">		
		<div class="modal-dialog">
			
				<!-- Modal content -->
				<div class="modal-content">
					<!--Cabeçalho--> 
					<div class="modal-header" style="background-color: #666562; padding: 2px 16px; color: #FFFFF">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h2>Dados do registro</h2>
						<h5>Id de número: <? echo $id; ?> </h5>
					</div>
					
					<!--Corpo-->
					<div class="modal-body">
						<iframe src="alt_usuario.php?id=<?echo $id;?>" style="width: 900px; height: 450px;  "></iframe>
					</div>
			
					<!--Rodapé-->
					<div class="modal-footer" style="background-color: #666562; padding: 2px 16px; color: #FFFFF">
						<h3 style="text-align: left">GUEP</h3>
					</div>
				</div>
			
			</div>
	
	</div>	
	
	<!--<? 
		//$result ->MoveNext();
		//} 
	?>-->
	</table>
	<!--Fim da Tabela-->
	
</body>
</html>
