@extends('/app')

@section('content');

	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<?php

				//print_r($_GET);

				if (isset($_GET['valorUno']) && !empty($_GET['valorUno'])
					&& isset($_GET['valorDos']) && !empty($_GET['valorDos'])
					&& isset($_GET['operando']) && !empty($_GET['operando'])
					) {


					echo "Dentro de la Condicional"."</br>";

					$valor_1 = $_GET['valorUno'];
					$valor_2 = $_GET['valorDos'];
					$operador = $_GET['operando'];


					if ($operador == 1 ) {
						$resul = $valor_1 + $valor_2;
						echo "<h4>"."Resultado de la Suma: "."</h4>"."<h2>".$resul."</h2>";

					}elseif ($operador == 2) {
						$resul = $valor_1 - $valor_2;
						echo "<h4>"."Resultado de la Resta: "."</h4>"."<h2>".$resul."</h2>";

					}elseif ($operador == 3) {
						$resul = $valor_1 * $valor_2;
						echo "<h4>"."Resultado de la Multiplicación: "."</h4>"."<h2>".$resul."</h2>";

					}elseif ($operador == 4) {
						$resul = $valor_1 / $valor_2;
						echo "<h4>"."Resultado de la División: "."</h4>"."<h2>".$resul."</h2>";

					}
				}else{

					echo "Ha enviado los campos vacidos, vuela al Inicio";
					//die(header("Location: calcPhp.php"));
					//
				}


				//echo "<br>"."<a href='calculadora'>"."Inicio"."</a>";

			?>

					<h1>Calculadora Sencilla</h1>
					<!--<a href="calculadora">Inicio</a>-->
			</div>
		</div>
	</div>





@endsection();
