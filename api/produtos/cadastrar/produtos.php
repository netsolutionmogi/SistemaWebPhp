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

	
        //$data          = date('d/m/Y');   
        //$DataCadastro  = implode("-", array_reverse(explode("/", $data)));
		$DataCadastro  = trim($_POST["DataCadastro"]);
		$Produto       = trim($_POST["Produto"]);
		$Estoque       = trim($_POST["Estoque"]);
		$Unidade       = trim($_POST["Unidade"]);
		$CodigoBarra   = trim($_POST["codigobarra"]);
		$PrecoVenda    = trim($_POST["Precovenda"]); 
		$Preco         = str_replace(',','.', str_replace('.','', $_POST['Precovenda']));
		$CodigoCategoria='0';
		
		$query_rs='INSERT INTO produtos(DataCadastro,Produto,Estoque,Unidade,CodigoBarra,PrecoVenda,CodigoCategoria)  VALUES ("'.$DataCadastro.'","'.$Produto.'", "'.$Estoque.'","'.$Unidade.'","'.$CodigoBarra.'","'.$Preco.'","'.$CodigoCategoria.'")';
	    $resultado = mysqli_query($conexao,$query_rs)or die (mysql_error());
		echo $resultado;	
		
	  
?> 
   