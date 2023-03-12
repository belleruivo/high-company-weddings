<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8">
		<link rel="icon" href="./src/images/icons/icon_site.gif">
		<link rel="stylesheet" href="./src/css/style_bolo.css">
		<script src="https://kit.fontawesome.com/965f56d99d.js" crossorigin="anonymous"></script>
		<style>
			.form-submit-button {
				background: #ff7a60;
				color: white;
				border-style: outset;
				border-color: #111111;
				height: 30px;
				width: 100px;
				font: bold 15px arial,sans-serif;
				text-shadow: none;
			}
		</style>
	</head>
    <body>
		<?php
			include_once ('header.html');
		?>
		<section class="main">
			<section>
				<h1>Exatas</h1>
			</section>
			<section>
            	<h2> E afinal, quanto ficou o bolo ao todo?<h2>
			</section>

			<section>
				<figure>
					<img class="valores_enfeite" src="./src/images/receita/tabela_precos.png" width="60%" height="20%" alt="Tabela com as informações de pesquisa de mercado" title="Pesquisa de Mercado">
				</figure>
			</section><br>
			<section id="fotos_do_lado">
				<figure>
					<img class="valores_enfeite" src="./src/images/receita/valor_total.png" width="300px" height="420px" alt="Tabela com as informações de pesquisa de mercado" title="Pesquisa de Mercado">
				</figure>
				<figure>
					<img class="valores_enfeite" src="./src/images/receita/ponto_equilibrio_bolo.png" width="300px" height="420px" alt="Tabela com as informações de pesquisa de mercado" title="Pesquisa de Mercado">
				</figure>
			</section>

			<br><br>
			<section id="listacentro">
				<p>
					Para os cálculos de média, faz-se necessário obter os valores e dividir pela quantidade, como por exemplo:
				</p>
				<table border="0" width="30%" height="20%" bordercolor="black">
					<tbody>
						<tr bgcolor="#ff7a60">
							<td align="center"><font color="white">Ovos Brancos (20un)</font></td>
							<td align="center"><font color="white">R$12,95</font></td>
							<td align="center"><font color="white">R$14,99</font></td>
							<td align="center"><font color="white">R$11,66</font></td>
						</tr>
					</tbody>
				</table>
				<article>
					<?php
						$ovos1 = 12.95;
						$ovos2 = 14.99;
						$ovos3 = 11.66;

						$resultado_ovos = ($ovos1 + $ovos2 + $ovos3)/3;
						echo('<p><span><h2> O resultado da média seria: R$'.$resultado_ovos. '</h2></span></p>');
					?>
				</article>
			</section>
			<section>
				<br>
				<p>
					Para cálculos de proporção, tudo se resume em uma simples regra de três. <br>Vejamos: para fazer um bolo, o mínimo
					que encontramos no mercado é 1Kg de Farinha de Trigo, porém não são todas as vezes que usamos tudo; normalmente
					gira em torno de 2 xícaras (ou 250g aproximadamente) para uma receita pequena. 
				</p><br>
				<p>
					Tenhamos na cabeça que 1Kg é igual a 1000g e usaremos 250g para a nossa receita, sendo equivalente a 1/4 do total 
					que compramos no mercado. Assim, para a conta teríamos que dividir o preço do produto por sua proporção.
				</p>
				<article>
					<?php
						$trigo = 3.79;
						
						$trigo_usado = $trigo/4;
						echo('<p><span><h2>Sendo o resultado real de custo de: R$'.$trigo_usado. '</h2></span></p>');
					?>
				</article>
			</section>
			<br>
			<section> 
				<p>
					Para situações mais delicadas como por exemplo calcular o custo de gás de cozinha, podemos usar a seguinte fórmula:<br>
					<strong>Gasto = (((Tempo de uso em minutos/60) × consumo do queimador)/capacidade do botijão) × preço do botijão de gás</strong>
				</p>
				<article>
					<legend>
						<br><h2 id="listacentro">Vamos testar!</h2>
					</legend>
					<form id="listacentro" name="gaz de cozinha" action="#" method="POST">
						<label><br> Tempo (não se esqueça que deve ser em minutos): <br></label>
							<input type="number" placeholder="Em minutos" name="tempo"><br>

						<label><br> Consumo do queimador: <br></label>
							<select name="consumo">
								<option class="cor" value="" disabled selected>Selecione</option>
								<option class="cor" value=0.200> 0,200 Kg/h em temperatura baixa (forno abaixo de 180)</option>
								<option class="cor" value="0.225"> 0,225 Kg/h em temperatura média (180)</option>
								<option class="cor" value="0.250"> 0,250 Kg/h em temperatura alta (200 ou mais)</option>
							</select><br>

						<label><br> Capacidade do botijão: <br></label>
							<input type="radio" name="capacidade" value="13kilos"/> 13Kg
							<input type="radio" name="capacidade" value="45kilos"/> 45Kg<br>

						<label><br> Preço do botijão: <br></label>
							<input type="number" placeholder="Em reais" name="preco"> <br><br>

							<input class="form-submit-button" type="submit" name="Enviar" value="Enviar">
					</form>
				</article>
				<br>
				<article>
					<?php
						if(isset($_POST['Enviar'])){
							$tempo = $_POST['tempo'];
							$consumo = $_POST['consumo'];
							$capacidade = preg_replace("/[^0-9]/", "", $_POST['capacidade']);
							$preco = $_POST['preco'];

							$resultado = ((($tempo/60) * $consumo) / $capacidade) * $preco;
							echo('<p><span class="detalhe"><h2 id="listacentro">O resultado fica em: R$');
							echo number_format ($resultado, 2);
							echo ('</h2></span></p><br>');
						}
					?>
				</article>
			</section>
			<br>
			<section>
				<p>
					Por último, teremos a margem de lucro e ponto de equilíbrio.<br> Para obtermos o equilíbrio de não perder dinheiro, como 
					também não ganhar, é feita a soma de todos os custos que o bolo teve: ingredientes, mão de obra, gás de cozinha etc.<br>
					<br>Já para obter o lucro, nós podemos mesmo determinar de qual maneira que dividiremos e qual o valor que venderemos.<br>
				</p>
				<article>
					<?php
						$pedacos = 12;
						$venda = 09.00;

						$fatura = $pedacos * $venda;

						echo('<p> No nosso caso, divimos o bolo em exatamente 12 pedaços, vendendo a R$ 09,00. Devido ao valor total do bolo ter ficado aproximadamente em R$ 103,91, <span class="detalhe">faturaremos: <h2 id="listacentro"> R$ '.$fatura. ',00 </h2></span></p>');
					?>
				</article>
			</section>
			
			<legend>
				<br><h2 id="listacentro">Por fim, quantos bolos você gostaria de fazer?</h2>
			</legend>
			<section>
				<form id="listacentro" name="receita_num" method="POST" action="#">
					<label>Dígite a quantidade de bolos que desejar:</label><br>	
					<input type="number" name="numerobolo" placeholder="Quantidade de Bolos"><br><br>
					<input class="form-submit-button" type="submit" name="Calcular" value="Calcular"><br><br><br>
				</form>
				<?php
					if(isset($_POST['Calcular'])){
						$quantbolo=$_POST['numerobolo'];
						$cont=0;
						$nomes=array(10);
							$nomes[0]="Farinha (gramas)";
							$nomes[1]="Leite (ml)";
							$nomes[2]="Açúcar (gramas)";
							$nomes[3]="Ovo (unidade)";
							$nomes[4]="Fermento (gramas)";
							$nomes[5]="Chantilly (ml)";
							$nomes[6]="Leite em pó (gramas)";
							$nomes[7]="Morango (caixa)";
							$nomes[8]="Leite Condensado (gramas)";
							$nomes[9]="Creme de leite (gramas)";
							$nomes[10]="Margarina (gramas)";

						$quantidade=array(10);
							$quantidade[0]=600;
							$quantidade[1]=240;
							$quantidade[2]=540;
							$quantidade[3]=3;
							$quantidade[4]=10;
							$quantidade[5]=600;
							$quantidade[6]=50;
							$quantidade[7]=1;
							$quantidade[8]=395;
							$quantidade[9]=200;
							$quantidade[10]=10;

						for ($cont=0; $cont < 11; $cont++) { 
							echo('<h3 id="listacentro">'.$nomes[$cont]." = ".$quantidade[$cont]*$quantbolo.'<br></h3>');
						}								
					}	
				?>
			</section>
			<br><br>
		</section>
		<?php
			include_once ('footer.html');
		?>
    </body>
</html>
