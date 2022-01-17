<!--
	Cuando tenemos una lista de objetos de distinto tipo y queremos saber si un objeto es de una determinada clase el lenguaje PHP nos provee del operador instanceof.
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
		abstract class Trabajador{
			protected $nombre;
			protected $sueldo;
			public function __construct ($name, $salary){
				$this->nombre = $name;
				$this->sueldo = $salary;
			}
			public function retornarSueldo(){
				return $this->sueldo;
			}
		}

		class Empleado extends Trabajador{

		}

		class Gerente extends Trabajador{

		}

		$vec[] = new Empleado('Juan', 1200);
		$vec[] = new Empleado('Ana', 1000);
		$vec[] = new Empleado('Carlos', 1000);

		$vec[] = new Gerente('Jorge', 25000);
		$vec[] = new Gerente('Marcos', 19000);
		$sumaEmp = 0;
		$sumaGer = 0;
		for($f=0; $f<count($vec); $f++){
			if($vec[$f] instanceof Gerente)
				$sumaGer += $vec[$f]->retornarSueldo();
			elseif($vec[$f] instanceof Empleado)
				$sumaEmp += $vec[$f]->retornarSueldo();
		}

		echo "Suma gerentes: $sumaGer<br>";
		echo "Suma empleados: $sumaEmp<br>";

	?>
</body>
</html>