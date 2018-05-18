<?php  

	require_once "../Models/usuarios.php";
	require_once "../Controllers/UsuarioController.php";
	
	$v_params = $this->getParams();
	$v_usuarios = $v_params['v_usuarios'];	

	?> 

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
			<br>
			<!--Tabela onde serão colocados os dados-->		
			<h2 style="color: #BD0000; margin-left: 15px;">Lista de colaboradores</h2> 
			<table class="table table-striped table-bordered"> 
				<thead> 
					<tr> 
						<th>Nome</th>
						<th>Matricula</th>
						<th>Função</th>
						<th>Ramal</th>
						<th>Macrocélula</th>
						<th>Info+</th>
						<th>Alterar</th>
						<th>Excluir</th>
					</tr>
				</thead> 
				<?php 
					foreach ($v_usuarios as $o_usuario) { 
				?>
				<tbody>
					<tr> 
						<td> 
							<?php echo $o_usuario->getNome(); ?>
						</td> 
						
						<td> 
							<?php echo $o_usuario->getMatricula(); ?>
						</td> 
					
						<td> 
							<?php echo $o_usuario->getFuncao(); ?>
						</td> 
						
						<td> 
							<?php echo $o_usuario->getRamal(); ?>
						</td> 
						
						<td> 
							<?php echo $o_usuario->getMacroCelula(); ?>
						</td> 
						
						<td> 
							
						</td> 
							
						<td> 
							
						</td> 
						
						<td> 
							
						</td> 
				<?php 
					}
				?>
					</tr>
				</tbody>	
			</table> 
		</body> 
	</html>	