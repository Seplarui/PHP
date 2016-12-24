<?php

class Persona {
	public $nombre;
	public $apellidos;
	public $dni;


	function setNombre($nombre) {
		$this->nombre=$nombre;
	}

	function getNombre() {

		return $this->nombre;
	}

	function setApellidos($apellidos) {
		$this->apellidos=$apellidos;
	}
	function getApellidos() {
		return $this->apellidos;
	}
	function setDNI($dni) {
		$this->dni=$dni;
	}
	function getDNI() {
		return $this->dni;
	}
}

$luisMiguel=new Persona();
$luisMiguel->setNombre("Luis Miguel");
$luisMiguel->setApellidos("Apellidos");
$luisMiguel->setDNI("12345678A");

echo $luisMiguel->getNombre();


?>

