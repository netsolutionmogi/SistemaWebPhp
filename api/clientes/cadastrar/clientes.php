<?php
header("access-control-allow-origin: *");	

include("conexao.php");
		
//$servidor = "localhost"; 
//$usuario = "boblocemp"; 
//$senha = "mysql01"; 
//$banco = "bobloc"; 

//$conexao = mysql_connect($servidor,$usuario,$senha)or die ("Conexão falhou!");;  
//mysql_select_db($banco)or die ("base de dados não existe");; 
 	

		
		$nome = trim($_POST["nome"]);
		$cpf = trim($_POST["cpf"]);
		$endereco = trim($_POST["endereco"]);
		$bairro = trim($_POST["bairro"]);
		$cidade = trim($_POST["cidade"]);
		$cep = trim($_POST["cep"]);
		$telefone = trim($_POST["telefone"]); 
        $celular = trim($_POST["celular"]);
		
		$query_rs='INSERT INTO cadastroclientes(NOME,CPF,ENDERECO,BAIRRO,CIDADE,CEP,Telefone,Celular) 
	   VALUES ("'.$nome.'","'.$cpf.'","'.$endereco.'", "'.$bairro.'","'.$cidade.'","'.$cep.'","'.$telefone.'","'.$celular.'")';
	  //echo $query_rs;	
	  $rs = mysql_query($query_rs,$conexao); 
		
?> 
   