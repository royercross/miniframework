<?php

require_once("BaseModel.php");

class Usuario extends BaseModel{

	public $table = "usuarios";

	protected $fields = array(
		'correo' 	=> '',
		'password'  => '',		
	);	
	
}