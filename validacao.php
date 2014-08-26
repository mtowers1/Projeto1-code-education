<?php
function VerificaRotas(){
	$rotas=array('home','empresa','produtos','servicos','contato','recebecontato');
	$rota= parse_url("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
	$path = explode("/",$rota['path']);
	$arquivo=strtolower($path[1]);

	if($arquivo==""){
	$arquivo="home";
	}
	
	if(in_array($arquivo,$rotas)){
			if (!file_exists($arquivo.".php")) {
				echo utf8_decode("Página não encontrada!");
				http_response_code(404);
				exit();
			}
			return $arquivo;
	}
	else{
				echo utf8_decode("Página não encontrada!");
				http_response_code(404);
				exit();
		}
	
	
	

}

$arquivo=VerificaRotas();



