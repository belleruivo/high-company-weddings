<!DOCTYPE html>
<html lang="PT-BR">
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="./src/images/icons/icon_site.gif">
		<link rel="stylesheet" href="./src/css/style_bolo.css">
		<script src="https://kit.fontawesome.com/965f56d99d.js" crossorigin="anonymous"></script>
	</head>
    <body>
		<?php
			include_once ('header.html');
		?>
		<section class="main">
			<section>
				<h1>Receitas</h1>
			</section>
			<figure>
				<a href="pag2_receita.php">
					<img id="receita_capa" src="./src/images/receita/capa_receita.png" alt="Capa do livro de receitas" width= "450px" height="750px">
				</a>
			</figure><br>
			<a href="pag2_receita.php" id="link">
				<section id="alinhando_botao_receita">
					<span class="botao_receita">
						Próximo
					</span>
				</section>
			</a>
			<br>
		</section>
		<br>
		<?php
			include_once ('footer.html');
		?>
    </body>
</html>