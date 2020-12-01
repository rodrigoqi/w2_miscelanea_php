<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<!--Tags básicas do head-->
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Aqui o título da aba</title>
		<!--Link dos nossos arquivos CSS e JS padrão-->
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<script src="js/scripts.js"></script>
		<!--Link dos arquivos CSS e JS do Bootstrap-->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script src="js/bootstrap.min.js"></script>
		<!--Link do JQuery-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
			<!--Crie suas rows e cols aqui dentro do container principal-->
			<div class="row">
				<div class="col-md-12">
					<h1>Introdução ao PHP</h1>
					<h2>Miscelânea de exemplos básicos de uso</h2>
				</div>
			</div>

			<div class="row" id="vermelha">
				<div class="col-md-12">
					<h3>Injetando um texto no HTML com o PHP</h3>

					<?php
						echo "<br>";
						echo "mensagem inserida aqui com o uso do echo";
					?>
				</div>
			</div>

			<div class="row" id="laranja">
				<div class="col-md-12">
					<h3>Utilizando variáveis em PHP</h3>
					<br>
					
					<?php
						echo "Essa é uma operação de teste";
						echo "<br><br>";
						
						$v1 = 10;
						$v2 = 12;
						$resultado = $v1 + $v2;

						echo "O resultado é " . $resultado;
						echo "<br>";
						echo "O resultado é $resultado, que legal, não precisei concatenar";

					?>

				</div>
			</div>

			<div class="row" id="amarela">
				<div class="col-md-12">
					<h3>Calculando a nota média</h3>

					<?php
						$n1 = 7.5;
						$n2 = 5.3;
						$media = ($n1 + $n2) / 2;

						if($media>=6){
							echo "A média é <span id='aprovado'>$media</span>";
						} else {
							echo "A média é <span id='reprovado'>$media</span>";
						}
					?>

				</div>
			</div>

			<div class="row" id="roxa">
				<div class="col-md-12">
					<h3>Listando os números pares entre 0 e 50 com PHP</h3>

					<?php
						for($i=0; $i<=50; $i++){
							if($i % 2 == 0){
								echo "<br>$i";
							}
						}
					?>
				</div>
			</div>

			<div class="row" id="lilas">
				<div class="col-md-12">
					<h3>Sorteio de números aleatórios</h3>

					<?php

						$sorteado = 1;

						while($sorteado!=0){
							$sorteado = rand(0,10);
							echo "$sorteado<br>";
						}

					?>

				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<h3>Cores aleatórias (x100)</h3>


					<?php
						
						/*for($i=1; $i<=100; $i++){
							
							$r = dechex(rand(5,15)) . dechex(rand(5,15));
							$g = dechex(rand(5,15)) . dechex(rand(5,15));
							$b = dechex(rand(5,15)) . dechex(rand(5,15));

							echo "<font color=#$r$g$b> Desenvolvimento Web II </font>";
						}*/

						for($i=1; $i<=100; $i++){
							$cor = rand(0, 16777215);
							echo "<font color=$cor> Desenvolvimento Web II </font>";
						}
						
					?>



				</div>
			</div>

		</div>		
	</body>
</html>