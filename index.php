<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <title>Jogo da Forca</title>

    <link href="https://fonts.googleapis.com/css?family=Cabin|Gloria+Hallelujah" rel="stylesheet"> 
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Jogo da Forca</h1>
    <form action="start.php" method="POST" class="escolha-palavra-container" style="display: block;">
		<h2>Digite abaixo Seu nome: </h2>	
		
		<input type="text" type="text" id="palavra-input" maxlength="40"/>
		<div id="app" class="btn-jogar-container btn-jogar">
			<button type="submit" id="btn-jogar" class="btn" onclick="sla.php">
				Começar <i class="fa fa-play" aria-hidden="true"></i></button>
		</div>
	</form>
	
</body>
<script src="main.js"></script>
</html>