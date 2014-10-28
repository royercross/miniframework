<?php

	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "desarrolloweb";

	function conectar(){

		global $server, $user, $password, $database;

		try{
			$conexion = 
				new PDO("mysql:host=".$server.";dbname=".$database
						.";charset=utf8;", $user, $password);
		}catch(PDOException $e){

			die("Ocurrio un error al conectarse.".$e->getMessage());
		}

		return $conexion;

	}


	function my_execute($query , $conexion){

		return $conexion->query($query);

	}
