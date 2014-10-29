<?php
//CONSULTA A LA BASE DE DATOS

include ROOT . "/models/Alumno.php";
include ROOT . "/repositories/AlumnosRepo.php";

class AlumnosController{

	function __construct() {
		
	}

	function lista(){		
		$repo = new AlumnosRepo();
		$alumnos = $repo->alumnos();		
		view('alumnos/lista',compact('alumnos'));
	}

	function agregar(){
		view('alumnos/agregar');
	}

	function guardar(){		

		$alumno = new Alumno();
		$alumno->setData($_POST);

		if($alumno->save()){
			$mensaje="El alumno se agrego correctamente.";
			view('alumnos/agregar',compact('mensaje'));
		}else{		
			$errors = $alumno->errors;	
			view('alumnos/agregar',compact('errors'));
		}
		

		//var_dump($_POST);
	}

	function eliminar($id){

		$repo = new AlumnosRepo();
		$alumno = $repo->find($id);

		$alumno->delete();		
		$alumnos = $repo->alumnos();		
		$mensaje="El alumno se ha eliminado correctamente.";
		view('alumnos/lista',compact('alumnos','mensaje'));
	}
}


