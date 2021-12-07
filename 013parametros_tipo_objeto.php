<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Parámetros tipo objeto</title>
</head>
<body>
	<?php
		class celda{
			private $contenido;
			private $colorFondo;

			public function __construct($data, $bckgColor){
				$this->contenido = $data;
				$this->colorFondo = $bckgColor;
			}
			public function graficaCelda(){
				echo '<td style="background-color:' . $this->colorFondo . ';">';
				echo $this->contenido;
				echo '</td>';
			}
		}
		class tabla{
			private $matriz = array();
			private $numFilas;
			private $numColumnas;

			public function __construct($rows, $columns){
				$this->numFilas = $rows;
				$this->numColumnas = $columns;
			}
			public function insertarCelda($cell, $row, $column){
				$this->matriz[$row][$column] = $cell;
			}
			public function graficarTabla(){
				echo '<table>';
				for($fi = 1; $fi <= $this->numFilas; $fi++){
					echo '<tr>';
					for($co = 1; $co <= $this->numColumnas; $co++){
						if(isset($this->matriz[$fi][$co]))
							$this->matriz[$fi][$co]->graficaCelda();
						else
							echo '<td>Vacía</td>';
					}
					echo '</tr>';
				}
				echo '</table>';
			}
		}

		$tabla1 = new tabla(5,5);

		$celda1 = new celda('A', 'red');
		$tabla1->insertarCelda($celda1,1,1);

		$celda1 = new celda('B', 'blue');
		$tabla1->insertarCelda($celda1,5,4);

		$celda1 = new celda('C', 'lime');
		$tabla1->insertarCelda($celda1,3,3);

		$tabla1->graficarTabla();
	?>
</body>
</html>