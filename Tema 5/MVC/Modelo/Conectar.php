<?php

class Conectar {


	public static function conexion() {

		try{

			$conexion=new PDO('mysql:localhost;dbname=pruebas','root','');

			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPT);

			$conexion>exec("SET CHARACTER SET UTF-8");


		} catch(Exception $e) {

			die("Error".$e->getMessage());
			echo "Línea del error" . $e->getLine();



		}

		return $conexion;
	}




}




?>