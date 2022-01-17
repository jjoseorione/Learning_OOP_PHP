<!--
	Si a un método le agregamos el modificador final significa que ninguna subclase puede sobreescribirlo. Este mismo modificador se lo puede aplicar a una clase, con esto estaríamos indicando que dicha clase no se puede heredar.
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
			public final function imprimirResultado(){
				echo $this->resultado . '<br>';
			}
		}

		final class Suma extends Operacion{
			private $titulo;
			public function __construct($v1, $v2, $tit){
				parent::__construct($v1, $v2);
				$this->$titulo = $tit;
			}
			public function operar(){
				echo $this->titulo;
				echo $this->valor1 . ' + ' . $this->valor2 . ' es ';
				$this->resultado = $this->valor1 + $this->valor2;
			}
			/*public function imprimirResultado(){	//Esto sería un error
				echo $this->resultado . '<br>';
			}*/
		}

		$suma = new Suma(10,10,'Suma de valores: ');
		$suma->operar();
		$suma->imprimirResultado();
	?>
</body>
</html>