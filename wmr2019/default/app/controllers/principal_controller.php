<?php


 
Load::models('usuarios'); 

 
 
class PrincipalController extends AppController {

	public function index() 
	{
		
			
	}
	public function error() 
	{
		
			
	}
	public function nosotros() 
	{
		
	}
	
	
	
	public function registro() 
	{
					Flash::error("Error usuario y/o password :(");
					Router::redirect("principal/login");

	}

	

	public function login(){

		if (Input::hasPost("usuarios_rut","usuarios_pass")) {
			$pwd = Input::post("usuarios_pass");
			//$pwd = md5(Input::post("usuarios_pass"));
			$usuario=Input::post("usuarios_rut");
 			//$pwd = md5($this->post("clave"));//AQUIIII
			if($pwd!=NULL and $usuario!=NUll){
				$auth = new Auth("model", "class: usuarios", "usuarios_rut: $usuario", "usuarios_pass: $pwd");
				if ($auth->authenticate()) {
					Flash::valid("Bienvenido");
					Router::redirect("sistema/index");
				} else {
					Flash::error("Error usuario y/o password :(");
					Router::redirect("principal/login");
				}
			}
			else{
					Flash::error("Campos vacios");
					Auth::destroy_identity();
					Router::redirect("principal/login");
			}
		}
	}
}