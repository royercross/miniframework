<?php
//CONSULTA A LA BASE DE DATOS

include ROOT . "/models/Usuario.php";
include ROOT . "/models/Publicacion.php";
include ROOT . "/repositories/UsuariosRepo.php";
include ROOT . "/repositories/PublicacionesRepo.php";

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

	public function logout(){
		session_destroy();
		redirect('');
	}

	public function muro(){

		$repo = new PublicacionesRepo();
		$publicaciones = $repo->publicaciones();

		view('muro',compact('publicaciones'));
	}

	public function publicar(){
		$publicacion = new Publicacion();
		$publicacion->setData($_POST);

		if($publicacion->save()){
			setSession('mensaje',"Tu publicacion se ha agregado correctamente.");
			redirect('usuarios/muro');
		}else{
			$errors = array("Ocurrio un error, intenta de nuevo.");
			redirect('usuarios/muro');
		}
	}
	
}


