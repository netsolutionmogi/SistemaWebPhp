<?php

//$localhost="localhost";
//$root="root";
//$senha="123456";
//$database="netcomanda";

$localhost="localhost";
$root="netcomanda";
$senha="net2012m";
$database="netcomanda";


$conexao = mysql_connect($localhost,$root,$senha);
if($conexao){
mysql_select_db($database,$conexao);
}else{
echo 'Não foi possivel conectar: ' . mysql_error();
}


?>
