<?php

class marca_coche {

	private $id;
	private $marca;



//CONSTRUCTOR

public function __construct($id,$marca) {

	this->id=$id;
	this->marca=$marca;

	}

public function getId() {

	return $this->id;
	}

public function getMarca() {

	return $this->marca;
	}	

public function setId($id) {

	 $this->id=$id;
	}

public function setMarca($marca) {

	 $this->marca=$marca;
	}

}












?>