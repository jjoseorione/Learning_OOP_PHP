<!--
	Cuando creamos un objeto de una clase el primer método que se ejecuta es el constructor. Si la clase no tiene constructor pero la subclase si lo tiene, el que se ejecuta es el constructor de la clase padre. Si ambas tienen constructor, la clase hijo sobreescribe el constructor de la clase padre.
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
				echo "$this->titulo $this->resultado <br>";
			}
		}

		class Suma extends Operacion{
			protected $titulo;
			public function __construct($v1, $v2, $tit){
				parent::__construct($v1, $v2);		//Se llama al constructor de la clase padre
				$this->titulo = $tit;
			}
			public function operar(){
				$this->resultado = $this->valor1 + $this->valor2;
			}
		}

		$suma = new Suma(100,10,'Suma de valores:');
		$suma->operar();
		$suma->imprimirResultado();
	?>
</body>
</html>