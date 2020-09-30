<!doctype html>
<html>
<head>
	<title>Autocomplete - Tutsup</title>
	
	<meta charset="UTF-8">
	
	<!-- CSS do jQuery -->
	<link rel="stylesheet" href="pasta_jquery_ui/jquery-ui.css">
	
	<!-- JS do jQuery -->
	<script src="pasta_jquery_ui/external/jquery/jquery.js"></script>
	
	<!-- JS do jQuery UI -->
	<script src="pasta_jquery_ui/jquery-ui.js"></script>
</head>
<body>

<input data-categoria="Suporte" data-fonte="Página inicial" name="cliente" class="cliente"> 
<script>
// URL para a busca
var busca_url = 'busca.php';

// Função de busca
var busca_funcao = function( request, response ) {
	$.ajax({
		url: busca_url,
		type: 'GET',
		dataType: "json",
		data: {
			// Parâmetro direto
			cliente: request.term,
			
			// Capturando parâmetro do input
			categoria: this.element.attr('data-categoria'),
			
			// Capturando outro parâmetro do input
			fonte: this.element.attr('data-fonte')
		},	
		success: function(data) {
			response(data);
		}	
	});
}

$( ".cliente" ).autocomplete({
	source: busca_funcao, 
	minLength: 1,
	select: function( event, ui ) {
		// Quando for selecionado, faça:
		alert( ui.item.nome_cliente );
	}
});
</script>

</body>
</html>