<?php

require_once("BaseRepo.php");

class UsuariosRepo extends BaseRepo{

    function getModel(){
        return new Usuario();
    }    

    function login($correo, $password){

    	$mysql = new DBMannager();
    	$mysql->connect();

    	$query="SELECT id,nombre FROM usuarios WHERe correo=? AND password=?";

    	$mysql->execute($query, array($correo , $password));

    	if($mysql->count() > 0){
    		$row = $mysql->getRow();
    		setSession('id',$row['id']);
    		setSession('nombre',$row['nombre']);
    		return true;
    	}else{
    		return false;
    	}

    }

	function alumnos(){
		$mysql = new DBMannager();
		$mysql->connect();

		$mysql->execute("SELECT * FROM alumnos");
		$result = $mysql->getArray();

        return $this->arrayModel($result);
	}

	

}