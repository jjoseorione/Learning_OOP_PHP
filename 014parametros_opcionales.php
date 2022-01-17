<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Parámetros opcionales</title>
</head>
<body>
	<?php
		class CabeceraPagina{
			private $titulo;
			private $ubicacion;
			private $colorFuente;
			private $colorFondo;
			public function __construct($title, $ubication = 'center', $fontColor = '#FFFFFF', $bckgColor = '#000000'){
				$this->titulo = $title;
				$this->ubicacion = $ubication;
				$this->colorFuente = $fontColor;
				$this->colorFondo = $bckgColor;
			}
			public function graficar(){
				echo '<div style = "font-size:3em; text-align:' . $this->ubicacion . '; color:' . $this->colorFuente . '; background-color:' . $this->colorFondo . ';">';
				echo $this->titulo;
				echo '</div>';
			}
		}

		$cabecera1 = new CabeceraPagina('El blog del programador');
		$cabecera1->graficar();
		echo '<br>';

		$cabecera2 = new CabeceraPagina('El blog del programador', 'left');
		$cabecera2->graficar();
		echo '<br>';

		$cabecera3 = new CabeceraPagina('El blog del programador', 'left', 'lime');
		$cabecera3->graficar();
		echo '<br>';

		$cabecera3 = new CabeceraPagina('El blog del programador', 'left', 'lime', 'dodgerblue');
		$cabecera3->graficar();
		echo '<br>';

	?>
</body>
</html>