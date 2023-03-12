<!DOCTYPE html>
<html lang="pt-BR">
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
				<img id="receita_capa" src="./src/images/receita/pag3_certa.png" alt="Página 3 do Livro de Receitas" width= "800px" height="700px">  
			</figure><br>
			<span id="inline">
				<a href="pag2_receita.php" id="link">
					<section id="alinhando_segundo_botao_receita">
						<span class="botao_receita">
							Anterior
						</span>
					</section>
				</a>
				<a href="pag4_receita.php" id="link">
					<section>
						<span class="botao_receita">
							Próximo
						</span>
					</section>
				</a>
			</span>
			<br>
		</section>
		<br>
		<?php
			include_once ('footer.html');
		?>
    </body>
</html>