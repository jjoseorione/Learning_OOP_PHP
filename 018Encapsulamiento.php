<!--
	En este ejemplo veremos que el atributo protected hace que los atributos o métodos sólo puedan ser
	accedidos por la misma clase o por clases derivadas por herencia
-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ejemplo de Encapsulamiento</title>
</head>
<body>
	<?php
		class operacion{
			protected $valor1;
			protected $valor2;
			protected $resultado;
			public function __construct($a, $b){
				$this->valor1 = $a;
				$this->valor2 = $b;
			}
			public function imprimirResultado(){
				echo $this->resultado;
			}
		}

		class suma extends operacion{
			public function operar(){
				$this->resultado = $this->valor1 + $this->valor2;
			}
		}

		class resta extends operacion{
			public function operar(){
				$this->resultado = $this->valor1 - $this->valor2;
			}
		}

		$suma1 = new suma(5,3);
		$suma1->valor1 = 10;		//Esta línea es errónea
		$suma1->operar();
		echo 'La suma es: ';
		$suma1->imprimirResultado();
		echo '<br>';

		$suma2 = new suma(15,32);
		$suma2->operar();
		echo 'La suma es: ';
		$suma2->imprimirResultado();
		echo '<br>';

		$resta1 = new resta(15,32);
		$resta1->operar();
		echo 'La resta es: ';
		$resta1->imprimirResultado();
		echo '<br>';
	?>
</body>
</html>