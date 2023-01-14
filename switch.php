<!DOCTYPE html>
	<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<title>Carros</title>
		<link rel="stylesheet" type="text/css" href="estilo/estilo.css"/>
	</head>
		<body>	
			<?php
				$modelo=$_POST["carro"];
				
				switch ($modelo) {
					case '1':
						echo "";?><hr class="menor"/><?php echo "<h1>Corsa";?><hr class="menor"/><?php echo "</h1>";
						echo "tu escolheu o pior dos 3 carros ";?><hr class="menor"/><?php echo "<img src='https://cdn.betterttv.net/emote/5ec39a9db289582eef76f733/2x'/>";?><hr class="menor"/><?php echo "";
						break;
					case '2':
						echo "";?><hr class="menor"/><?php echo "<h1>Prisma";?><hr class="menor"/><?php echo "</h1>";
						echo "tu escolheu isso ao invés de uma ferrari? impressionante ";?><hr class="menor"/><?php echo "<img src='https://cdn.betterttv.net/frankerfacez_emote/558117/2'/>";?><hr class="menor"/><?php echo "";
						break;
					case '3':
						echo "";?><hr class="menor"/><?php echo "<h1>Ferrari";?><hr class="menor"/><?php echo "</h1>";
						echo "Tu escolheu o melhor carro, parabéns!!! ";?><hr class="menor"/><?php echo "<img src='https://cdn.betterttv.net/emote/603461887c74605395f329e6/2x'/> <img src='https://cdn.betterttv.net/emote/55b6f480e66682f576dd94f5/2x'/>";?><hr class="menor"/><?php echo "";
						//
						break;
					default:
						echo "";?><hr class="menor"/><?php echo "<h1>Você digitou algo errado";?><hr class="menor"/><?php echo "</h1>";
						echo "Qual a dificuldade de só escolher entre os 3 modelos? ";?><hr class="menor"/><?php echo " <img src='https://cdn.betterttv.net/frankerfacez_emote/405602/2'/>";?><hr class="menor"/><?php echo "";

						break;
				}
			?>
		</body>
	</html>