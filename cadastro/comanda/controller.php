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
			 $numeromesa     = trim($_POST["numeromesa"]);
			 $numerocomanda  = trim($_POST["numerocomanda"]);
			 
			 //$sql = "SELECT * FROM usuarios WHERE usuario='".$_POST['usuario']."' AND senha='".$_POST['senha']."'";
			 	$sql='INSERT INTO mesas(DataCadastro,NumeroComanda,NumeroMesa) 
				   VALUES ("'.$DataCadastro.'","'.$numerocomanda.'","'.$numeromesa.'")';
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
			 $codigo         = trim($_POST["codigo"]);
			 $numeromesa     = trim($_POST["numeromesa"]);
			 $numerocomanda  = trim($_POST["numerocomanda"]);
			 	
			 $sql = "UPDATE comanda set DataCadastro='".$DataCadastro."',NumeroComanda='".$numerocomanda."',NumeroMesa='".$numeromesa."' where CodigoComanda= '".$codigo."' ";
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
			
		 $sql = "select * from comanda;";
		 $resultados = mysqli_query($conexao,$sql)or die (mysql_error());
		
		if($resultados >=0)
	    { 
	    if(mysqli_num_rows($resultados) <= 0)
		 {
		   echo "<tr><td colspan='5'>Nenhum Comanda encontrada...</td></tr>";
		  }
		  else
		  {
		 $total = 0;
			while ($row=mysqli_fetch_array($resultados))
			{
				$CodigoComanda=$row['CodigoComanda'];
				$numerocomanda=$row['NumeroComanda'];
				$numeromesa=$row['NumeroMesa'];
				
			?>
			<tr>
				<td><p><?php echo $row['CodigoComanda'];?></p></td>
				<td><p><?php echo $row['NumeroComanda'];?></p></td>
                <td><p><?php echo $row['NumeroMesa'];?></p></td>
                                
                <td><button type="button"  data-toggle="modal"  data-target="#altera_modal" class="btn btn-info" data-action="shred" 
                data-id="<?php echo $row['CodigoComanda'];?>" data-numeromesa="<?php echo $row['NumeroMesa'];?>" data-numerocomanda="<?php echo $row['NumeroComanda'];?>"
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Alterar</button>
                  <button type="button" data-toggle="modal"  data-target="#delete" data-action="shred" 
                data-id="<?php echo $row['CodigoComanda'];?>"e class="btn btn-danger"><i class="glyphicon glyphicon-trash"> Excluir</i></button>
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
		     	
			 $sql = "delete FROM mesas where CodigoMesa= '$codigo' ";
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
		  $sql = "select * from comanda;";
		 $resultados = mysqli_query($conexao,$sql)or die (mysql_error());
	     }
		 //$sql = "SELECT * FROM cadastroclientes WHERE Nome LIKE '%".$_POST["nome"]."%'";
		 $sql = "SELECT * FROM comanda WHERE NumeroComanda ='".$_POST["nome"]."'";
		 $resultados = mysqli_query($conexao,$sql)or die (mysql_error());
		 echo $sql;
		 
		 if(mysqli_num_rows($resultados) <= 0)
		 {
		   echo "<tr><td colspan='5'>Nenhum Comanda encontrada...</td></tr>";
		  }
		  else
		  {
			while ($row=mysqli_fetch_array($resultados))
			{
				$CodigoComanda=$row['CodigoComanda'];
				$numerocomanda=$row['NumeroComanda'];
				$numeromesa=$row['NumeroMesa'];
				
			}
			?>
			<tr>
				<td><p><?php echo $row['CodigoComanda'];?></p></td>
				<td><p><?php echo $row['NumeroComanda'];?></p></td>
                <td><p><?php echo $row['NumeroMesa'];?></p></td>
                                
                <td><button type="button"  data-toggle="modal"  data-target="#altera_modal" class="btn btn-info" data-action="shred" 
                data-id="<?php echo $row['CodigoComanda'];?>" data-numeromesa="<?php echo $row['NumeroMesa'];?>" data-numerocomanda="<?php echo $row['NumeroComanda'];?>"
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Alterar</button>
                  <button type="button"  data-toggle="modal"  data-target="#delete" data-action="shred" 
                data-id="<?php echo $row['CodigoComanda'];?>"e class="btn btn-danger"><i class="glyphicon glyphicon-trash"> Excluir</i></button>
                  </td>
			
			</tr>		
			<?php
			
			
			
		}
		
	}

if($acao == 'filtrarnome')
	{
		$nome = $_POST['nome'];	
		 $sql = "SELECT * FROM comanda WHERE NumeroComanda ='".$_POST["nome"]."'";
		 $resultados = mysqli_query($sql,$conexao)or die (mysql_error());
		echo $sql;
		
		
		 if(mysqli_num_rows($resultados) <= 0)
		{
		   echo "<tr><td colspan='5'>Nenhum Comanda encontrada...</td></tr>";
		  }
		  else
		  {
			while ($row=mysqli_fetch_array($resultados))
			{
				$CodigoComanda=$row['CodigoComanda'];
				$numerocomanda=$row['NumeroComanda'];
				$numeromesa=$row['NumeroMesa'];
				
		     
			?>
			<tr>
				<td><p><?php echo $row['CodigoComanda'];?></p></td>
				<td><p><?php echo $row['NumeroComanda'];?></p></td>
                <td><p><?php echo $row['NumeroMesa'];?></p></td>
                                
                <td><button type="button"  data-toggle="modal"  data-target="#altera_modal" class="btn btn-info" data-action="shred" 
                data-id="<?php echo $row['CodigoComanda'];?>" data-numeromesa="<?php echo $row['NumeroMesa'];?>" data-numerocomanda="<?php echo $row['NumeroComanda'];?>"
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Alterar</button>
                  <button type="button"  data-toggle="modal"  data-target="#delete" data-action="shred" 
                data-id="<?php echo $row['CodigoComanda'];?>"e class="btn btn-danger"><i class="glyphicon glyphicon-trash"> Excluir</i></button>
                  </td>
			
			</tr>		
			<?php
			}
		  }
		}
		
	
	//	break;	
	 //  default:
	 //  echo 'Erro ao enviar';
	 //  break;
//}

?>