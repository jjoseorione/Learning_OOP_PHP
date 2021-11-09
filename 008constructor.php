<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Métodos</title>
</head>
<body>
	<?php
		class Cabecera_Pagina{
			private $titulo;
			private $ubicacion;
			private $color;
			public function __construct($title, $ubication, $colour){
				$this->titulo = $title;
				$this->ubicacion = $ubication;
				$this->color = $colour;
			}
			public function graficar(){
				echo '<div style="font-size:40px;text-align:' . $this->ubicacion . '; color:' . $this->color . ';">';
				echo $this->titulo;
				echo '</div>';
			}
		}
		if (isset($_GET['alinear']))
			$alinear = $_GET['alinear'];
		if (isset($_GET['color_fuente']))
			$color_fuente = $_GET['color_fuente'];
		$cabecera = new Cabecera_Pagina('Felipe Ferra Gómez',$alinear,$color_fuente);
		$cabecera->graficar();
		echo '<p><a href="./008constructor.php?alinear=center&color_fuente=' . $color_fuente . '"> Centrar </a></p>';
		echo '<p><a href="./008constructor.php?alinear=right&color_fuente=' . $color_fuente . '"> Derecha </a></p>';
		echo '<p><a href="./008constructor.php?alinear=left&color_fuente=' . $color_fuente . '"> Izquierda </a></p>';
		echo '<p><a href="./008constructor.php?alinear=' . $alinear .'&color_fuente=green"> Verde </a></p>';
		echo '<p><a href="./008constructor.php?alinear=' . $alinear .'&color_fuente=red"> Rojo </a></p>';
		echo '<p><a href="./008constructor.php?alinear=' . $alinear .'&color_fuente=blue"> Azul </a></p>';

	?>
</body>
</html>