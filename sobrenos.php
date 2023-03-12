<!DOCTYPE html>
<html lang="PT-BR">
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="./src/images/icons/icon_site.gif">
		<link rel="stylesheet" href="./src/css/style_bolo.css">
		<script src="https://kit.fontawesome.com/965f56d99d.js" crossorigin="anonymous"></script>
		<style>
			@font-face{
				font-family: BigShoulderDisplay;
				src: url(./src/fonts/BigShouldersDisplay-VariableFont_wght.ttf);
			}

			@font-face{
				font-family: Manrope;
				src: url(./src/fonts/ManropeFont.ttf);
			}

			body {
				margin: 0;
				padding: 0;
				font-family: "BigShoulderDisplay";
				height: 100px;
			}

			.main_video{
				padding: 0 80px;
				text-align: justify;
				font-weight: bold;	
				font-size: 18px;
				color: rgb(104, 104, 104);
				position: relative;
				min-height: 100vh;
			}

			.menu ul li a{
				color: rgb(104, 104, 104);
				text-decoration: none;
				padding: 30px 5px;
				display: inline-block;
				transition:  0.5s ease-in-out;
				font-family: "BebasNeue";
				margin: 0;
				box-sizing: border-box;
				font-size: 20px;
				position: relative;
				width: 95px;
				z-index: 10;
			}
			
			.banner {
				margin-top: 0;
				padding-top: 50px;
				width: 100%;
				height: 100vh;
				overflow: hidden;
				display: flex;
				justify-content: center;
				align-items: center;
			}

			.banner video {
				position: absolute;
				top: 0;
				left: 0;
				object-fit: cover;
				width: 100%;
			}

			.banner .content {
				position: relative;
				z-index: 2;
				max-width: 1000px;
				margin: 0 auto;
				text-align: center;
				margin-top: -8.5%;
			}

			.banner .content h1 {
				margin: 0;
				padding: 0;
				font-size: 4em;
				margin-top: -8.5%;
				text-transform: uppercase;
				color: #fff;
			}

			.banner .content p {
				font-size: 1.5em;
				color: #fff;
			}

			.banner .content img {
				width: 40px;
				height: 40px;
			}

			#video{
				margin-top: 0;
				width: 100%;
				height: 86.5%;
			}

			#main2{
				padding: 0 80px;
				text-align: justify;
				font-weight: bold;	
				font-size: 18px;
				color: rgb(104, 104, 104);
				position: relative;
				min-height: 300vh;
			}
			
			#sobrenos{
				font-family: "Manrope";
				text-align: center;
				margin: 2%;
				color: rgb(104, 104, 104);
				font-size: 120%;
			}

			@keyframes neon {
				from {
					filter: drop-shadow(2px 5px 10px);
				}
				to{
					filter: drop-shadow(0 10px 30px);
				}
			}

			.integrantes{
				width: 400px;
				height: 400px;
				border-radius: 20px;
				border: 10px solid rgb(255, 255, 255);
				box-shadow: 5px 10px 1px 5px #0006;
				flex-grow: 1;
				animation: neon 3s alternate infinite ease-in-out;
				color: #e89098;
			}
		</style>
	</head>
    <body>
		<?php
			include_once ('header.html');
		?>
		<section class="main_video">
			<br><br>
			<section>
				<section class="banner">
					<video autoplay loop muted id="video">
						<source src="./src/video/crepusculo_cortado.mp4" type="video/mp4">
					</video>
					<section class="content">
						<h1>"Nenhuma medida de tempo com você seria suficiente. Mas vamos começar com o para sempre."</h1>
						<p>- Crepúsculo, Edward Cullen</p>
					</section>
				</section>
			</section>
		</section>
		<section id="main2">
			<br>
			<h3 id="sobrenos">
				Obrigada (o) por ter chegado até aqui, esperamos que tenha gostado.<br>
				E lembre-se: Nós aceitamos o amor que achamos merecer.
			</h3>
			<br>
			<section>
                <h1>Integrantes</h1>
            </section>
			<h3 id="sobrenos">
				Isabelle Santos
			</h3>
			<figure>
				<img class="integrantes" src="./src/images/nos/isabelle.jpeg">
			</figure>
			<br><br>
			<h3 id="sobrenos">
				Isabella Batista
			</h3>
			<figure>
				<img class="integrantes" src="./src/images/nos/isabella.jpeg">
			</figure>
			<br><br>
			<h3 id="sobrenos">
				Fabio Miguel
			</h3>
			<figure>
				<img class="integrantes" src="./src/images/nos/fabio.jpeg">
			</figure>
			<br><br>
			<h3 id="sobrenos">
				Patrick Pereira
			</h3>
			<figure>
				<img class="integrantes" src="./src/images/nos/patrick.jpeg">
			</figure>
			<br><br>
			<h3 id="sobrenos">
				Gustavo Batista
			</h3>
			<figure>
				<img class="integrantes" src="./src/images/nos/gustavo.jpeg">
			</figure>
			<br><br>
		</section>
		<?php
			include_once ('footer.html');
		?>
    </body>
</html>