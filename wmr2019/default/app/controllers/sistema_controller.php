<?php


Load::models('clases'); 
Load::models('usuarios'); 
Load::models('alumnos'); 
Load::models('cursos'); 
Load::models('datosalumnos');
Load::models('asignaturas');

Load::models('g1s1');
Load::models('g2s1');
Load::models('g3s1');
Load::models('g4s1');
Load::models('g5s1');
Load::models('g6s1');
Load::models('g7s1');
Load::models('g8s1');


 
 
class SistemaController extends AppController {

	public function index() 
	{
		if(Auth::is_valid())
		{	
						$tipo= $usuarios->usuarios_nombre=Auth::get('usuarios_nombre'); 
						//echo 'Nombre: '.$tipo.'<br>'; 
						$this->modelo = Load::model('clases')->find_all_by_sql("select * from clases where usuarios_nombre = '$tipo' ");
				        $controlador = $this->controller_name;
				        $this->campos = array(
				           
				           
				            'CURSO' => 'cursos_grado',
				            'LETRA' => 'cursos_letra',
				            'ASIGNATURA' => 'asignaturas_nombre',
				            
				            'Opciones' => '$'
				        );
				 
				        // Definimos las acciones que tendremos en la columna Opciones
				        $this->opciones = array(
				        '<img src="http://localhost/wmr/default/public/img/editar.svg" 
				        alt="Editar!" title="Editar!" height="20" width="20" />' => "$controlador/editar/",
				        
				'<img src="http://localhost/wmr/default/public/img/lupa.png" 
				alt="ver" title="ver" height="20" width="20" value="ver" />' => "$controlador/ver/"
				        

				        );
				 
				        $this->adicionales = array(
				            'sexo' => 'Femenino|Masculino'
				        );
		}
		else{
			Flash::error('Debe iniciar sesion!');
			Auth::destroy_identity();
			Router::redirect("principal/login");
		}
			
	}

	public function salir()
	{
		if(Auth::is_valid()){
			Auth::destroy_identity();
			Router::redirect("principal/login");
			
		}		
	}

	public function error() 
	{
		
			
	}
	

	public function editar($id)
	{
		if(Auth::is_valid())
		{
			$posts = Load::model('clases')->find_all_by_sql("select * from clases where id ='$id'");
	
	 
				foreach ($posts as $posts)
				{
				
					
					$curso = $posts->cursos_grado;
					$letra = $posts->cursos_letra;
					$profes= $posts->usuarios_nombre;
					$asignatura = $posts->asignaturas_nombre;

					echo "<input type='hidden' id='tcurso' readonly name='tcurso' value='$curso' >";
					echo "<input type='hidden' id='tletra' readonly name='tletra' value='$letra' >";
					echo "<input type='hidden' id='tprofe' readonly name='tprofe' value='$profes' >";
					echo "<input type='hidden' id='tasignatura' readonly name='tasignatura' value='$asignatura' >";
					echo "<p><br><br></p>"; 
					echo $curso.'° ';
					echo $letra.' - ';
					
					echo $asignatura.' - ';
					echo $profes;
				 
				}
		}
		else
		{
			Flash::error('Debe iniciar sesion!');
			Auth::destroy_identity();
			Router::redirect("principal/login");
		}

	}

	public function ver($id)
	{
		if(Auth::is_valid())
		{
			$this->id = $id;
	
	 
				 
		}
		else
		{
			Flash::error('Debe iniciar sesion!');
			Auth::destroy_identity();
			Router::redirect("principal/login");
		}

	}

	public function informe($page=1)
	{
		if(Auth::is_valid())
		{
			$tipo= $usuarios->usuarios_nombre=Auth::get('usuarios_nombre');
			//echo "Profesor: ".$tipo;
			$posts = Load::model('cursos')->find_all_by_sql
			("select * from cursos where usuarios_nombre = '$tipo' ");
				foreach ($posts as $posts)
				{				
					$curso = $posts->cursos_grado;
					$letra = $posts->cursos_letra;
					//echo '<h3>'."Curso: ".$curso.'° Básico '.$letra.'</h3>';				 	
				}
				if($curso=='1')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos1a($page);
				}
				if($curso=='2')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos2a($page);
				}
				if($curso=='3')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos3a($page);
				}
				if($curso=='4')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos4a($page);
				}
				if($curso=='5')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos5a($page);
				}
				if($curso=='6')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos6a($page);
				}
				if($curso=='7')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos7a($page);
				}
				if($curso=='8')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos8a($page);
				}

			
		}
		else
		{
			Flash::error('Debe iniciar sesion!');
			Auth::destroy_identity();
			Router::redirect("principal/login");
		}

	}

	public function informe2sem($page=1)
	{
		if(Auth::is_valid())
		{
			$tipo= $usuarios->usuarios_nombre=Auth::get('usuarios_nombre');
			//echo "Profesor: ".$tipo;
			$posts = Load::model('cursos')->find_all_by_sql
			("select * from cursos where usuarios_nombre = '$tipo' ");
				foreach ($posts as $posts)
				{				
					$curso = $posts->cursos_grado;
					$letra = $posts->cursos_letra;
					//echo '<h3>'."Curso: ".$curso.'° Básico '.$letra.'</h3>';				 	
				}
				if($curso=='1')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos1a($page);
				}
				if($curso=='2')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos2a($page);
				}
				if($curso=='3')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos3a($page);
				}
				if($curso=='4')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos4a($page);
				}
				if($curso=='5')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos5a($page);
				}
				if($curso=='6')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos6a($page);
				}
				if($curso=='7')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos7a($page);
				}
				if($curso=='8')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos8a($page);
				}

			
		}
		else
		{
			Flash::error('Debe iniciar sesion!');
			Auth::destroy_identity();
			Router::redirect("principal/login");
		}

	}

	public function informefinal($page=1)
	{
		if(Auth::is_valid())
		{
			$tipo= $usuarios->usuarios_nombre=Auth::get('usuarios_nombre');
			//echo "Profesor: ".$tipo;
			$posts = Load::model('cursos')->find_all_by_sql
			("select * from cursos where usuarios_nombre = '$tipo' ");
				foreach ($posts as $posts)
				{				
					$curso = $posts->cursos_grado;
					$letra = $posts->cursos_letra;
					//echo '<h3>'."Curso: ".$curso.'° Básico '.$letra.'</h3>';				 	
				}
				if($curso=='1')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos1a($page);
				}
				if($curso=='2')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos2a($page);
				}
				if($curso=='3')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos3a($page);
				}
				if($curso=='4')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos4a($page);
				}
				if($curso=='5')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos5a($page);
				}
				if($curso=='6')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos6a($page);
				}
				if($curso=='7')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos7a($page);
				}
				if($curso=='8')
				{
					$this->listAlumnos = (new Alumnos)->getAlumnos8a($page);
				}

			
		}
		else
		{
			Flash::error('Debe iniciar sesion!');
			Auth::destroy_identity();
			Router::redirect("principal/login");
		}

	}

	public function admin()
	{
		 
		if(Auth::is_valid())
		{
		 
			
		 
		}
		else
		{
			Flash::error('Debe iniciar sesion!');
			Auth::destroy_identity();
			Router::redirect("principal/login");
		}
	}

	
	protected function before_filter()
	{
		// Verificando si el rol del usuario actual tiene permisos para la acción a ejecutar
		if(!$this->acl->is_allowed($this->userRol, $this->controller_name, $this->action_name))
			{
				Flash::error("Acceso negado");
				Router::redirect("principal/error");							
				return false;
			}
	}

 
	

	
	

	
}