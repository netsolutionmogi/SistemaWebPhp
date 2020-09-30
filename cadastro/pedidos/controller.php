<?php

header('content-type: application/json; charset=utf-8');
		
header("access-control-allow-origin: *");	
		
include("../conexao/conexao.php");
		
$acao = trim($_POST["acao"]);
$acao = trim($_GET["acao"]);
$inserir = trim($_POST["inserir"]);
$alterar = trim($_POST["alterar"]);
$consultar = trim($_POST["consultar"]);
$excluir= trim($_POST["excluir"]);

//switch ($_POST["acao"])
 //{
  // case 'inserir':
  
  $acao = (isset($_REQUEST['acao'])&& $_REQUEST['acao'] !=NULL)?$_REQUEST['acao']:'';
	if($acao == 'inserir')
	{
	  
		        
             $data = date('d/m/Y');   
             $DataCadastro   = implode("-", array_reverse(explode("/", $data)));
			 $nomecategoria = trim($_POST["nomecategoria"]);
		     
			 //$sql = "SELECT * FROM usuarios WHERE usuario='".$_POST['usuario']."' AND senha='".$_POST['senha']."'";
			 	$sql='INSERT INTO categorias(DataCadastro,NomeCategoria) 
				   VALUES ("'.$DataCadastro.'","'.$nomecategoria.'")';
				//echo $sql;
				
				$resultados = mysqli_query($conexao,$sql)or die (mysql_error());
			 echo $sql;
			
			  if($resultados)
			  {
			
					echo 1;	//Se a consulta não retornar nada é porque as credenciais estão erradas
					
				}
				
				 else
				{
				
				echo 0;	//Responde sucesso
					
			}
			
	}
	if($acao == 'alterar')
	{
	  
		     $data = date('d/m/Y');   
             $DataCadastro   = implode("-", array_reverse(explode("/", $data)));
			 $nomecategoria = trim($_POST["nomecategoria"]);
			
			 	
			 $sql = "UPDATE categorias set DataCadastro='".$DataCadastro."',NomeCategoria='".$nomecategoria."' where CodigoCategoria= '".$codigo."' ";
			 $resultados = mysqli_query($conexao,$sql)or die (mysql_error());
			 
			 echo $sql;
			
			  if($resultados)
			  {
			
					echo 1;	//Se a consulta não retornar nada é porque as credenciais estão erradas
					
				}
				
				 else
				{
				
				echo 0;	//Responde sucesso
					
			}
			
	}
	if($acao == 'consultar')
	{
		
		function inverteData($data){    
		   $parteData = explode("/", $data);    
		   $dataInvertida = $parteData[0] . "/" . $parteData[1] . "/" . $parteData[2];
		   return $dataInvertida;			
		}	
			
		$data = date('d/m/Y');   
        $DataCadastro   = implode("-", array_reverse(explode("/", $data)));
		 $sql = "select * from pedidos where DataCadastro= '".$DataCadastro."';";
		 $resultados =mysqli_query($conexao,$sql)or die (mysql_error());
		 echo $sql;
		
		if($resultados >=0)
	    { 
	    if(mysqli_num_rows($resultados) <= 0)
		 {
		   echo "<tr><td class='col-lg-12 col-md-12 col-sm-12 col-xs-12 ' colspan='6'>Nenhum Pedido encontrada...</td></tr>";
		  }
		  else
		  {
		 $total = 0;
			while ($row=mysqli_fetch_array($resultados))
			{
				
				$CodigoCompra=$row['CodigoCompra'];
				$idpedido=$row['idpedido'];
				$DataCadastro=$row['DataCadastro'];
				$Produto=$row['Produto'];
				$subtotal=$row['subtotal'];
				$numeromesa=$row['numeromesa'];
				
		
			?>
			<tr>
				<td><p><?php echo $row['CODIGOCOMPRA'];?></p></td>
				<td><p><?php echo $row['IDPEDIDO'];?></p></td>
                <td><p><?php echo implode('/',array_reverse(explode('-',$row['DATACADASTRO'])));?></p></td>
                <td><p><?php echo $row['PRODUTO'];?></p></td>
                <td><p><?php echo number_format($row['SUBTOTAL'],2,",",".");?></p></td>
                <td><p><?php echo $row['NUMEROMESA'];?></p></td>
                                
                <td>
                  <button type="button" data-toggle="modal"  data-target="#delete" data-action="shred" 
                data-id="<?php echo $row['CODIGOCOMPRA'];?>"e class="btn btn-danger"><i class="glyphicon glyphicon-trash"> Excluir</i></button>
                  </td>
			
			</tr>		
			<?php
			
            }
		
			$total =$total +1;
			
		  }
		}
		
	}
	if($acao == 'excluir')
	{
	  
		     $codigo = trim($_POST["codigo"]);
		     	
			 $sql = "delete FROM pedidos where CodigoCompra= '$codigo' ";
			 $resultados = mysqli_query($conexao,$sql)or die (mysql_error());
			 
			 echo $sql;
			
			  if($resultados)
			  {
			
					echo 1;	//Se a consulta não retornar nada é porque as credenciais estão erradas
					
				}
				
				 else
				{
				
				echo 0;	//Responde sucesso
					
			}
			
	}
	if($acao == 'filtrar')
	{
		$nome = $_POST['nome'];	
		 
	    if($nome!="")
		{
		  $sql = "select * from pedidos;";
		 $resultados = mysqli_query($conexao,$sql)or die (mysql_error());
	     }
		 //$sql = "SELECT * FROM cadastroclientes WHERE Nome LIKE '%".$_POST["nome"]."%'";
		 $sql = "SELECT * FROM pedidos WHERE IdPedido ='".$_POST["nome"]."'";
		 $resultados = mysqli_query($conexao,$sql)or die (mysql_error());
		 echo $sql;
		 
		 if(mysqli_num_rows($resultados) <= 0)
		 {
		   echo "<tr><td class='col-lg-12 col-md-12 col-sm-12 col-xs-12 ' colspan='6'>Nenhum Pedido encontrada...</td></tr>";
		  }
		  else
		  {
			while ($row=mysqli_fetch_array($resultados))
			{

				$CodigoCompra=$row['CodigoCompra'];
				$idpedido=$row['idpedido'];
				$DataCadastro=$row['DataCadastro'];
				$Produto=$row['Produto'];
				$subtotal=$row['subtotal'];
				$numeromesa=$row['numeromesa'];
				
			}
			?>
			<tr>
				<td><p><?php echo $row['CODIGOCOMPRA'];?></p></td>
				<td><p><?php echo $row['IDPEDIDO'];?></p></td>
                <td><p><?php echo implode('/',array_reverse(explode('-',$row['DATACADASTRO'])));?></p></td>
                <td><p><?php echo $row['PRODUTO'];?></p></td>
                <td><p><?php echo number_format($row['SUBTOTAL'],2,",",".");?></p></td>
                <td><p><?php echo $row['NUMEROMESA'];?></p></td>
                                
                <td>
                  <button type="button" data-toggle="modal"  data-target="#delete" data-action="shred" 
                data-id="<?php echo $row['CODIGOCOMPRA'];?>"e class="btn btn-danger"><i class="glyphicon glyphicon-trash"> Excluir</i></button>
                  </td>
			
			</tr>		
			<?php
			
			
			
		}
		
	}

if($acao == 'filtrarnome')
	{
		$nome = $_POST['nome'];	
		 $sql = "select * from pedidos WHERE IdPedido LIKE '%".$_POST["nome"]."%';";
		 $resultados = mysqli_query($conexao,$sql)or die (mysql_error());
		echo $sql;
		
		
		 if(mysqli_num_rows($resultados) <= 0)
		{
		   echo "<tr><td class='col-lg-12 col-md-12 col-sm-12 col-xs-12 ' colspan='6'>Nenhum Pedido encontrada...</td></tr>";
		  }
		  else
		  {
			while ($row=mysqli_fetch_array($resultados))
			{
				$CodigoCompra=$row['CodigoCompra'];
				$idpedido=$row['idpedido'];
				$DataCadastro=$row['DataCadastro'];
				$Produto=$row['Produto'];
				$subtotal=$row['subtotal'];
				$numeromesa=$row['numeromesa'];
		
			?>
			<tr>
				<td><p><?php echo $row['CODIGOCOMPRA'];?></p></td>
				<td><p><?php echo $row['IDPEDIDO'];?></p></td>
                <td><p><?php echo implode('/',array_reverse(explode('-',$row['DATACADASTRO'])));?></p></td>
                <td><p><?php echo $row['PRODUTO'];?></p></td>
                <td><p><?php echo number_format($row['SUBTOTAL'],2,",",".");?></p></td>
                <td><p><?php echo $row['NUMEROMESA'];?></p></td>
                                
                <td>
                  <button type="button" data-toggle="modal"  data-target="#delete" data-action="shred" 
                data-id="<?php echo $row['CODIGOCOMPRA'];?>"e class="btn btn-danger"><i class="glyphicon glyphicon-trash"> Excluir</i></button>
                  </td>
			
			</tr>		
			<?php
			}
		  }
		}
if($acao == 'filtrarproduto')
{

$q = strip_tags(trim($_GET['q'])); 
	
$sql = "select * from Produtos WHERE Produto LIKE '%".$q."%' LIMIT 40";
$result  = mysqli_query($conexao,$sql)or die (mysql_error());

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


			$employee = array(); 
			
			while ($row = mysqli_fetch_array($result, MYSQL_ASSOC))
			{ 
			$row_array['CodigoProduto'] = $row['CodigoProduto']; 
			$row_array['Produto'] = utf8_encode($row["Produto"]); 
			
			array_push($employee,$row_array); 
			}
			//$employee["success"] = 1;
			echo json_encode($employee); 

}
		
		
	
	//	break;	
	 //  default:
	 //  echo 'Erro ao enviar';
	 //  break;
//}

?>