<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Métodos</title>
</head>
<body>
	<?php
		class Cabercera_Pagina{
			private $titulo;
			private $ubicacion;
			public function inicializar($title, $ubication){
				$this->titulo = $title;
				$this->ubicacion = $ubication;
			}
			public function graficar(){
				echo '<div style="font-size:40px;text-align:' . $this->ubicacion . '">';
				echo $this->titulo;
				echo '</div>';
			}
		}
		if (isset($_GET['alinear']))
			$alinear = $_GET['alinear'];
		else
			$alinear = 'center';
		$cabecera = new Cabercera_Pagina();
		$cabecera->inicializar('El Federiko',$alinear);
		$cabecera->graficar();
		echo '<p><a href="./005metodos.php?alinear=right"> Alinear a la derecha </a></p>';
		echo '<p><a href="./005metodos.php?alinear=left"> Alinear a la izquierda </a></p>';
		echo '<p><a href="./005metodos.php?alinear=center"> Centrar </a></p>';

	?>
</body>
</html>