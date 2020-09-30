<?php

header('content-type: application/json; charset=utf-8');
		
header("access-control-allow-origin: *");	
		
include("conexao1.php");
include("conexao.php");
		
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
		     $nome = trim($_POST["nome"]);
		     $Rg = trim($_POST["Rg"]);
		     $Cpf = trim($_POST["CPF"]);
		     $CNPJ = trim($_POST["CNPJ"]);
		     $RazaoSocial = trim($_POST["RazaoSocial"]);
		     $NomeFantasia = trim($_POST["NomeFantasia"]);
		     $InscricaoEstadual = trim($_POST["InscricaoEstadual"]);
		     $cep = trim($_POST["cep"]);
		     $endereco = trim($_POST["endereco"]);
			 $bairro = trim($_POST["bairro"]);
			 $cidade = trim($_POST["cidade"]);
			 $numero = trim($_POST["numero"]);
			 $telefone = trim($_POST["telefone"]); 
			 $celular = trim($_POST["celular"]);
			 $email = trim($_POST["email"]);
			
			 //$sql = "SELECT * FROM usuarios WHERE usuario='".$_POST['usuario']."' AND senha='".$_POST['senha']."'";
			 	$sql='INSERT INTO cadastroclientes(DataCadastro,Nome,Cpf,Rg,cep,endereco,bairro,cidade,numero,CNPJ,RazaoSocial,NomeFantasia,InscEstadual,Telefone,Celular,Email) 
				   VALUES ("'.$DataCadastro.'","'.$nome.'","'.$Cpf.'","'.$Rg.'","'.$cep.'","'.$endereco.'", "'.$bairro.'","'.$cidade.'","'.$numero.'","'.$CNPJ.'","'.$RazaoSocial.'","'.$NomeFantasia.'","'.$InscricaoEstadual.'","'.$telefone.'","'.$celular.'","'.$email.'")';
				//echo $sql;
				
				$resultados = mysql_query($sql,$conexao)or die (mysql_error());
			 //echo $sql;
			
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
		     $codigo = trim($_POST["codigo"]);
		     $nome = trim($_POST["nome"]);
		     $Rg = trim($_POST["Rg"]);
		     $Cpf = trim($_POST["CPF"]);
		     $CNPJ = trim($_POST["CNPJ"]);
		     $RazaoSocial = trim($_POST["RazaoSocial"]);
		     $NomeFantasia = trim($_POST["NomeFantasia"]);
		     $InscricaoEstadual = trim($_POST["InscricaoEstadual"]);
		     $cep = trim($_POST["cep"]);
		     $endereco = trim($_POST["endereco"]);
			 $bairro = trim($_POST["bairro"]);
			 $cidade = trim($_POST["cidade"]);
			 $numero = trim($_POST["numero"]);
			 $telefone = trim($_POST["telefone"]); 
			 $celular = trim($_POST["celular"]);
			 $email = trim($_POST["email"]);
			
			 	
			 $sql = "UPDATE cadastroclientes set DataCadastro='".$DataCadastro."',Nome='".$nome."',Cpf='".$Cpf."',
			 Rg='".$Rg."',cep='".$cep."',endereco='".$endereco."',bairro='".$bairro."',numero='".$numero."',
			 CNPJ='".$CNPJ."',RazaoSocial='".$RazaoSocial."',NomeFantasia='".$NomeFantasia."',InscEstadual='".$InscricaoEstadual."',
			 telefone='".$telefone."',celular='".$celular."',email='".$email."' where CodigoClientes= '".$codigo."' ";
			 //$resultados = mysql_query($sql,$conexao)or die (mysql_error());
			 
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
			
		 $sql = "select * from cadastroclientes;";
		 $resultados = mysql_query($sql,$conexao)or die (mysql_error());
		
		if($resultados >=0)
	  { 
	    //echo 1;
		if(mysql_num_rows ($resultados)>=0)
		{	
		$total = 0;
		$clientes = array(); 
			while ($row=mysql_fetch_array($resultados, MYSQL_ASSOC))
			{
				$row_array['CodigoClientes'] = $row['CodigoClientes']; 
				$row_array['Nome'] = utf8_encode($row["Nome"]); 
				$row_array['Endereco'] = $row["Endereco"]; 
				$row_array['Cpf'] = $row['Cpf']; 
				$row_array['Rg'] = $row['Rg']; 
				$row_array['CNPJ'] = $row['CNPJ'];
				$row_array['RazaoSocial'] = utf8_encode($row["RazaoSocial"]); 
				$row_array['NomeFantasia'] = utf8_encode($row["NomeFantasia"]); 
				$row_array['InscEstadual'] = $row['InscEstadual'];
				$row_array['Cep'] = $row['Cep'];
				$row_array['Bairro'] = utf8_encode($row["Bairro"]); 
				$row_array['Cidade'] = utf8_encode($row["Cidade"]); 
				$row_array['Numero'] = $row['Numero'];
				$row_array['Telefone'] = $row['Telefone'];
				$row_array['Celular'] = $row['Celular'];
				$row_array['Email'] = $row['Email'];
				$row_array["sucesso"] = 1;
				
				
				array_push($clientes,$row_array); 
			
            }
			
			$total =$total +1;
			$arr = array(); 
            $arr['total'] = $total; 
			
			// echo json_encode($arr);
			echo json_encode($clientes);
		  }
		}
		else
		{
		
			 $erro["erro"] = 0;
			$arr = array(
				 $erro
			);
			
				
		   echo json_encode($arr);
		}
	}
	if($acao == 'excluir')
	{
	  
		     $codigo = trim($_POST["codigo"]);
		     	
			 $sql = "delete FROM cadastroclientes where CodigoClientes= '$codigo' ";
			 //$resultados = mysql_query($sql,$conexao)or die (mysql_error());
			 
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
		  $sql = "select * from cadastroclientes;";
		 $resultados = mysql_query($sql,$conexao)or die (mysql_error());
	     }
		 //$sql = "SELECT * FROM cadastroclientes WHERE Nome LIKE '%".$_POST["nome"]."%'";
		 $sql = "SELECT * FROM cadastroclientes WHERE Nome ='".$_POST["nome"]."'";
		 $resultados = mysql_query($sql,$conexao)or die (mysql_error());
		 echo $sql;
		 
		 if(mysql_num_rows($resultados) <= 0)
		 {
		   echo "Nenhum Cliente encontrado...";
		  }
		  else
		  {
			while ($row=mysql_fetch_array($resultados))
			{

				$CodigoClientes=$row['CodigoClientes'];
				$nome=$row['Nome'];
				$endereco=$row['Endereco'];
				$cpf=$row['Cpf'];
				$Rg=$row['Rg'];
				$Cpf = $row["CPF"];
				$CNPJ = $row["CNPJ"];
				$RazaoSocial = $row["RazaoSocial"];
				$NomeFantasia =$row["NomeFantasia"];
				$inscricaoEstadual = $row["InscEstadual"];
				$cep = $row["Cep"];
				$endereco = $row["Endereco"];
				$bairro = $row["Bairro"];
				$cidade = $row["Cidade"];
				$numero = $row["Numero"];
				$telefone = $row["Telefone"]; 
				$celular = $row["Celular"];
				$email = $row["Email"];
			}
			?>
			<tr>
				<td><p><?php echo $row['CodigoClientes'];?></p></td>
				<td><p><?php echo htmlentities($row['Nome']);?></p></td>
                <td><p><?php echo htmlentities($row['Endereco']);?></p></td>
                <td><p><?php echo $row['Cpf'];?></p></td>
                <td><p><?php echo $row['Rg'];?></p></td>
                                
                <td>	
                <td><button type="button"  data-toggle="modal"  data-target="#altera_modal" class="btn btn-info" data-action="shred" 
                data-id="<?php echo $row['CodigoClientes'];?>" data-nome="<?php echo $row['Nome'];?>"
                data-cep="<?php echo $row['Cep'];?>" data-cpf="<?php echo $row['Cpf'];?>" data-Rg="<?php echo $row['Rg'];?>"
                data-CNPJ="<?php echo $row['CNPJ'];?>" data-RazaoSocial="<?php echo $row['RazaoSocial'];?>" data-inscricaoEstadual="<?php echo $row['InscEstadual'];?>"
                data-endereco="<?php echo $row['Endereco'];?>" data-bairro="<?php echo $row['Bairro'];?>" data-cidade="<?php echo $row['Cidade'];?>"
                data-numero="<?php echo $row['Numero'];?>" data-telefone="<?php echo $row['Telefone'];?>" data-celular="<?php echo $row['Celular'];?>" data-email="<?php echo $row['Email'];?>">
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Alterar</button>
                  <button type="button" data-toggle="modal"  data-target="#delete" data-action="shred" 
                data-id="<?php echo $row['CodigoClientes'];?>"e class="btn btn-danger"><i class="glyphicon glyphicon-trash"> Excluir</i></button>
                  </td>
			 
                </td>
			</tr>		
			<?php
			
			
			
		}
		
	}

if($acao == 'filtrarnome')
	{
		$nome = $_POST['nome'];	
		 $sql = "select * from cadastroclientes WHERE Nome LIKE '%".$_POST["nome"]."%';";
		 $resultados = mysql_query($sql,$conexao)or die (mysql_error());
		echo $sql;
		
		
		 if(mysql_num_rows($resultados) <= 0)
		{
		   echo "Nenhum Cliente encontrado...";
		  }
		  else
		  {
			while ($row=mysql_fetch_array($resultados))
			{
				$CodigoClientes=$row['CodigoClientes'];
				$nome=$row['Nome'];
				$endereco=$row['Endereco'];
				$cpf=$row['Cpf'];
				$Rg=$row['Rg'];
				$Cpf = $row["CPF"];
				$CNPJ = $row["CNPJ"];
				$RazaoSocial = $row["RazaoSocial"];
				$NomeFantasia =$row["NomeFantasia"];
				$inscricaoEstadual = $row["InscEstadual"];
				$cep = $row["Cep"];
				$endereco = $row["Endereco"];
				$bairro = $row["Bairro"];
				$cidade = $row["Cidade"];
				$numero = $row["Numero"];
				$telefone = $row["Telefone"]; 
				$celular = $row["Celular"];
				$email = $row["Email"];
		
			?>
			<tr>
				<td><p><?php echo $row['CodigoClientes'];?></p></td>
				<td><p><?php echo htmlentities($row['Nome']);?></p></td>
                <td><p><?php echo htmlentities($row['Endereco']);?></p></td>
                <td><p><?php echo $row['Cpf'];?></p></td>
                <td><p><?php echo $row['Rg'];?></p></td>
                                
                <td>	
                <td><button type="button"  data-toggle="modal"  data-target="#altera_modal" class="btn btn-info" data-action="shred" 
                data-id="<?php echo $row['CodigoClientes'];?>" data-nome="<?php echo $row['Nome'];?>"
                data-cep="<?php echo $row['Cep'];?>" data-cpf="<?php echo $row['Cpf'];?>" data-Rg="<?php echo $row['Rg'];?>"
                data-CNPJ="<?php echo $row['CNPJ'];?>" data-RazaoSocial="<?php echo $row['RazaoSocial'];?>" data-inscricaoEstadual="<?php echo $row['InscEstadual'];?>"
                data-endereco="<?php echo $row['Endereco'];?>" data-bairro="<?php echo $row['Bairro'];?>" data-cidade="<?php echo $row['Cidade'];?>"
                data-numero="<?php echo $row['Numero'];?>" data-telefone="<?php echo $row['Telefone'];?>" data-celular="<?php echo $row['Celular'];?>" data-email="<?php echo $row['Email'];?>">
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Alterar</button>
                  <button type="button" data-toggle="modal"  data-target="#delete" data-action="shred" 
                data-id="<?php echo $row['CodigoClientes'];?>"e class="btn btn-danger"><i class="glyphicon glyphicon-trash"> Excluir</i></button>
                  </td>
			 
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