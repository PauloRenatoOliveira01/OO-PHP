/*
 |--------------------------------------
 | Função para calcular nota
 |--------------------------------------
 | Mostra em vermelho as notas 
 | que estão a baixo da média.
 |
 */
 function calculaNota(){
 	var tabela = document.getElementById("tabela");
 	var soma;
 	var resultado=[];

 	for(var i=1; i<tabela.rows.length; i++){
 		soma=parseFloat(tabela.rows[i].cells[5].innerHTML)+parseFloat(tabela.rows[i].cells[6].innerHTML);
 		tabela.rows[i].cells[7].innerHTML=soma;
 	}

 	resultado[0]=document.getElementById("result1");
 	resultado[1]=document.getElementById("result2");
 	resultado[2]=document.getElementById("result3");
 	resultado[3]=document.getElementById("result4");
 	resultado[4]=document.getElementById("result5");

 	for(var i=0; i<5; i++){
	 	if(resultado[i].innerHTML <= 6) {
	 	   resultado[i].style.color="red";
	 	}
 	}
 }


 /*
 |--------------------------------------
 | Anúncio
 |--------------------------------------
 | Carrega mensagem de anúncio após
 | cinco segundos do carregamento da página
 | 
 */
 function anuncioPromo(){
 	var stilo   = document.querySelectorAll(".anuncio");
 	var anuncio = document.getElementById("anuncio");
 		stilo[0].style.zIndex="999";
 	var tempo;
 }
 function exibirAnuncio(){
 	tempo=setTimeout(anuncioPromo, 5000);
 }
 
 function finalizarAnuncio(){
 	var stilo   = document.querySelectorAll(".anuncio");
 	var anuncio = document.getElementById("anuncio");
 	stilo[0].style.zIndex="-1";
 	clearTimeout(tempo);
 }

 /*
 |--------------------------------------
 | Mostra pessoa
 |--------------------------------------
 | usuário clica no nome da pessoa 
 | e abre a imagem com a sua respectiva foto
 | 
 */
 function mostraPessoa(num){
 	if(num == 1){
 		var imagem = document.getElementById("pessoa");
 		    imagem.setAttribute("class", "mostra_pessoa1");
 	}
 	else if(num == 2){
 		var imagem = document.getElementById("pessoa");
 		    imagem.setAttribute("class", "mostra_pessoa2");
 	}
 	else if(num == 3){
 		var imagem = document.getElementById("pessoa");
 		    imagem.setAttribute("class", "mostra_pessoa3");
 	}
 	else if(num == 4){
 		var imagem = document.getElementById("pessoa");
 		    imagem.setAttribute("class", "mostra_pessoa4");
 	}
 	else if(num == 5){
 		var imagem = document.getElementById("pessoa");
 		    imagem.setAttribute("class", "mostra_pessoa5");
 	}
 	else{
 		var imagem = document.getElementById("pessoa");
 		    imagem.setAttribute("class", "mostra_pessoa0");
 	}
 }

 /*
 |--------------------------------------
 | Campo de busca
 |--------------------------------------
 | Avisa o usuário que o deve ser inserido
 | algum valor antes de clicar em "buscar".
 |
 */
 function buscaMsg(){
 	var campo = document.getElementById("campo_busca").value;
 	
 	if(campo.length == ''){
 		alert("Ops! Digite algo para localizar!");
 	}
 	else{
 		var texto = document.getElementById("campo_busca").value;
 		var resultado = texto.match(campo);
 		document.write("Itens encontrado:" + resultado + " Tamanho:" + texto.length);
 	}
 }

 function addEventos(){
 	document.getElementById("bt_busca").addEventListener("click", buscaMsg);
 }

 window.addEventListener("load", addEventos);
 
function focus(){
	var focus = document.getElementById("nome").focus(); 
}

/*
 |--------------------------------------
 | Troca cor no titulo da página
 |--------------------------------------
 | Efeito no titulo da página, quando
 | o usuário passa com o mouse em cima.
 |
 */
function trocaCor(cor){
	var obj = document.getElementById("titulo_pag");
		obj.style.transitionDuration="0.5s";
		obj.style.color=cor; 
}
function voltaCor(cor){
	var obj = document.getElementById("titulo_pag");
	    obj.style.color=cor; 
}

/*
 |--------------------------------------
 | Imprimindo informações
 |--------------------------------------
 | Confirmação e alerta do que
 | o usuário escolheu para imprimir.
 |
 */
function imprimir(obj, titulo, pos){
	var txt_imp = document.getElementsByTagName("h4");
	txt_imp[pos].style.borderBottom="10px solid #fff";

	var confirmar = confirm("Deseja imprimir: " + titulo + "?");
	if( confirmar == true){
		alert("Aguarde o fim da impressão de: " + titulo + " ...");
	}else{
		alert("Impressão cancelada.");
	}
}

/*
 |--------------------------------------
 | Submit do formulário
 |--------------------------------------
 | Validação do formulário;
 | Tira o foco da página e deixa somento no formulário;
 | Encapsula possiveis erros de js.
 |
 */
function enviaDados(){
	
	try
	{
		var formu_busca = document.forms[0];
		var formulario  = document.forms[1];
		var elemento    = formulario.elements;

		var nome         = document.getElementById("nome").value;
		var celular      = document.getElementById("celular").value;
		var telefone     = document.getElementById("telefone").value;
		var email        = document.getElementById("email").value;
		var observ       = document.getElementById("obs").value;

		var label_nome   = document.getElementById("l_nome");
		var label_cel    = document.getElementById("l_cel");
		var label_fone   = document.getElementById("l_fone");
		var label_email  = document.getElementById("l_email");
		var label_obs    = document.getElementById("l_obs");

		var error_banner = document.querySelectorAll(".banner");
		var error_tabela = document.querySelectorAll("table");
		var error_texto  = document.querySelectorAll("p");
		var error_h4     = document.querySelectorAll("a");
		
		error_banner[0].style.color="#d1d1d1";
		error_tabela[0].style.color="#d1d1d1";

		for(var i=0; i < error_texto.length; i++){
			error_texto[i].style.color="#d1d1d1";
		}

		for(var i=0; i < error_h4.length; i++){
			error_h4[i].style.color="#d1d1d1";
		}

		if (nome.length < 3) {
			elemento[0].style.border = "1px solid red";
			label_nome.style.color   = "red";
			label_nome.innerHTML     = "* Nome inválido!";
		}
		else{
			alert('Desde já agradecemos pelo seu contato!');
			formulario.submit();
		}
	}

	catch(error){
		alert("Ops! ocorreu um erro: " + error.message + " \nProcure um administrador do sistema para realizar a correção");
		console.log ("Ops! ocorreu um erro: " + error.message);
	}
	finally{
		console.log ("Fim do tratamento de erros");
	}
}
