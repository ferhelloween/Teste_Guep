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
		
			<h2 style="color: #BD0000; margin-left: 15px;">Avaliação de colaborador</h2> 
			<form>			
				<div class="form-group" style="margin-left: 15px;"> 
					 <label for="nome">Nome:</label>
					<input type="text" class="form-control" style="width: 500px;" id="nome">
				</div>
				
				<div class="form-group" style="margin-left: 15px;"> 
					 <label for="matricula" >Matricula:</label>
					<input type="text" class="form-control" style="width: 200px;" id="matricula">
				</div>
				
				<div class="form-group" style="margin-left: 15px;"> 
					 <label for="funcao">Função:</label>
					<input type="text" class="form-control" style="width: 200px;" id="funcao">
				</div>
				
				<div class="form-group" style="margin-left: 15px;"> 
					 <label for="ramal" >Ramal:</label>
					<input type="text" class="form-control" style="width: 200px;" id="ramal">
				</div>

				<div class="form-group" style="margin-left: 15px;"> 
					 <label for="nota">Nota:</label>
					<select class="form-control" style="width: 75px;" id="nota"> 
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
	
				<div class="form-group" style="margin-left: 15px;"> 
					 <label for="motivo">Motivo:</label>
					<textarea class="form-control" style="width: 500px;"  id="motivo"></textarea>
				</div>
				
				<div style="margin-left: 15px;">
					<button type="submit" class="btn btn-danger btn-lg">Enviar</button>
					<button type="reset" class="btn btn-danger btn-lg">Limpar</button>
				</div>
			</form> 
		</body> 
		
		
</html> 
