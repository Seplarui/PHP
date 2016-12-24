<?php

class Profesor {

	//PROPIEDADES
	private $id;
	private $nombre;

	//CONSTRUCTOR

	public function __construct($id,$nombre) {

		$this->id=$id;
		$this->nombre=$nombre;
	}

	//MÉTODOS

	public function getId() {

		return $this->id;

	}

	public function setId($id) {

		$this->id=$id;
	}

	public function getNombre() {

		return $this->nombre;

	}

	public function setNombre($nombre) {

		$this->nombre=nombre;

	}


}

?>