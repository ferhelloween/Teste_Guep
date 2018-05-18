<!DOCTYPE html> 
	<html lang="pt"> 
		<head>
			<title>Recursos de Destaque</title> 
			<meta charset="utf-8"> 
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
			<!--CSS Bootstrap e Próprios-->
			<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css"/> <!--BootStrap-->
			<link rel="stylesheet" type="text/css" href="CSS/newPages.css"/><!--CSS Adicional-->
		
			<!--Bootstrap JS--> 
			<script type="text/javascript" charset="utf-8" src="JS/jquery-1.11.1.min.js"></script> 
			<script type="text/javascript" charset="utf-8" src="JS/bootstrap.min.js"></script> 
		</head>	


		<body> 
			
			<h2 style="color: #BD0000; margin-left: 15px;">Cadastro de usuários</h2> 
			<form> 
				<!--Nome do Colaborador -->
				<div class="form-group" style="margin-left: 15px;"> 
					 <label for="nome">Nome:</label>
					<input type="text" class="form-control" style="width: 500px;" id="nome">
				</div>
				
				<!--Matrícula do colaborador-->
				<div class="form-group" style="margin-left: 15px;"> 
					 <label for="matricula">Matricula:</label>
					<input type="text" class="form-control" style="width: 250px;" id="matricula">
				</div>
				
				<!--Função do colaborador-->
				<div class="form-group" style="margin-left: 15px;"> 
					 <label for="funcao">Nome:</label>
					<input type="text" class="form-control" style="width: 250px;" id="funcao">
				</div>
				
				<!--Ramal do colaborador-->
				<div class="form-group" style="margin-left: 15px;"> 
					 <label for="ramal">Ramal:</label>
					<input type="text" class="form-control" style="width: 250px;" id="ramal">
				</div>
				
				<!--Macrocélula do colaborador-->
				<div class="form-group" style="margin-left: 15px;"> 
					 <label for="macrocelula">Macrocélula:</label>
					<select class="form-control" style="width: 100px;" id="macrocelula"> 
						<option>CGR</option>
						<option>ENG</option>
					</select>
				</div>
				
				<!--Macrocélula do colaborador-->
				<div class="form-group" style="margin-left: 15px;"> 
					 <label for="nivel">Nível de acesso:</label>
					<select class="form-control" style="width: 250px;" id="nivel"> 
						<option>1-Admin</option>
						<option>2-Leitura</option>
					</select>
				</div>
				<br>
				<div style="margin-left: 15px;">
					<button type="submit" class="btn btn-danger btn-lg">Cadastrar</button>
					<button type="reset" class="btn btn-danger btn-lg">Limpar</button>
				</div>
				
			</form>	
			<br><br><br>
			
		</body> 
	</html>
		