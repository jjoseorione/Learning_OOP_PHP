<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menú</title>
</head>
<body>
	<?php
		class Menu{
			private $enlaces = array();
			private $titulos = array();
			public function agrega($link,$title){
				$this->enlaces[] = $link;
				$this->titulos[] = $title;
			}
			public function despliega($tipo){
				for($f = 0; $f < count($this->enlaces); $f++) {
					echo '<a href="' . $this->enlaces[$f] . '">' . $this->titulos[$f] . '</a>';
					if($tipo == "H")
						echo " - ";
					else
						echo "<br>-<br>";
				}
			}
		} 
		$menu1 = new Menu();
		$menu1->agrega('http://www.google.com','Google');
		$menu1->agrega('http://www.yahoo.com','Yahoo');
		$menu1->agrega('http://www.wikipedia.org','Wikipedia');
		$menu1->despliega('H');
	?>

</body>
</html>