<!--
	Una subclase en PHP puede redefinir un método, es decir que podemos crear un método con el mismo nombre que el método de la clase padre. Ahora cuando creamos un objeto de la subclase, el método que se llamará es el de dicha subclase.

	Lo más conveniente es sobreescribir métodos para completar el algoritmo del método de la clase padre. No es bueno sobreescribir un método y cambiar completamente su comportamiento.


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
		class Operacion{
			protected $valor1;
			protected $valor2;
			protected $resultado;
			public function __construct($v1, $v2){
				$this->valor1 = $v1;
				$this->valor2 = $v2;
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
				$this->resultado = $this->valor1 / $this->valor2;
			}
		}

		$suma = new Suma(100,10);
		$suma->operar();
		$suma->imprimirResultado();

		$resta = new Resta(100,10);
		$resta->operar();
		$resta->imprimirResultado();

		$div = new Div(100,10);
		$div->operar();
		$div->imprimirResultado();

	?>
</body>
</html>