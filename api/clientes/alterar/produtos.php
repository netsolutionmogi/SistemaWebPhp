<?php
header("access-control-allow-origin: *");	

include("conexao.php");
		
//$servidor = "localhost"; 
//$usuario = "boblocemp"; 
//$senha = "mysql01"; 
//$banco = "bobloc"; 

//$conexao = mysql_connect($servidor,$usuario,$senha)or die ("Conexão falhou!");;  
//mysql_select_db($banco)or die ("base de dados não existe");; 
 	
	    $data          = trim($_POST["DataCadastro"]);
        $DataCadastro = implode("-", array_reverse(explode("/", $data)));
		$Produto      = trim($_POST["Produto"]);
		$Quantidade   = trim($_POST["Quantidade"]);
		$Estoque      = trim($_POST["Estoque"]);
		$Unidade      = trim($_POST["Unidade"]);
		$CodigoBarra  = trim($_POST["CodigoBarra"]);
		$PrecoVenda   = trim($_POST["PrecoVenda"]); 
		$Preco        = str_replace(',','.', str_replace('.','', $_POST['PrecoVenda']));
		
		
		$query_rs='INSERT INTO produtos(DataCadastro,Produto,Quantidade,Estoque,Unidade,CodigoBarra,PrecoVenda) 
	   VALUES ("'.$DataCadastro.'","'.$Produto.'","'.$Quantidade.'", "'.$Estoque.'","'.$Unidade.'","'.$CodigoBarra.'","'.$Preco.'")';
	  $rs = mysql_query($query_rs,$conexao); 
		echo $query_rs;	
	  
?> 
   