<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Empleado</title>
</head>
<body>
	<?php
		class Empleado{
			private $nombre;
			private $sueldo;
			public function inicializar($nom, $suel){
				$this->nombre = $nom;
				$this->sueldo = $suel;
			}
			public function impuestos(){
				echo $this->nombre . " tiene un sueldo de $this->sueldo. ";
				if ($this->sueldo > 3000){
					echo "Debe pagar impuestos<br>";
				} 
			}
		}

		$emp1 = new Empleado();
		$emp1->inicializar("José", 10500);
		$emp1->impuestos();
		$emp2 = new Empleado();
		$emp2->inicializar("Irving", 3000);
		$emp2->impuestos();
	?>

</body>
</html>