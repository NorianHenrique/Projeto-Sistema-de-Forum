<?php

session_start();
date_default_timezone_set('America/Sao_Paulo');

	
	$autoload = function($class){
	$class = str_replace('\\','/',$class);
	if(file_exists('classes/'.$class.'.php'))
	
		include('classes/'.$class.'.php');
	
	};
		
							
	spl_autoload_register($autoload);	

 define('INCLUDE_PATH', 'http://localhost/Projeto%20Forum/');
 define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');
 define('BASE_DIR_PAINEL',__DIR__.'/painel');

 
	//Conectar com banco de dados!
	define('HOST','localhost');
	define('USER','root');
	define('PASSWORD','');
	define('DATABASE','forum');

	//Constantes para o painel de controle
	define('NOME_EMPRESA','Danki Code');

?>