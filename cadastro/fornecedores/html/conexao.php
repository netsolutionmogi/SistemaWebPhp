<?php
$localhost="localhost";
$root="root";
$senha="123456";

$conexao = mysql_connect($localhost,$root,$senha);
if($conexao){
mysql_select_db("netcomanda",$conexao);
}else{
echo 'Não foi possivel conectar: ' . mysql_error();
}
?>
