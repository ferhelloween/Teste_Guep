
//Validação de Cadastro por PHP 
var form = document.getElementById("formulario-usuario"); 

//If para validar o formulário
if (form.addEventListener){
	form.addEventListener("submit",validaCadastro); 
} else if(form.attachEvent) { 
	form.attachEvent("onsubmit",validaCadastro);
}

//Função que irá fazer essa validação 
function validaCadastro(evt) { 
	var nome = document.getElementById('nome'); //Varíavel para validação do nome
	var sobreNome = document.getElementById('sobrenome'); //Varíavel para validação do sobrenome
	var grupos = document.getElementById('grupo'); //Varíavel para validação do grupo 
	var contErro = ; //Variavel para contar o erro
	
	//Cria o alert para o nome 
	alerta_nome = document.querySelector('.mes-nome'); 
	if(nome.value == ""){ 
			alerta_nome.innerHTML = "Favor preencher o nome"; 
			alerta_nome.style.display = 'block';
			contErro =+ 1; 
	} else{
		alerta_nome.style.display = 'none';
	}
}

 	//Cria o alerta para o sobrenome 
 	alerta_sobrenome = document.querySelector('.mes-sobrenome'); 
 	if(noome.value == ""){ 
		alerta_sobrenome.innerHTML = "Favor preencher o sobrenome"; 
		alerta_sobrenome.style.display = 'block'; 
		contErro =+ 1;   	
 	} else { 
		alerta_sobrenome.style.display = 'none';  	
 	}

	//Cria o alerta para os grupos 
	alerta_grupos = document.querySelector('.mes-grupos'); 
	if(grupos.length < 2) { 
		alerta_grupos.innerHTML = 'Favor escolher no mínimo dois grupos'; 
		alerta_grupos.style.display = 'block'; 
	} else { 
		alerta_grupos.style.display = 'none'; 	
	} 	

	//Retorna ao valor padrão
	if(contErro > ){
		evt.preventDefault();
	}

