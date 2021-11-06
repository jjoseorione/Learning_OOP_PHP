<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Atributos</title>
</head>
<body>
	<?php
		class Menu{
			private $enlaces = array();
			private $titulos = array();
			public function cargarOpcion($link,$title){
				$this->enlaces[] = $link;
				$this->titulos[] = $title;
			}
			public function mostrar(){
				for($f = 0; $f < count($this->enlaces); $f++){
					echo '<a href="' . $this->enlaces[$f] . '">' . $this->titulos[$f] . '</a>';
					echo "-";
				}
			}
		}

		$menu1 = new Menu();
		$menu1->cargarOpcion('http://www.google.com','Google');
		$menu1->cargarOpcion('http://www.yahoo.com','Yahoo');
		$menu1->cargarOpcion('http://www.wikipedia.org','Wikipedia');
		$menu1->mostrar();
	?>
</body>
</html>