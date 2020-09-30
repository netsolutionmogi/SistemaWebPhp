<?php
define("localhost","localhost");
define("alexandre","alexandre");
define("senha","mysql01");

$conexao = mysql_connect(localhost,alexandre,senha);
if($conexao){
mysql_select_db("alexandre",$conexao);
}else{
echo 'Não foi possivel conectar: ' . mysql_error();
}
?>
