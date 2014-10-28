<?php

require_once("BaseModel.php");

class Alumno extends BaseModel{

	protected $table = "alumnos";

	protected $fields = array(
		'nombre' 			=> 'required',
		'apellido_paterno'  => 'required',
		'apellido_materno'  => '',
		'fecha_nacimiento'  => '',
	);
	
}