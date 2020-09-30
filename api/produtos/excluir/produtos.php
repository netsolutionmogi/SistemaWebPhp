<?php
header('content-type: application/json; charset=utf-8');
		
error_reporting(E_ALL & ~ E_NOTICE);
		
header("access-control-allow-origin: *");	

date_default_timezone_set('America/Sao_Paulo');
	
		
 $localhost="localhost";
				$root="root";
				$senha="123456";
				$database="netcomanda";
				
				//$localhost="localhost";
				//$root="netcomanda";
				//$senha="net2012m";
				//$database="netcomanda";
				
				
				$conexao = mysqli_connect($localhost,$root,$senha);
				if($conexao){
				mysqli_select_db($conexao,$database);
				}else{
				echo 'Não foi possivel conectar: ' . mysql_error();
				}

	
             $CodigoProduto = trim($_POST["CodigoProduto"]);
		     	
			 $sql = "delete FROM produtos where CodigoProduto= '$CodigoProduto' ";
			 $resultados = mysqli_query($conexao,$sql)or die (mysql_error());
			 
			 //echo $sql;
			
			  if($resultados)
			  {
			
					echo 1;	//Se a consulta não retornar nada é porque as credenciais estão erradas
					
				}
				
				 else
				{
				
				echo 0;	//Responde sucesso
					
			}
	  
?> 
   