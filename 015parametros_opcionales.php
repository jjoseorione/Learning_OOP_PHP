	<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Parámetros Opcionales</title>
</head>
<body>
	<?php
		class empleado{
			private $nombre;
			private $sueldo;
			public function __construct($name, $salary = 1000){
				$this->nombre = $name;
				$this->sueldo = $salary;
			}
			public function imprimeEmpleado(){
				echo '<tr><td>';
				echo $this->nombre;
				echo '</td><td>';
				echo $this->sueldo;
				echo '</td></tr>';
			}
		}

		$empleados = array();
		$empleados[0] = new empleado('Juan', 3096);
		$empleados[1] = new empleado('Pedro');
		$empleados[2] = new empleado('Paco', 2579);
		$empleados[3] = new empleado('Luis', 7567);
		$empleados[4] = new empleado('Hugo');
		echo '<table border="1">';
		for($emp = 0; $emp < count($empleados); $emp++){
			$empleados[$emp]->imprimeEmpleado();
		}
		echo '</table>';

	?>
</body>
</html>