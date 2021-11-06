<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Persona</title>
</head>
<body>
	<?php
		class Persona{
			private $nombre;
			//Los atributos normalmente son privados, lo que significa que no podemos acceder al mismo desde fuera de la clase.
			public function inicializar($nom){
				$this->nombre = $nom;
			}
			public function imprimir(){
				echo $this->nombre;
				echo '<br>';
			}
		}

		$per1 = new Persona();
		$per1->inicializar("Juan");
		$per1->imprimir();
		//Si $nombre es público, se puede acceder a él de esta manera:
		//echo $per1->nombre . "<br>";
		$per2 = new Persona();
		$per2->inicializar("Ana");
		$per2->imprimir();
	?>

</body>
</html>