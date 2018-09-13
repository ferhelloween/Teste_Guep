<?php  
	
	/* Página que irá exibir os contratos vigentes e seus gestores 
		Data de início de criação da tarefa - 04/09/2018 
		Desenvolvedor Principal - Fernando Henrique de Paula Eduardo Gonçalves - P749728 
		Suportes e Informação - Hamilton Pereira Porto - P514771 - e Robson Araujo Lopes dos Santos - P793070 	
		Equipe CGR - Goveernança e Atestes - Cetec78
	*/ 


	#definir o char-set e linguagem da página 
	setlocale(LC_ALL,"pt_BR"); //Linguagem
	header('Content-type: text/html; charset=windows-1252'); //Char-set 

	set_time_limit(120); //Define tempo limite de execução
	ERROR_REPORTING (E_ERROR);  //Somente exibe erros fatais

    //Inclui arquivo de conexão que será usado na pesquisa 
    include "../STRUTS/Conexao.php"; 
	
	#Varíaveis globais que serão usadas para cadastramento 
	SQL(); 
	global $sql; 

?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Batimento Sirea x Sisgt</title> 
	<meta charset="windows-1252"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 	<link rel="stylesheet" href="/resources/demos/style.css">
		
	<!--CSS Bootstrap e Próprios-->
	<link rel="stylesheet" type="text/css" href="../LIB/CSS/bootstrap.min.css"/> <!--BootStrap-->
	<link rel="stylesheet" type="text/css" href="../LIB/CSS/newPages.css"/><!--CSS Adicional-->
		
	<!--Bootstrap JS--> 
	<!--<script type="text/javascript" charset="utf-8" src="LIB/JS/jquery-1.11.1.min.js"></script>--> 
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script type="text/javascript" charset="utf-8" src="../LIB/JS/jQuery-Mask-Plugin-master/dist/jquery.mask.min.js"></script><!--Script para mascara de telefone-->
	<script type="text/javascript" charset="utf-8" src="../LIB/JS/bootstrap.min.js"></script> 

	<style type="text/css">
		input[type=text] { 
			border: 2px solid #000080;
			border-radius: 4px;	
		}

		label { 
			color: #066FA8;
		}

	</style>

	<script type="text/javascript">
		//Cria a função que buscará o autocomplete 
		$(document).ready(function() {

			//Captura o retorno do buscarContrato.php 
			$.getJSON('buscarContrato.php',function(data) {
				
				var num_contrato = []; 

				//Armanzena na array capturando somente o número do contrato 
				$(data).each(function(key,value) {
					num_contrato.push(value.num_contrato);
				}); 

				//Chama o auto complete do Jquery 
				$('#Contrato').autocomplete({source: num_contrato, minLength: 3	});
			});
		});	

	</script>
</head>
<body>
		<br>
		
		<form> 
		  <fieldset class="borda-form">
		  	 <legend  class="borda-form" style="color: #066fa8; margin-left: 50px;">Registrar informativo de RC</legend>
		  	<div class="form-inline">
		  			<div class="form-group" style="margin-left: 50px;"> 
						<!--Contrato -->
						<label for="Contrato">Contrato:</label>
						<input type="text" class="form-control"	style="width: 200px;" name="Contrato" id="Contrato" required/>
					</div>

				<!--	<script type="text/javascript">
					//Cria a função que buscará o autocomplete 
					$(document).ready(function() {	
						$("#Contrato").blur(function() {
							//Criando as varíaveis
							var operadora = $("#Operadora"); 
							var gestora_contrato = $("#Gestora"); 
							var contrato = $(this).val(); 

							$.getJSON('processa_contrato.php',(contrato),
								function(retorno) {
									operadora.val(retorno.operadora); 
									gestora_contrato.val(retorno.gestora_contrato); 	

								}); 
							});
						});	


					</script>	-->
					<div class="form-group" style="margin-left: 50px;"> 
						<!--Mes de Vigência -->
						<label for="Operadora">Operadora:</label>
						<input type="text" class="form-control" style="width: 200px;" name="Operadora" id="Operadora" disabled="disabled" />
					</div>

					<div class="form-group" style="margin-left: 50px;"> 
						<!--Mes de Vigência -->
						<label for="Gestora">Gestora Operacional:</label>
						<input type="text" class="form-control" style="width: 200px;" name="Gestora" id="Gestora" disabled="disabled"/>
					</div>
			  </div>
		 	 
		 	 <!--<script type="text/javascript" src="completar.js"></script>-->	

		  	  <br>

		  	<div class="form-inline">
		  			<div class="form-group" style="margin-left: 50px;"> 
						<!--Contrato -->
						<label for="Fechamento">Data de Fechamento da Fatura:</label>
						<input type="text" class="form-control" style="width: 200px;" name="Fechamento" id="Fechamento" required/>
					</div>

					<div class="form-group" style="margin-left: 50px;"> 
						<!--Contrato -->
						<label for="Unidades">Unidades abrangidas:</label>
						<input type="text" class="form-control" style="width: 200px;" name="Unidadaes" id="Unidades" required/>
					</div>


	        </div>	
          
          	<br>
          
          <div class="form-inline">
				<div class="form-group" style="margin-left: 50px;"> 
					<!--Contrato -->
					<label for="FechamentoRC">Data de fechamento da RC:</label>
					<input type="text" class="form-control" style="width: 200px;" name="FechamentoRC" id="FechamentoRC" required/>
				</div>

				<div class="form-group" style="margin-left: 50px;"> 
					<!--Contrato -->
					<label for="Atraso">Dias em Atraso:</label>
					<input type="text" class="form-control" style="width: 100px;" name="Atraso" id="Atraso" required/>
				</div>	
          </div>	
          <br>
           <div class="form-inline">	
           		<div class="form-group" style="margin-left: 50px;"> 
					<!--Contrato -->
					<label for="ValorGlobal">Valor Global Mensal:</label>
					<input type="text" class="form-control" style="width: 100px;" name="ValorGlobal" id="ValorGlobal" required/>
				</div>

				<div class="form-group" style="margin-left: 50px;"> 
					<!--Contrato -->
					<label for="Multa">Multa:</label>
					<input type="text" class="form-control" style="width: 100px;" name="Multa" id="Multa" required/>
				</div>

				<div class="form-group" style="margin-left: 50px;"> 
					<!--Contrato -->
					<label for="Glosa">Glosa:</label>
					<input type="text" class="form-control" style="width: 100px;" name="Glosa" id="Glosa" required/>
				</div>

				<div class="form-group" style="margin-left: 50px;"> 
					<!--Contrato -->
					<label for="Total">Total(Multa+Glosa):</label>
					<input type="text" class="form-control" style="width: 100px;" name="Total" id="Total" required/>
				</div>

	        </div>
	        <br>
	        <div class="form-inline pull-right">
		        <div class="form-group" > 
	        		<button type="submit" class="btn btn-primary btn-md" name="btnPesquisar" id="gerarPesquisa"> 
						Registrar 
					</button>	
				</div>	
				<div class="form-group" style="margin-left: 50px;"> 	
					<button type="reset" class="btn btn-primary btn-md" name="btnPesquisar" id="gerarPesquisa"> 
						Limpar 
					</button>	
				</div>	
	        </div>
	    </fieldset>    
		</form>



</body>
</html>