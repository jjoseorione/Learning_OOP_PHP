<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Colboración entre objetos</title>
</head>
<body>
	<?php
		class Cabecera{
			private $titulo;
			public function __construct($tit){
				$this->titulo = $tit;
			}
			public function graficar(){
				echo '<h1 style="text-align:center">' . $this->titulo . '</h1>';
			}
		}

		class Cuerpo{
			private $lineas = array();
			public function insertarParrafo($li){
				$this->lineas[] = $li;
			}
			public function graficar(){
				for($f=0; $f < count($this->lineas); $f++){
					echo '<p>' . $this->lineas[$f] . '</p>';
				}
			}
		}

		class Pie{
			private $titulo;
			public function __construct($tit){
				$this->titulo = $tit;
			}
			public function graficar(){
				echo '<h4 style="text-align:left">' . $this->titulo . '</h4>';
			}
		}

		class Pagina{
			private $cabecera;
			private $cuerpo;
			private $pie;
			public function __construct($texto1, $texto2){
				$this->cabecera = new Cabecera($texto1);
				$this->cuerpo = new Cuerpo();
				$this->pie = new Pie($texto2);
			}
			public function insertarCuerpo($texto){
				$this->cuerpo->insertarParrafo($texto);
			}
			public function graficar(){
				$this->cabecera->graficar();
				$this->cuerpo->graficar();
				$this->pie->graficar();
			}
		}

		$pagina1 = new Pagina('El mero pinche Federikoh', 'Derechos reservados Kuautemoh Blankoh');
		$pagina1->insertarCuerpo('Es que mira a mi el bato se me fue liso con una cadena adiamantada asi como la que trae el señor y quinientos pesos. Y el me dice a mi me vale verga lo que tu dices, para mi tu eres un chamaco Cagon');
		$pagina1->graficar();
	?>
</body>
</html>