<?php
error_reporting(E_ALL & ~ E_NOTICE);

header('content-type: application/json; charset=utf-8');
		
header("access-control-allow-origin: *");

if(!isset($_SESSION))
	{
	 session_start();
	}

$localhost="localhost";
$root="root";
$senha="123456";
$database="netcomanda";
//$database="netcomanda";

//$root="netcomanda";
//$senha="net2012m";
//$database="netcomanda";


$conexao = mysqli_connect($localhost,$root,$senha);
if($conexao){
mysqli_select_db($conexao,$database);
}else{
echo 'Não foi possivel conectar: ' . mysql_error();
}

//  $codigo_pedido = $_SESSION['pedido'];
//$numerocomanda=$_SESSION['numerocomanda'];

//$sql="SELECT pedidos.Codigo_compra, pedidos.CodigoProduto, pedidos.quantidade, pedidos.subtotal, produtos.Produto, produtos.PrecoVenda
//FROM pedidos
//INNER JOIN produtos ON pedidos.Codigo_compra = produtos.CodigoProduto";
//$sql = "SELECT pedidos.Codigo_compra, pedidos.CodigoProduto, pedidos.quantidade, pedidos.subtotal, produtos.Produto, produtos.PrecoVenda from produtos, pedidos where produtos.codigo=pedidos.codigo and pedidos.codigo_pedido='".$codigo_pedido."';";
$sql = "Select * from produtos";
$resultados  = mysqli_query($conexao,$sql) or die(mysql_error());

//echo $sql;
function limitarTexto($texto, $limite){
		  $contador = strlen($texto);
		  if ( $contador >= $limite ) {      
			  $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
			  return $texto;
		  }
		  else{
			return $texto;
		  }
		} 

     if(mysqli_num_rows ($resultados)>=0)
		{	
		$total = 0;
		$produtos = array(); 
			while ($row=mysqli_fetch_array($resultados, MYSQL_ASSOC))
			{
			  $row_array['CodigoProduto'] = $row['CodigoProduto']; 
			  $row_array['DataCadastro'] = $row['DataCadastro']; 
			  $row_array['Produto'] = utf8_encode($row["Produto"]); 
			  $row_array['Estoque'] = $row['Estoque']; 
			  $row_array['Unidade'] = $row['Unidade']; 
			  $row_array['CodigoBarra'] = $row['codigobarra']; 
			  $row_array['PrecoVenda'] = $row['Precovenda']; 
			  $row_array["sucesso"] = 1;
				
				
				array_push($produtos,$row_array); 
			
            }
			
			$total =$total +1;
			$arr = array(); 
            $arr['total'] = $total; 
			
			// echo json_encode($arr);
			echo json_encode($produtos);
		}
		else
		{
		
			 $erro["erro"] = 0;
			$arr = array(
				 $erro
			);
			
				
		   echo json_encode($arr);
		}

?>