<?php
// declarando na variavel o nome da pasta que vai receber os arquivos
$diretorio = "arquivos/";

// operador ternario. verifica se o arquivo existe ( isset verifica se é vazio )
$arquivo = isset($_FILES['arquivo']) ? $_FILES['arquivo'] : FALSE;

// verifica todos os arquivos selecionados para upload
for ($k = 0; $k < count($arquivo['name']); $k++) {
	
	$destino = $diretorio . "/" . $arquivo['name'][$k];
	if (move_uploaded_file($arquivo['tmp_name'][$k], $destino)) {
		echo "Arquivo enviado com sucesso!";
	} else {
		echo "Erro ao enviar o arquivo.";
	}
}
?>