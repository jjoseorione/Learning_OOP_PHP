<!--
	PHP nos permite crear un método que se llamará cuando ejecutemos el operador clone. Este método puede entre otras cosas inicializar algunos atributos.

	Si no se define el método __clone se hará una copia idéntica del objeto que le pasamos como parámetro al operador clone.
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Método __clone()</title>
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
			public function __clone(){
				$this->edad = 0;
				//Si no queremos que un método pueda clonarse, podemos usar die()
				//die('Imposible clonar clase Persona');
			}
		}

		echo "<h2>Sin clone:</h2>";
		$persona1 = new Persona();
		$persona1->fijarNombreEdad('Felipe', 45);
		$personax = clone($persona1);
		echo "Persona1 = " . $persona1->retornaNombre() . ", " . $persona1->retornaEdad() . "<br>";
		echo "PersonaX = " . $personax->retornaNombre() . ", " . $personax->retornaEdad() . "<br>";
	?>
</body>
</html>