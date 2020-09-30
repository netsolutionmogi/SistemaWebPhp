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
			 $DataNasc = trim($_POST["DataNasc"]);
			 $DataNascim = implode("-", array_reverse(explode("/", $DataNasc)));
			 $DataAdmissao = trim($_POST["DataAdmissao"]);
			 $DataAdmi = implode("-", array_reverse(explode("/", $DataAdmissao)));
		     $nome = trim($_POST["nome"]);
			 $Cpf = trim($_POST["CPF"]);
		     $Rg = trim($_POST["Rg"]);
		     $endereco = trim($_POST["endereco"]);
			 $bairro = trim($_POST["bairro"]);
			 $cidade = trim($_POST["cidade"]);
			 $cep = trim($_POST["cep"]);
		     $telefone = trim($_POST["telefone"]); 
			 $celular = trim($_POST["celular"]);
			 $email = trim($_POST["email"]);
			 $cargo = trim($_POST["cargo"]);
			
			 //$sql = "SELECT * FROM usuarios WHERE usuario='".$_POST['usuario']."' AND senha='".$_POST['senha']."'";
			 	$sql='INSERT INTO cadastrofuncionarios(DataCadastro,DataNasc,Nome,Cpf,Rg,cep,endereco,bairro,cidade,numero,Telefone,Celular,Email) 
				   VALUES ("'.$DataCadastro.'","'.$DataNascim.'","'.$nome.'","'.$Cpf.'","'.$Rg.'","'.$Sexo.'","'.$cep.'","'.$endereco.'", "'.$bairro.'","'.$cidade.'","'.$numero.'","'.$telefone.'","'.$celular.'","'.$email.'")';
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
			 $DataNasc = trim($_POST["DataNasc"]);
			 $DataNascim = implode("-", array_reverse(explode("/", $DataNasc)));
			 $DataAdmissao = trim($_POST["DataAdmissao"]);
			 $DataAdmi = implode("-", array_reverse(explode("/", $DataAdmissao)));
		     $nome = trim($_POST["nome"]);
			 $Cpf = trim($_POST["CPF"]);
		     $Rg = trim($_POST["Rg"]);
		     $endereco = trim($_POST["endereco"]);
			 $bairro = trim($_POST["bairro"]);
			 $cidade = trim($_POST["cidade"]);
			 $cep = trim($_POST["cep"]);
		     $telefone = trim($_POST["telefone"]); 
			 $celular = trim($_POST["celular"]);
			 $email = trim($_POST["email"]);
			 $cargo = trim($_POST["cargo"]);;
			
			 	
			 $sql = "UPDATE cadastrofuncionarios set DataCadastro='".$DataCadastro."',DataNasc='".$DataNascim."',Nome='".$nome."',Cpf='".$Cpf."',
			 Rg='".$Rg."',Sexo='".$Sexo."',cep='".$cep."',endereco='".$endereco."',bairro='".$bairro."',numero='".$numero."',
			 telefone='".$telefone."',celular='".$celular."',email='".$email."' where CodigoFuncionario= '".$codigo."' ";
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
			
		 $sql = "select * from cadastrovendedor;";
		 $resultados = mysqli_query($conexao,$sql)or die (mysql_error());
		
		if($resultados >=0)
	    { 
	    if(mysqli_num_rows($resultados) <= 0)
		 {
		   echo "<tr><td colspan='5'>Nenhum Vendedor encontrado...</td></tr>";
		  }
		  else
		  {
		 $total = 0;
			while ($row=mysqli_fetch_array($resultados))
			{
				$Codigovendedor=$row['Codigovendedor'];
				$DataNasc=inverteData($row['DataNasc']);
				$DataAdmissao=inverteData($row['DataAdmissao']);
				$nome=$row['Nome'];
				$endereco=$row['Endereco'];
				$cpf=$row['Cpf'];
				$Rg=$row['Rg'];
				$Sexo=$row['Sexo'];
				$cep = $row["Cep"];
				$endereco = $row["Endereco"];
				$bairro = $row["Bairro"];
				$cidade = $row["Cidade"];
				$numero = $row["Numero"];
				$telefone = $row["Telefone"]; 
				$celular = $row["Celular"];
				$email = $row["Email"];
				$cargo = $row["cargo"];
		
			?>
			<tr>
				<td><p><?php echo $row['Codigovendedor'];?></p></td>
				<td><p><?php echo htmlentities($row['Nome']);?></p></td>
                <td><p><?php echo htmlentities($row['Endereco']);?></p></td>
                <td><p><?php echo $row['Cpf'];?></p></td>
                <td><p><?php echo $row['Rg'];?></p></td>
                                
                <td>	</td>
                <td><button type="button"  data-toggle="modal"  data-target="#altera_modal" class="btn btn-info" data-action="shred" 
                data-id="<?php echo $row['Codigovendedor'];?>" data-nome="<?php echo $row['Nome'];?>  " data-cargo="<?php echo $row['cargo'];?>  "
                data-cep="<?php echo $row['Cep'];?>" data-cpf="<?php echo $row['Cpf'];?>" data-DataNasc="<?php echo $row['DataNasc'];?>"  data-Rg="<?php echo $row['Rg'];?>"
                data-endereco="<?php echo $row['Endereco'];?>" data-bairro="<?php echo $row['Bairro'];?>" data-cidade="<?php echo $row['Cidade'];?>"
                data-DataAdmissao="<?php echo $row['DataAdmissao'];?>" data-telefone="<?php echo $row['Telefone'];?>" data-celular="<?php echo $row['Celular'];?>" data-email="<?php echo $row['Email'];?>">
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Alterar</button>
                  <button type="button" data-toggle="modal"  data-target="#delete" data-action="shred" 
                data-id="<?php echo $row['Codigovendedor'];?>"e class="btn btn-danger"><i class="glyphicon glyphicon-trash"> Excluir</i></button>
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
		     	
			 $sql = "delete FROM cadastrovendedor where CodigoFuncionario= '$codigo' ";
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
		  $sql = "select * from cadastrovendedor;";
		 $resultados = mysqli_query($conexao,$sql)or die (mysql_error());
	     }
		 //$sql = "SELECT * FROM cadastroclientes WHERE Nome LIKE '%".$_POST["nome"]."%'";
		 $sql = "SELECT * FROM cadastrovendedor WHERE Nome ='".$_POST["nome"]."'";
		 $resultados = mysqli_query($conexao,$sql)or die (mysql_error());
		 echo $sql;
		 
		 if(mysqli_num_rows($resultados) <= 0)
		 {
		   echo "<tr><td colspan='5'>Nenhum Vendedor encontrado...</td></tr>";
		  }
		  else
		  {
			while ($row=mysqli_fetch_array($resultados))
			{

				$Codigovendedor=$row['Codigovendedor'];
				$DataNasc=inverteData($row['DataNasc']);
				$DataAdmissao=inverteData($row['DataAdmissao']);
				$nome=$row['Nome'];
				$endereco=$row['Endereco'];
				$cpf=$row['Cpf'];
				$Rg=$row['Rg'];
				$Sexo=$row['Sexo'];
				$cep = $row["Cep"];
				$endereco = $row["Endereco"];
				$bairro = $row["Bairro"];
				$cidade = $row["Cidade"];
				$numero = $row["Numero"];
				$telefone = $row["Telefone"]; 
				$celular = $row["Celular"];
				$email = $row["Email"];
				$cargo = $row["cargo"];
			}
			?>
			<tr>
				<td><p><?php echo $row['Codigovendedor'];?></p></td>
				<td><p><?php echo htmlentities($row['Nome']);?></p></td>
                <td><p><?php echo htmlentities($row['Endereco']);?></p></td>
                <td><p><?php echo $row['Cpf'];?></p></td>
                <td><p><?php echo $row['Rg'];?></p></td>
                                
                <td>	</td>
                <td><button type="button"  data-toggle="modal"  data-target="#altera_modal" class="btn btn-info" data-action="shred" 
                data-id="<?php echo $row['Codigovendedor'];?>" data-nome="<?php echo $row['Nome'];?>  " data-cargo="<?php echo $row['cargo'];?>  "
                data-cep="<?php echo $row['Cep'];?>" data-cpf="<?php echo $row['Cpf'];?>" data-DataNasc="<?php echo $row['DataNasc'];?>"  data-Rg="<?php echo $row['Rg'];?>"
                data-endereco="<?php echo $row['Endereco'];?>" data-bairro="<?php echo $row['Bairro'];?>" data-cidade="<?php echo $row['Cidade'];?>"
                data-DataAdmissao="<?php echo $row['DataAdmissao'];?>" data-telefone="<?php echo $row['Telefone'];?>" data-celular="<?php echo $row['Celular'];?>" data-email="<?php echo $row['Email'];?>">
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Alterar</button>
                  <button type="button" data-toggle="modal"  data-target="#delete" data-action="shred" 
                data-id="<?php echo $row['Codigovendedor'];?>"e class="btn btn-danger"><i class="glyphicon glyphicon-trash"> Excluir</i></button>
                  </td>
			
			</tr>	
			<?php
			
			
			
		}
		
	}

if($acao == 'filtrarnome')
	{
		$nome = $_POST['nome'];	
		 $sql = "select * from cadastrovendedor WHERE Nome LIKE '%".$_POST["nome"]."%';";
		 $resultados = mysqli_query($conexao,$sql)or die (mysql_error());
		echo $sql;
		
		
		 if(mysqli_num_rows($resultados) <= 0)
		{
		   echo "<tr><td colspan='5'>Nenhum Vendedor encontrado...</td></tr>";
		  }
		  else
		  {
			while ($row=mysqli_fetch_array($resultados))
			{
				$Codigovendedor=$row['Codigovendedor'];
				$DataNasc=inverteData($row['DataNasc']);
				$DataAdmissao=inverteData($row['DataAdmissao']);
				$nome=$row['Nome'];
				$endereco=$row['Endereco'];
				$cpf=$row['Cpf'];
				$Rg=$row['Rg'];
				$Sexo=$row['Sexo'];
				$cep = $row["Cep"];
				$endereco = $row["Endereco"];
				$bairro = $row["Bairro"];
				$cidade = $row["Cidade"];
				$numero = $row["Numero"];
				$telefone = $row["Telefone"]; 
				$celular = $row["Celular"];
				$email = $row["Email"];
				$cargo = $row["cargo"];
		
			?>
			<tr>
				<td><p><?php echo $row['Codigovendedor'];?></p></td>
				<td><p><?php echo htmlentities($row['Nome']);?></p></td>
                <td><p><?php echo htmlentities($row['Endereco']);?></p></td>
                <td><p><?php echo $row['Cpf'];?></p></td>
                <td><p><?php echo $row['Rg'];?></p></td>
                                
                <td>	</td>
                <td><button type="button"  data-toggle="modal"  data-target="#altera_modal" class="btn btn-info" data-action="shred" 
                data-id="<?php echo $row['Codigovendedor'];?>" data-nome="<?php echo $row['Nome'];?>  " data-cargo="<?php echo $row['cargo'];?>  "
                data-cep="<?php echo $row['Cep'];?>" data-cpf="<?php echo $row['Cpf'];?>" data-DataNasc="<?php echo $row['DataNasc'];?>"  data-Rg="<?php echo $row['Rg'];?>"
                data-endereco="<?php echo $row['Endereco'];?>" data-bairro="<?php echo $row['Bairro'];?>" data-cidade="<?php echo $row['Cidade'];?>"
                data-DataAdmissao="<?php echo $row['DataAdmissao'];?>" data-telefone="<?php echo $row['Telefone'];?>" data-celular="<?php echo $row['Celular'];?>" data-email="<?php echo $row['Email'];?>">
                  <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Alterar</button>
                  <button type="button" data-toggle="modal"  data-target="#delete" data-action="shred" 
                data-id="<?php echo $row['Codigovendedor'];?>"e class="btn btn-danger"><i class="glyphicon glyphicon-trash"> Excluir</i></button>
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