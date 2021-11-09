<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Métodos privados</title>
</head>
<body>
	<?php
		class Menu{
			private $enlace = array();
			private $titulo = array();
			private $alineacion;
			public function __construct($align){
				$this->enlace[] = $link;
				$this->titulo[] = $title;
				$this->alineacion = $align;
			}

			public function agregarElem($link, $title){
				$this->enlace[] = $link;
				$this->titulo[] = $title;
			}

			private function mostrarHorizontal(){
				echo '<div style="border:1px solid blue;">';
				for ($elem = 1; $elem <= count($this->enlace); $elem++)
					echo '<a style="border:1px solid blue;" href = "' . $this->enlace[$elem] . '">' . $this->titulo[$elem] . '</a>';
				echo '</div>';
			}

			private function mostrarVertical(){
				echo '<div style="border:1px solid blue;">';
				for ($elem = 1; $elem <= count($this->enlace); $elem++){
					echo '<div>';
					echo '<a style="border:1px solid blue;" href = "' . $this->enlace[$elem] . '">' . $this->titulo[$elem] . '</a>';
					echo '</div>';
				}
				echo '</div>';
			}

			public function graficar(){
				if ($this->alineacion == "horizontal")
					$this->mostrarHorizontal();
				elseif ($this->alineacion == "vertical")
					$this->mostrarVertical();
			}
		}

		$menu1 = new Menu('vertical');
		$menu1->agregarElem('http://wikipedia.org', 'Wikipedia');
		$menu1->agregarElem('http://yahoo.com', 'Yahoo');
		$menu1->agregarElem('http://google.com', 'Google');
		$menu1->graficar();

	?>
</body>
</html>