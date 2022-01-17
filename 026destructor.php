<!--
	Otro método que se ejecuta automáticamente es el __destruct (destructor de la clase)

	Las características de este método son:

	-El objetivo principal es liberar recursos que solicitó el objeto (conexión a la base de datos, creación de imágenes dinámicas etc.)
	-Es el último método que se ejecuta de la clase.
	-Se ejecuta en forma automática, es decir no tenemos que llamarlo.
	-Debe llamarse __destruct.
	-No retorna datos.
	-Es menos común su uso que el constructor, ya que PHP gestiona bastante bien la liberación de recursos en forma automática.
-->
	<?php
		class Banner{
			private $ancho;
			private $alto;
			private $mensaje;
			private $imagen;
			private $colorTexto;
			private $colorFondo;
			public function __construct($an, $al, $men){
				$this->ancho = $an;
				$this->alto = $al;
				$this->mensaje = $men;
				$this->imagen = imageCreate($this->ancho,$this->alto);
				$this->colorTexto = $imageColorAllocate($this->imagen,255,255,0);
				$this->colorFondo = $imageColorAllocate($this->imagen,255,0,0);
				imageFill($this->imagen,0,0,$this->colorFondo);
			}
			public function graficar(){
				imageString($this->imagen,5,50,10, $this->mensaje, $this->colorFuente);
				header("Content-type: image/png");
				imagePNG($this->imagen);
			}
			public function __destruct(){
				imageDestroy($this->image);
			}
		}

		$banner1 = new Banner(428, 45, 'Sistema de Ventas por Mayor y Menor');
		$banner1->graficar();
	?>