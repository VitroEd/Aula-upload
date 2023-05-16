<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- enctype="multipart/form-data" é obrigatório mas n lembro o pq -->
<!-- value="99999999"> representa o peso do arquivo, usasdo pra impedir q um arquivo mais pesado seja enviado -->
<!-- name="arquivo[]" armazena os arquivos num vetor, começa do arquivo 0 -->
<!-- multiple="multiple" permite enviar varios arquivos -->

<form name="upload" enctype="multipart/form-data" method="post" action="upload.php">
        <input type="hidden" name="MAX_FILE_SIZE" value="99999999">
        <input type="file" name="arquivo[]" multiple="multiple" />
        <input name="enviar" type="submit" value="Enviar">		
</form>

</body>
</html>

