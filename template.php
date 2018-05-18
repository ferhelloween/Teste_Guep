<?php 

?> 
<!DOCTYPE html> 
	<html lang="pt"> 
		<head>
			<title>Recursos de Destaque</title> 
			<meta charset="windows-1252"> 
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
			<!--CSS Bootstrap e Próprios-->
			<link rel="stylesheet" type="text/css" href="Views/CSS/bootstrap.min.css"/> <!--BootStrap-->
			<link rel="stylesheet" type="text/css" href="Views/CSS/newPages.css"/><!--CSS Adicional-->
		
			<!--Bootstrap JS--> 
			<script type="text/javascript" charset="utf-8" src="Views/JS/jquery-1.11.1.min.js"></script> 
			<script type="text/javascript" charset="utf-8" src="Views/JS/bootstrap.min.js"></script> 
			
			<script type="text/javascript">
				/*Função de data/hora da página */
			
				function startTime() {
					var today=new Date();
					var h=today.getHours();
					var m=today.getMinutes();
					var s=today.getSeconds();
   
					// add a zero in front of numbers<10
					m=checkTime(m);
					s=checkTime(s);
					document.getElementById('timePage').innerHTML=h+":"+m+":"+s;
					t=setTimeout('startTime()',500);
					}

					function checkTime(i){
						if (i<10) {
							i="0" + i;
						}
					return i;
				}/*Função de data/hora da página */
			
		</script>
			
			
		</head>	
		
		<body onload="startTime()"> 
			<div class="topo">
				<div class="topNav">
					<div class="fig1">
						<img  class="fig1"src="Views/IMG/TIVIT.png" alt="CETEC 27" width = "170" height="60">
					</div>
					<p>Recurso de Destaque</p>
					<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
					<a href="#inicio" id="inicio">Início</a>
					<a href="#contato" id="contato">Contato</a>
					<a href="#ajuda" id="ajuda">Ajuda</a>
					<a href="#cadastro" id="cadastro">Cadastrar Usuários</a>
					<a href="#cadastro" id="gerencia">Gerenciar Usuários</a>
					<a href="#historico" id="historico">Histórico</a>
					<div class="fig2"> 
						<img src="Views/IMG/TIVIT.png" alt="TIVIT" width = "170" height="60">
					</div>
					
					
				</div>
				
			</div>	
		
			<br>
				
			<div class="corpo"> 
				<!--Menu Lateral -->
				<div id="meuMenuLateral" class="menuLateral"> 
					<a href="#" id="avaliar">
						Avaliar Colaborador&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-pencil" style="font-size:20px; color:#B22222;"></i>
					</a>
					
					<a href="#" id="visualizar">
						Visualizar Notas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-columns" style="font-size:20px; color:#B22222;"></i>
					</a>
				</div> 
				
				<div id="container" style="margin-left: 250px;"> 
					
					
					<script> 
						$(document).ready(function() {
							//Padrão - Principal		
     						$("#container").load("Views/inicial.php"); 	
							
							/*Opções para menu superior*/
							
							//Caso pressione a opção inicio
							$("#inicio").click(function() { 
								$("#container").load("Views/inicial.php"); 
						});
									
							//Caso pressione a opção ajuda
							$("#ajuda").click(function() { 
								$("#container").load("Views/ajuda.php"); 
						});	
						
							//Caso pressione a opção cadastro
							$("#cadastro").click(function() { 
								$("#container").load("Views/cadUsers.php"); 
						});	
						
							//Caso pressione a opção gerencia
							$("#gerencia").click(function() { 
								$("#container").load("Views/tabUsers.php"); 
						});	
						

							/*Opções para menu lateral*/
								
							//Caso pressione a opção avaliar
							$("#avaliar").click(function() { 
								$("#container").load("Views/notas.php"); 
						});
							//Caso pressione a opção visualizar
							$("#visualizar").click(function() { 
								$("#container").load("Views/tabNotas.php"); 
						});
							
						
						
						
						
					});		
					</script> 
				</div>
			</div> 

			<!--Rodapé da página-->
			<div class="rodape"> 
		
				<p>TIVIT</p>	
				<p>Bem vindo <b>Teste</b>
				<p>
				Hora atual: 
					<span id="timePage"></span>
				</p>
			</div> 
		</body>
	</html>
	