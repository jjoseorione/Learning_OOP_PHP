<!--En este ejemplo se muestra el uso de parámetros de tipo objeto-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Parámetros tipo objeto</title>
</head>
<body>
	<?php
		class Opcion{
			private $titulo;
			private $enlace;
			private $colorFondo;
			public function __construct($tit, $enl, $cfon){
				$this->titulo = $tit;
				$this->enlace = $enl;
				$this->colorFondo = $cfon;
			}
			public function graficar(){
				echo '<a style="background-color:' . $this->colorFondo . ';" href="' . $this->enlace . '">' . $this->titulo . '</a>';
			}
		}
		class Menu{
			private $opciones = array();		//Arreglo de objetos tipo Opción.
			private $direccion;
			public function __construct($dir){
				$this->direccion = $dir;
			}
			public function insertar($op){
				$this->opciones[] = $op;
			}
			private function graficarHorizontal(){
				for($f = 0; $f < count($this->opciones); $f++){
					$this->opciones[$f]->graficar();		//Se ejecuta el método graficar del objeto opcion
					echo ' - ';
				}
			}
			private function graficarVertical(){
				for($f = 0; $f < count($this->opciones); $f++){
					$this->opciones[$f]->graficar();		//Se ejecuta el método graficar del objeto opcion
					echo '<br>';
				}
			}
			public function graficar(){
				if(strtolower($this->direccion) == 'horizontal')
					$this->graficarHorizontal();
				elseif(strtolower($this->direccion) == 'vertical')
					$this->graficarVertical();
			}
		}
		$menu1=new Menu('horizontal');
		$opcion1=new Opcion('Google','http://www.google.com','#C3D9FF');
		$menu1->insertar($opcion1);
		$opcion2=new Opcion('Yahoo','http://www.yahoo.com','#CDEB8B');
		$menu1->insertar($opcion2);
		$opcion3=new Opcion('MSN','http://www.msn.com','#C3D9FF');
		$menu1->insertar($opcion3);
		$menu1->graficar();


	?>
</body>
</html>