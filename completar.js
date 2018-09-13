$(document).ready(function() { 
	$("#Contrato").blur(function() {
		//Criando as varíaveis
		var $operadora = $("#Operadora"); 
		var $gestora_contrato = $("#Gestora"); 
		var num_contrato = $(this).val(); 

		$.getJSON('processa_contrato.php',(num_contrato),
				function(retorno) {
					$operadora.val(retorno.operadora); 
					$gestora_contrato.val(retorno.gestora_contrato); 	

		}); 
	});
}); 