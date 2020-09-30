<?php

error_reporting(E_ALL & ~ E_NOTICE);
		
header("access-control-allow-origin: *");	

date_default_timezone_set('America/Sao_Paulo');
	
		
 $localhost="localhost";
$root="netsolut_netcomanda";
$senha="net2020SOL@";
$database="netsolut_netcomanda";


				
 $conexao = mysqli_connect($localhost,$root,$senha);
 if($conexao)
{
	mysqli_select_db($conexao,$database);
	echo 'conectado ';
   }else{
     echo 'Não foi possivel conectar: ' . mysql_error();
 }



?>
