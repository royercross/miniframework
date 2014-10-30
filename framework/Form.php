<?php

class Form{

	static $model;

	public static function open($method,$action,$model=NULL){
		if(isset($model)){
			self::$model = $model;
			$action .= "/".$model->id;	
		} 
		echo "<form role='form' method='$method' action='$action'>";
	}

	public static function close(){		
		echo "<form>";
		if(isset($model)){
			unset(self::$model);
		}
	}

	public static function field($tipo,$campo){

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
		
		$value = "";
		if(isset(self::$model->$campo)){
			$value = self::$model->$campo;
		}

		if($tipo=='text'){
			view('fields/text',compact('campo','texto','value'));
		}else{
			return "Error";
		}
	}

}