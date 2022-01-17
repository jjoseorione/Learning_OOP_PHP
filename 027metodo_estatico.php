<!--
	Un método estático pertenece a la clase pero no puede acceder a los atributos de una instancia. La característica fundamental es que un método estático se puede llamar sin tener que crear un objeto de dicha clase.

	Un método estático es lo más parecido a una función de un lenguaje estructurado. Solo que se lo encapsula dentro de una clase.
-->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		class Cadena{
			public static function largo($cad){
				return strlen($cad);
			}
			public static function mayusculas($cad){
				return strtoupper($cad);
			}
			public static function minusculas($cad){
				return strtolower($cad);
			}
		}

		$c = 'Hola';
		echo 'Cadena original: ' . $c;
		echo '<br>';
		echo 'Largo: ' . Cadena::largo($c);
		echo '<br>';
		echo 'Toda en mayúsculas: ' . Cadena::mayusculas($c);
		echo '<br>';
		echo 'Toda en minúsculas: ' . Cadena::minusculas($c);
		echo '<br>';
	?>
</body>
</html>