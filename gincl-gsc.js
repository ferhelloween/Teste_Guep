/* Funcoes Jquery implementada em fevereiro de 2015 */

var $att    	= jQuery.noConflict(); 
var tempo   	= new Number();

//----------------------------------------------------------------------------------------------------
// Valor setado na rotina valida_usuario.php
var carrega = 1440; //document.write("<?php echo $_SESSION['sessiontime'];?>"); //estabelece tempo da sessão
//----------------------------------------------------------------------------------------------------

$att(document).ready( function($) {

	$att("input:text:eq(0):visible").focus();
	$att('#fundo1').css('display', 'block');
	$att('#login').css('display', 'block').load('usuario/login.php');

	$att('.login').click(function(e) {
		$att('#fundo1').css('display', 'block');
		$att('#login').css('display', 'block')
	   .load('usuario/login.php');
	});
    	
	$att('.registro').click(function(e) {
		$att('#fundo1').css('display', 'block');
		$att('#registro').css('display', 'block')
	   .load('forms/frmCadastro.php');
	});
	
	$att('.btn_x').live('click', function(e){// Pagina 2
	    e.preventDefault();
		limpaCampos();
	});

	$att('.volta_x').live('click', function(e){// Pagina 3
	    e.preventDefault();
	  $att('#login').fadeOut("slow");
	});

});// JavaScript read do Formulario
//----------------------------------------------------------------------------------------------------------------------------
function clock(n) {
	tempo=n;

	if((tempo - 1) >= 0){                   // Se o tempo não for zerado
		var min = parseInt(tempo/60); 		// Pega a parte inteira dos minutos
		var seg = tempo%60;                 // Calcula os segundos restantes

		if(min < 10){                  		// Formata o número menor que dez, ex: 08, 07, ...
			min = "0"+min;
			min = min.substr(0, 2);
		}
		if(seg <=9){
			seg = "0"+seg;
		}
		// Cria a variável para formatar no estilo hora/cronômetro
		horaImprimivel = min + ':' + seg; 	//JQuery pra setar o valor h/m/s '00:' + min + ':' + seg; 
		// Mostra se tempo <=30 seg
		if(tempo<=180) {	
			$("#campo_contador").html('<img src="imagens/ajax.gif" alt="Carregando">').text(horaImprimivel);				
		}
		
		//----Sensor de Movimentação do Mouse, recarrega o tempo de sessão------------------------------------
		$("div").mousemove(function(){
			tempo=carrega;
		});
		//----------------------------------------------------------------------------------------------------		
		
		--tempo;							// diminui o tempo
		setTimeout('clock(tempo)',1000);	// Define que a função será executada novamente em 1000ms = 1 segundo
	
	} else { // Quando o contador zerar, executará esta ação.
		$.ajax({
			url  : 'usuario/destruir.php',
			type : 'POST',
			data : { destruir: 1 } , 
			success: function( retorno ) {
				if (retorno == 0) {
					document.location.reload();
				}  
			}
        });
 	}
}
//----------------------------------------------------------------------------------------------------
function fecha_registro() {
	$att('#login').fadeOut("slow");
	$att('#registro').fadeOut("slow");
	$att('#fundo1').hide();
} 

function destruir_sessao() {
		$.ajax({
			url  : 'usuario/destruir.php',
			type : 'POST',
			data : { destruir: 1 } , 
			success: function( retorno ) {
				if (retorno == 0) {
					alert('sessao destruida..!');
					fecha_registro();
					$att('.conectado').css('display', 'none');
				}  
			}
        });
}

function valida_login(){
		$att('#message').css('display', 'block')
		.html( '<img src="imgs/ajax3.gif">' );
	    $att('#message').load( 'usuario/conectar.php',
			 { login_mail: $('#login_mail').val(), login_pwd:$('#login_pwd').val() },
			 function(r){
				var retorno;
				retorno = r.split('|');
					 if ( retorno[22]==0 )
						{
							$att('#message').css('display', 'none');
							$att('.conectado').css('display', 'block');
							$att("<span><?php echo $_SESSION['email'];?></span>")
							.appendTo('.conectado');
							fecha_registro();
					    } 
			   }
	    );

		
Validacao = false;   
 } 


//----------------------------------------------------------------------------------------------------
var Direitos = function() {}; //direitos de Usuarios
Direitos.prototype = {
    getDireitos : function() {
		var arDireitos= [this.id, this.email, this.senha, this.login, this.nome, this.usu_nivel, this.usu_grup_id, 
						 this.usu_status, this.grup_ds, this.grup_nivel, this.dt_acesso, this.sessiontime ];
        return arDireitos;
    },
    setDireitos : function(id, email, senha, login, nome, usu_nivel, usu_grup_id, usu_status, grup_ds, grup_nivel, dt_acesso, sessiontime) {
        this.id 	= id;
		this.email	= email;
        this.senha 	= senha;
		this.login	= login;
		this.nome	= nome ;
		this.usu_nivel	=	usu_nivel
		this.usu_grup_id=	usu_grup_id;
		this.usu_status	=	usu_status;
		this.grup_ds	=	grup_ds;
		this.grup_nivel	=	grup_nivel;
		this.dt_acesso	=	dt_acesso;
		this.sessiontime=	sessiontime;
    }
};

var d = new Direitos();
//---------------------------------------------------------------------------------------------------- 
var Alertar = function() {}; //direitos Alertar
Alertar.prototype = {
    getAlertar : function() {
		var arAlertar= [ this.param1 ];
		$att('#masscara1').css({ width : $att(document).width(),
			height: $att(document).height()}).appendTo('body').show();
		$att('#registro1').show().load('alertar.php', function(e){
			$att('#registro1').append('<div class="linnha">'+arAlertar[0]+'</div>');	
		});
    },
    setAlertar : function(param1) {
        this.param1 = param1;
    }
};
var al = new Alertar();
