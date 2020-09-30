<?php
// Verifica se tem algum parâmetro
if ( ! isset( $_GET ) || empty( $_GET ) || ! is_array( $_GET ) ) {
	exit();
}

// Extrai as variáveis de $_GET
extract( $_GET );

// Variáveis disponíveis
//echo $cliente;
//echo $categoria;
//echo $fonte;

// Abaixo vou apenas exibir valores de qualquer maneira para exemplificar
// Mas você pode fazer o que quiser com os parâmetros acima

// Valores fictícios
$clientes = array(
	array(
		'value' => 'Maria José',
		'sobrenome' => 'Silva',
		'nome_cliente' => 'Maria José Silva',
	),
	array(
		'value' => 'João José',
		'sobrenome' => 'Silveira',
		'nome_cliente' => 'João José Silveira',
	),
	array(
		'value' => 'Ana Maria',
		'sobrenome' => 'Miranda',
		'nome_cliente' => 'Ana Maria Miranda',
	),
);

// Deve-se retornar dados no formato jSON
echo json_encode( $clientes );