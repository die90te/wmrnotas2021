<?php
/**
 * @see Controller nuevo controller
 */
require_once CORE_PATH . 'kumbia/controller.php';

/**
 * Controlador principal que heredan los controladores
 *
 * Todas las controladores heredan de esta clase en un nivel superior
 * por lo tanto los metodos aqui definidos estan disponibles para
 * cualquier controlador.
 *
 * @category Kumbia
 * @package Controller
 */
class AppController extends Controller
{

    public $acl; //variable objeto ACL
    public $userRol = ""; //variable con el rol del usuario autenticado en la aplicación
 
    final protected function initialize(){
        if(Auth::is_valid()) 
        
        $this->userRol = Auth::get("rol");
 
        $this->acl = new Acl();
        //Se agregan los roles
        $this->acl->add_role(new AclRole("A")); // ADMINISTRADOR
        $this->acl->add_role(new AclRole("P")); // PROFES
 
        //Se agregan los recursos
        $this->acl->add_resource(new AclResource("sistema"), 
        "admin","editar","index","informe","informe2sem","informefinal","ver","salir"); 
        //$this->acl->add_resource(new AclResource("principal"),"login","salir","error"); 


        //Se crean los permisos     
        $this->acl->allow("A", "sistema", array("admin","index","salir"));    
        $this->acl->allow("P", "sistema", array("index","editar","informe","informe2sem","informefinal","ver","salir"));        
        //$this->acl->allow("A", "principal", array("error","login", "salir"));        
        //$this->acl->allow("P", "principal", array("error","login", "salir"));        
        //$this->acl->allow("A", "usuarios", array("page","editar","borrar","sendFile"));        

        
    }

    //final protected function initialize()
    //{

    //}

    final protected function finalize()
    {
        
    }

}
