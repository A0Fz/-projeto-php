<?php

	$titulo = "Título da pagina";
	$tituloConteudo = "<h1>Titulo do texto</h1>";
	$conteudo = "<p>GIT - Versionamento</p>";
?>
<html>
<head>
	<title><?php echo $titulo ?></title>
	<meta charset="utf-8" />
</head>
<body>
<?php
	echo $tituloConteudo;
	echo $conteudo;
?>
</body>
</html>