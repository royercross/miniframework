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

	public function perfil(){
		$repo = new UsuariosRepo();
		$usuario = $repo->find(getSession('id'));
		//var_dump($usuario);
		view('perfil',compact('usuario'));
	}

	public function actualizaPerfil(){
		$repo = new UsuariosRepo();
		$usuario = $repo->find(getSession('id'));	

		$usuario->setData($_POST);
		$archivoCargado=true;

		if(isset($_FILES['imagen_perfil']) && strlen($_FILES['imagen_perfil']['name'])>0){
			$archivoCargado=$repo->uploadImage($_FILES, 'imagen_perfil','perfil.jpg');	
		}
		
			
		if($usuario->save() && $archivoCargado === TRUE){
			setSession('mensaje',"El perfil se actualizado correctamente.");
			redirect('usuarios/perfil');
		}else{		
			$errors = $usuario->errors;	
			if($archivoCargado !== TRUE){
				array_push($errors, $archivoCargado);
			}			
			
			setSession('errores', $errors);
			redirect('usuarios/perfil');
			//view('alumnos/agregar',compact('errors'));
		}		

	}
	
}


