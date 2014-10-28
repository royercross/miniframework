<?php

require_once("BaseModel.php");

class Carrera extends BaseModel{

	protected $table = "carreras";

	protected $fields = array(
		'carrera' 			=> 'required',		
	);


	function __construct() {
		
	}	

}