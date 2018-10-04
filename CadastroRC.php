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

			 $("#Contrato").blur(function(){
      			 $("#dadosContratoID").val($('#Contrato').val());
      			 var teste = ""
    		});

		});	

	</script>

	
					


	<? 
		$contrato = (isset($_REQUEST['Contrato'])) ? $_REQUEST['Contrato']: '';
	?>


</head>
<body>
		<br>
		
		
		  <fieldset class="borda-form">
		  	 <legend  class="borda-form" style="color: #066fa8; margin-left: 50px;">Registrar informativo de RC</legend>
		  	<form name="bcContrato" method="POST"> 

		  	<div class="form-inline">
		  			<div class="form-group" style="margin-left: 50px;"> 
						<!--Contrato -->
						<label for="Contrato">Digite o Contrato:</label>
						<!--Implantar Contrato por Busca______Mudar a Lógica do Negócio-->
						<select class="form-control" style="width: 300px" name="Contrato" id="Contrato" required>  
							<option value="">Selecione...</option>
							<? 
								//Cria a busca de Contrato para preencher o Option 
								$preencheSelect = "
									SELECT [num_contrato],[operadora] FROM [REPORT].[dbo].[report_contratos] 
									WHERE [gestora_contrato] <> 'ENCERRADO'
									ORDER BY [operadora],[num_contrato]
								";

								//Formata o resultado para aparecer no Option 
								$resSelect = $sql->prepare($preencheSelect); //Prepara a consulta 
								$resSelect->execute(); //Executa a consulta 
									//Exibe o resultado 
									foreach ($resSelect as $campos) {
										$op_num_contrato = $campos['num_contrato']; 
										$op_operadora = $campos['operadora']; 
									  echo "<option value= '$op_num_contrato'>$op_num_contrato - $op_operadora</option>";		
									}
							?>	

						</select>

						<!--<input type="text" class="form-control"	value="<?=$contrato;?>"style="width: 150px;" name="Contrato" id="Contrato" required/>
						-->


						<input type="hidden" name="dadosContrato" id="dadosContrato"/> 
						<button type="submit" value="Trazer_Dados" name="DadosCadastro" class="btn btn-warning" style="margin-left: 25px;">Buscar Contrato</button>
			

					</div>
			</div>		
			<br>
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
			<? 
				$acao = (isset($_REQUEST['DadosCadastro'])) ? $_REQUEST['DadosCadastro']: ''; 
					if ($acao == "Trazer_Dados") {
						$resAcao = ""; 
						$resAcao = $_REQUEST['Contrato'];

						//Realiza a consulta que irá preencher os demais dados 
						$consultaDados = "
						SELECT [num_contrato],[operadora],[gestora_contrato],[data_fechamento]
   						,[gitec_abrangidas]
 						FROM [REPORT].[dbo].[report_contratos] WHERE [num_contrato] = '$resAcao'
						";

						//echo $consultaDados;

						$resultContrato = $sql->prepare($consultaDados); 
						$resultContrato->execute();

							foreach ($resultContrato as $contratoEspecifico) {
								$num_contrato = $contratoEspecifico['num_contrato'];
								$operadora = $contratoEspecifico['operadora']; //Operadora do Cotnrato
								$gestora_contrato = $contratoEspecifico['gestora_contrato']; //Gestora do Contrato
								$data_fechamento = $contratoEspecifico['data_fechamento']; //Data de Fechamento da Fatura
								$gitec_abrangidas = $contratoEspecifico['gitec_abrangidas']; //Lista de GITEC´s Abrangidas
							}

					} else { 
						$num_contrato = null;
						$operadora = null; 
						$gestora_contrato = null; 
						$data_fechamento = null; 
						$gitec_abrangidas = null;

					}


			?> 		


			<div class="form-inline">

					<div class="form-group" style="margin-left: 50px;"> 
						<!--Mes de Vigência -->
						<label for="Contrato">Número do Contrato:</label>
						<input type="text" class="form-control" style="width: 200px;" name="Contrato" id="Contrato" value="<?=$num_contrato;?>" disabled="disabled" />
					</div>

					<div class="form-group" style="margin-left: 10px;"> 
						<!--Mes de Vigência -->
						<label for="Operadora">Operadora:</label>
						<input type="text" class="form-control" style="width: 300px;" name="Operadora" id="Operadora" value="<?=$operadora;?>" disabled="disabled" />
					</div>

					<div class="form-group" style="margin-left: 10px;"> 
						<!--Mes de Vigência -->
						<label for="Gestora">Gestora Operacional:</label>
						<input type="text" class="form-control" style="width: 150px;" name="Gestora" id="Gestora" value="<?=$gestora_contrato;?>" disabled="disabled"/>
					</div>
			 
		 	 </div>
		 	 <!--<script type="text/javascript" src="completar.js"></script>-->	
		 	 <br>
	         <div class="form-inline">
		    
		  			<div class="form-group" style="margin-left: 50px;"> 
						<!--Contrato -->
						<label for="Fechamento">Data de Fechamento da Fatura:</label>
						<input type="text" class="form-control" style="width: 200px;" name="Fechamento" id="Fechamento" value="<?=$data_fechamento;?>" disabled="disabled"/>
					</div>

					<div class="form-group" style="margin-left: 10px;"> 
						<!--Contrato -->
						<label for="Unidades">Unidade abrangida:</label>
						<select class="form-control" style="width: 300px" name="Unidades" id="Unidades" required>  
							<option value="Teste">Selecione...</option>
							<? 
								//Divide o resultado da variavel Explode
								$str = explode('; ', $gitec_abrangidas);
								$total = count($str); 
								 for ($i=0; $i < $total ; $i++) { 
	 							 	echo "<option value='$str[$i]'>$str[$i]</option>";
	 							  } 
								
							?> 
						</select>
						<script type="text/javascript">
								$(document).ready( function ()
									{
										$("#Unidades").on('change', function() {
											var option = $(this).find('option:selected').val();
												 $('#res').html(option);
											var res = document.getElementById('res').value = option;	 
											});
									});

						</script>
							 <input type='hidden' id='res' name='resGitec'>
					</div>
			     </div>	

          </form>
          	<br>

          <form name="RegistraRC" method="POST" action="../STRUTS/gerencia_rcs.php">
          
			<input type="hidden" name="rcNumContrato" value="<?=$num_contrato;?>" /> 	
          	<input type="hidden" name="rcOperadora" value="<?=$operadora;?>" />
          	<input type="hidden" name="rcGestora" value="<?=$gestora_contrato;?>" />
          	<input type="hidden" name="rcFechamento" value="<?=$data_fechamento;?>" />
          	<!--<input type="hidden" name="rcUnidade" value="<?=$resultadoGitec;?>" />--> 
          	<? 
          		echo $resultadoGitec;
          	?>
          

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

				<div class="form-group" style="margin-left: 50px;"> 
					<!--Contrato -->
					<label for="ValorGlobal">Valor Global Mensal:</label>
					<input type="text" class="form-control" style="width: 100px;" name="ValorGlobal" id="ValorGlobal" required/>
				</div>

          </div>	
          <br>
           <div class="form-inline">	
           		

				<div class="form-group" style="margin-left: 50px;"> 
					<!--Contrato -->
					<label for="Multa">Multa:</label>
					<input type="text" class="form-control somente-numero" style="width: 100px;" name="Multa" id="Multa" pattern="/[^0-9\.]/" required/>
				</div>

				<div class="form-group" style="margin-left: 50px;"> 
					<!--Contrato -->
					<label for="Glosa">Glosa:</label>
					<input type="text" class="form-control somente-numero" style="width: 100px;" name="Glosa" id="Glosa" pattern="/[^0-9\.]/" required/>
				</div>

				<script type="text/javascript">
					$(document).ready(function() {
 						  $('.somente-numero').blur(function (e) {
							$(this).val($(this).val().replace(/[^0-9\.]/g,''));
							  var v1 = Number(document.getElementById("Multa").value);
      						    var v2 = Number(document.getElementById("Glosa").value);
      				      if ((v1 !="")&&(v2 !="")) {
        				      var v3 = document.getElementById("Total").value = parseFloat(v1 + v2).toFixed(2);
	        				    }
	 					  });
					 });


				</script>



				<div class="form-group" style="margin-left: 50px;"> 
					<!--Contrato -->
					<label for="Total">Total(Multa+Glosa):</label>
					<input type="text" class="form-control" style="width: 100px;" name="Total" id="Total" disabled="disabled" />
				</div>

	        </div>
	        <br>
	        <div class="form-inline pull-right" >
		        <div class="form-group" style="margin-right: 35px;" > 
	        		<button type="submit" class="btn btn-primary btn-lg" name="btnPesquisar" id="gerarPesquisa"> 
						Registrar 
					</button>	
				</div>	
				<div class="form-group" style="margin-right: 75px;"> 	
					<button type="reset" class="btn btn-primary btn-lg" name="btnPesquisar" id="gerarPesquisa"> 
						Limpar 
					</button>	
				</div>	
	        </div>
	  	</form>
	    </fieldset>    
		



</body>
</html>