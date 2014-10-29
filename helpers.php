<?php

function field($tipo,$campo){

	//$campo="apellido_paterno";
	$texto = explode("_",$campo);
	//$texto[0]="apellido";
	//$texto[1]="paterno";
	foreach($texto as &$e){
		//$e = "apellido";
		//$e = "Apellido";
		//$e = "paterno";
		//$e = "Paterno";
		$e = ucfirst($e);
	}
	$texto = implode(" ",$texto);
	//$texto =
	if($tipo=='text'){
		view('fields/campo',compact('campo','texto'));
	}else{
		return "Error";
	}
}

function getPublic(){
	return URL;
}

function view($template, $vars = array())
{
	extract($vars);
	require ROOT."/views/".$template.".blade.php";
}






