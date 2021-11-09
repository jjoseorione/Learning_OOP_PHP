<!--
	El constructor es un método especial de una clase. El objetivo fundamental del constructor es inicializar los atributos del objeto que creamos.

	Básicamente el constructor remplaza al método inicializar que habíamos hecho en el concepto anterior.

	Las ventajas de implementar un constructor en lugar del método inicializar son:

	El constructor es el primer método que se ejecuta cuando se crea un objeto.
	El constructor se llama automáticamente. Es decir es imposible de olvidarse llamarlo ya que se llamará automáticamente.
	Quien utiliza POO (Programación Orientada a Objetos) conoce el objetivo de este método.
	Otras características de los constructores son:

	El constructor se ejecuta inmediatamente luego de crear un objeto y no puede ser llamado nuevamente.
	Un constructor no puede retornar dato.
	Un constructor puede recibir parámetros que se utilizan normalmente para inicializar atributos.
	El constructor es un método opcional, de todos modos es muy común definirlo.
-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Constructores</title>
</head>
<body>
	<?php
		class Cabecera_Pagina{
			private $titulo;
			private $ubicacion;
			public function __construct($title, $ubication){
				$this->titulo = $title;
				$this->ubicacion = $ubication;
			}

			public function graficar(){
				echo '<div style="font-size:40px; text-align:' . $this->ubicacion . '">';
				echo $this->titulo;
				echo '</div>';
			}
		}

		$cabecera = new Cabecera_Pagina('Kuautemoh Blankoh', 'left');
		$cabecera->graficar();
	?>

</body>
</html>