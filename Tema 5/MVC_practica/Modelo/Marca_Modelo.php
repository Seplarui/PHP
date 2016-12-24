<?php
error_reporting(0);

class Marcas_modelo {

	private $id_marca;
	private $marca;

	public function __construct() {

		$this->id_marca=$id_marca;
		$this->marca=$marca;

	}

	public function setId($id_marca) {

		$this->_id_marca=$id_marca;

	}

	public function setMarca($marca) {

		$this->_marca=$marca;

	}


public function getmarcas() {

	$fichero=fopen("..\marcas_coches.txt","r");
	while (!feof($fichero)) {

		$filas[]=fgets($fichero,999999);
	}

	fclose($fichero);

	return $this->marca[]=$filas;

}
public function getId() {

	return $this->id_marca;


}

}
/*
  $coche= new Marcas_modelo();

  $matriz=$coche->getmarcas();

  print_r($matriz);
 */
 ?>