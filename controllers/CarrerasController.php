<?php
//CONSULTA A LA BASE DE DATOS

include ROOT . "/models/Carrera.php";

class CarrerasController{

	function __construct() {
		
	}

	function lista(){			
		view('carreras/lista');
	}

	function agregar(){
		view('carreras/agregar');
	}

	function guardar(){		

		$carrera = new Carrera();
		$carrera->setData($_POST);

		if($carrera->save()){
			$mensaje="La carrera se agrego correctamente.";
			view('carreras/agregar',compact('mensaje'));
		}else{		
			$errors = $carrera->errors;	
			view('carreras/agregar',compact('errors'));
		}
		

		//var_dump($_POST);
	}
}


