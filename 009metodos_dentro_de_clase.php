<!--
	Dentro de este tema se han declarado algunos métodos como privados debido a que estos métodos sólo deberían de ser utilizado por dentro de la clase. Por ejemplo, el inicio y fin de tabla fuera de la clase pueden llevar a un error semántico.
-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Métodos dentro de clases</title>
</head>
<body>
	<?php
		class tabla{
			private $matriz = array();
			private $numFilas;
			private $numColumnas;
	
			public function __construct($rows, $columns){
				$this->numFilas = $rows;
				$this->numColumnas = $columns;
			}
	
			public function cargar($fila, $columna, $valor){
				$this->matriz[$fila][$columna] = $valor;
			}
	
			private function inicioTabla(){
				echo '<table border="1">';
			}
	
			private function inicioFila(){
				echo '<tr>';
			}
	
			private function mostrar($fila, $columna){
				echo '<td>' . $this->matriz[$fila][$columna] . '</td>';
			}
	
			private function finFila(){
				echo '</tr>';
			}
	
			private function finTabla(){
				echo '</table>';
			}
	
			public function graficar(){
				$this->inicioTabla();
				for($f = 1; $f <= $this->numFilas; $f++){
					$this->inicioFila();
					for($c = 1; $c <= $this->numColumnas; $c++)
						$this->mostrar($f, $c);
					$this->finFila();
				}
				$this->finTabla();
			}
		}
		$table = new tabla(3,3);
		$table->cargar(1,1,'X');
		$table->cargar(1,2,'O');
		$table->cargar(1,3,'X');
		$table->cargar(2,1,' ');
		$table->cargar(2,2,'O');
		$table->cargar(2,3,'X');
		$table->cargar(3,1,'O');
		$table->cargar(3,2,' ');
		$table->cargar(3,3,'X');
		$table->graficar();
	?>
</body>
</html>