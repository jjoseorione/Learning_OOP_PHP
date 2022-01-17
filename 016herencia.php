<!--
	En PHP, a diferencia de otros lenguajes orientados a objetos (C++), una clase sólo puede derivar de una única clase, es decir, PHP no permite herencia múltiple.

	Superclase o clase padre
		Clase de la que desciende o deriva una clase. Las clases hijas (descendientes) heredan (incorporan) automáticamente los atributos y métodos de la la clase padre.

	Subclase
	Clase desciendiente de otra. Hereda automáticamente los atributos y métodos de su superclase. Es una especialización de otra clase. Admiten la definición de nuevos atributos y métodos para aumentar la especialización de la clase.

	Ejemplo de Herencia

	Vehículo
	    │
	    ├───Autobus
	    │
	    ├───Motocicleta
	    │
	    └───Automóvil
	            │
	            ├───Ford K
	            └───Renault 9

	Operación
	    │
	    ├─── Suma
	    │
	    └─── Resta

Public: podemos acceder a las propiedades y métodos desde cualquier lugar, desde la clase actual, clases que heredan de la clase actual y desde otras clases.
Protected: se puede acceder al atributo o método desde la clase que lo define y desde cualquier otra que herede de esta clase.
Private: los atributos o métodos solo son accesibles desde la clase que los define.

-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Herencia</title>
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