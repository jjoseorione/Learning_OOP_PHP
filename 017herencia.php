<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		class Persona{
			protected $nombre;
			protected $edad;

			public function __construct($name, $age){
				$this->nombre = $name;
				$this->edad = $age;
			}
			public function imprimeDatos(){
				echo "<br>";
				echo "Nombre:\t\t $this->nombre <br>";
				echo "Edad:\t\t$this->edad <br>";
				if(isset($this->sueldo))
					echo "Sueldo:\t\t$this->sueldo<br>";
			}
		}

		class Empleado extends Persona{
			public $sueldo;

			public function defineSueldo($salary){
				$this->sueldo = $salary;
			}
		}

		$p1 = new Persona('Juan', 34);
		$p2 = new Empleado('Hugo', 19);
		$p3 = new Persona('Luis', 45);
		$p2->defineSueldo(15000);

		$p1->imprimeDatos();
		$p2->imprimeDatos();
		$p3->imprimeDatos();

	?>

</body>
</html>