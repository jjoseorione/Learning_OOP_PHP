<!--
	Hay que tener en cuenta que un objeto es una estructura de datos compleja. Luego cuando asignamos una variable de tipo objeto a otra variable lo que estamos haciendo es guardar la referencia del objeto. No se está creando un nuevo objeto, sino otra variable por la que podemos acceder al mismo objeto.
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
	class Persona{
		private $nombre;
		private $edad;
		public function fijarNombreEdad($name, $age){
			$this->nombre = $name;
			$this->edad = $age;
		}
		public function retornaNombre(){
			return $this->nombre;
		}
		public function retornaEdad(){
			return $this->edad;
		}
	}

	echo "<h2>Sin clone:</h2>";
	$persona1 = new Persona();
	$persona1->fijarNombreEdad('Felipe', 45);
	$personax = $persona1;
	echo "Persona1 = " . $persona1->retornaNombre() . ", " . $persona1->retornaEdad() . "<br>";
	echo "PersonaX = " . $personax->retornaNombre() . ", " . $personax->retornaEdad() . "<br>";
	$personax->fijarNombreEdad('Lalo', 27);
	echo "Persona1 = " . $persona1->retornaNombre() . ", " . $persona1->retornaEdad() . "<br>";
	echo "PersonaX = " . $personax->retornaNombre() . ", " . $personax->retornaEdad() . "<br>";

	echo "<h2>Con clone:</h2>";
	$persona1 = new Persona();
	$persona1->fijarNombreEdad('Felipe', 45);
	$personax = clone($persona1);
	echo "Persona1 = " . $persona1->retornaNombre() . ", " . $persona1->retornaEdad() . "<br>";
	echo "PersonaX = " . $personax->retornaNombre() . ", " . $personax->retornaEdad() . "<br>";
	$personax->fijarNombreEdad('Lalo', 27);
	echo "Persona1 = " . $persona1->retornaNombre() . ", " . $persona1->retornaEdad() . "<br>";
	echo "PersonaX = " . $personax->retornaNombre() . ", " . $personax->retornaEdad() . "<br>";
	?>
</body>
</html>