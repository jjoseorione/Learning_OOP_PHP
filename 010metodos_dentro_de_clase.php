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
			public function __construct($align, $link = NULL, $title = NULL){
				if ($link && $title){
					$this->enlace[] = $link;
					$this->titulo[] = $title;
				}
				$this->alineacion = $align;
			}

			public function agregarElem($link, $title){
				$this->enlace[] = $link;
				$this->titulo[] = $title;
			}

			private function mostrarHorizontal(){
				for ($elem = 0; $elem < count($this->enlace); $elem++){
					echo '<a style="border:1px solid blue;margin:2px;" href = "' . $this->enlace[$elem] . '">' . $this->titulo[$elem] . '</a>';
				}
			}

			private function mostrarVertical(){
				for ($elem = 0; $elem < count($this->enlace); $elem++){
					echo '<div style="margin-top:4px;"><a style="border:1px solid blue;" href = "' . $this->enlace[$elem] . '">' . $this->titulo[$elem] . '</a></div>';
				}
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