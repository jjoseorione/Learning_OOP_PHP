<!--
	Una clase abstracta es aquella que sólo servirá como padre de clases hijas y que no permitirá creación de instancias de ella (objetos). La clase Operacion no permite instancias de ella.
-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		abstract class Operacion{
			protected $valor1;
			protected $valor2;
			protected $resultado;
			public function __construct($v1, $v2){
				$this->valor1 = $v1;
				$this->valor2 = $v2;
			}
			public function imprimeValores(){
				echo "valor1 = $this->valor1 <br>";
				echo "valor2 = $this->valor2 <br>";
			}
			public function imprimirResultado(){
				echo "El resultado es: $this->resultado <br>";
			}
		}

		class Suma extends Operacion{
			public function operar(){
				$this->resultado = $this->valor1 + $this->valor2;
			}
			public function imprimirResultado(){
				echo "$this->valor1 + $this->valor2 = $this->resultado <br>";
			}
		}

		class Resta extends Operacion{
			public function operar(){
				$this->resultado = $this->valor1 - $this->valor2;
			}
			public function imprimirResultado(){
				echo "$this->valor1 - $this->valor2 = $this->resultado <br>";
			}
		}

		class Div extends Operacion{
			public function operar(){
				if (!$this->valor2)
					throw new Exception('Division por cero');
				else
					$this->resultado = $this->valor1 / $this->valor2;
			}
		}

		//$op1 = new Operacion(100,10);		//Esta línea es errónea

		$suma = new Suma(100,10);
		$suma->operar();
		$suma->imprimirResultado();

		$resta = new Resta(100,10);
		$resta->operar();
		$resta->imprimirResultado();

		$div = new Div(100,10);
		try{
			$div->operar();
			$div->imprimirResultado();
		}
		catch(Exception $e){
			echo 'Excepción capturada: ',  $e->getMessage(), "\n";
		}

	?>
</body>
</html>