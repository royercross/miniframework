<?php
//CONSULTA A LA BASE DE DATOS

include ROOT . "/models/Usuario.php";
include ROOT . "/repositories/UsuariosRepo.php";

class UsuariosController{

	public function login(){		
		view('login');
	}

	public function loginpost(){	
		$datos = $_POST;
		$correo = $datos['correo'];
		$password = $datos['password'];
		
		$repo = new UsuariosRepo();

		if($repo->login($correo,$password)){
			redirect('usuarios/muro');
		}else{
			setSession('errores',array("Usuario o contraseña no valida"));
			redirect('usuarios/login');
		}
	}

	public function muro(){
		view('muro');
	}
	
}


