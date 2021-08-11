<?php
 
/**
 * Description of Tabla
 *
 * @author manuel
 */
class Tabla {
 
	/**
	 * nombres de las columnas de la tabla
	 *
	 * @var array
	 */
	protected static $_cabeceras = array();
	/**
	 * anchos de las columnas de la tabla
	 *
	 * @var array
	 */
	protected static $_anchuras = array();
	/**
	 * campos a mostrar de la Tabla de la bd
	 *
	 * @var array  
	 */
	protected static $_campos = array();
	/**
	 * Consulta con los datos a mostrar en la tabla
	 *
	 * @var ActiveRecord
	 */
	protected static $_modelo;
	/**
	 * acciones que puede realizar el usuario, ejemplo: editar, eliminar, etc
	 *
	 * @var array
	 */
	protected static $_acciones = array();
	/**
	 * para que se muestre un checkbox en la primera columna de la tabla
	 *
	 * @var array
	 */
	protected static $_check = null;
	/**
	 * paginador de los resultados de la consulta
	 *
	 * @var ActiveRecord
	 */
	protected static $_paginador = null;
	/**
	 * url paginador de los resultados de la consulta
	 *
	 * @var string
	 */
	protected static $_urlPaginador = null;
	/**
	 * mensaje a mostrar cuando no allá registros que mostrar en la tabla
	 *
	 * @var string
	 */
	protected static $_mensajeSinRegistros = 'La Consulta No Arrojó Ningun Registro';
	/**
	 * clases para los tr de la tabla, para dar un formato de cebra
	 *
	 * @var string
	 */
	protected static $_clases = array();
	/**
	 * posicion actual del arreglo $_clases
	 *
	 * @var int
	 */
	private static $_posClass = 0;
 
	/**
	 * crea la tabla 
	 */
	public static function crear() {
		if (!sizeof(self::$_campos)) {
			if (sizeof(self::$_modelo)) {
				self::$_campos = self::$_cabeceras = self::$_modelo[0]->non_primary;
			} else {
				return '';
			}
		}
		return self::crearTabla();
	}
 
	/**
	 * crea la tabla con las columnas especificadas
	 */
	protected static function crearTabla() {
		$x = 0;
		$html = '<table class="tabla">';
		$html .= '   <thead>';
		$html .= '      <tr>';
		if (self::$_check) {
			$html .= '<th style="width:30px">Selec.</th>';
		}
		for (; $x < sizeof(self::$_cabeceras); ++$x) {
			$html .= '         <th style="width:' . @self::$_anchuras[$x] . '">' . h(strtoupper(self::$_cabeceras[$x])) . '</th>';
		}
		foreach (self::$_acciones as $accion) {
			$html .= '<th style="width:' . @self::$_anchuras[$x] . '">-------</th>';
			++$x;
		}
		$html .= '      </tr></thead><tbody>';
		foreach (self::$_modelo as $fila) {
			$html .= '<tr class="' . self::sigClass() . '">';
			if (self::$_check) {
				$html .= '<td>' . Form::check(self::$_check['nombre'] . '.' . $fila->id, $fila->id) . '</td>';
			}
			foreach (self::$_campos as $campo) {
				if (is_array($campo)) {
					if (method_exists($fila->$campo[0](), "{$campo[1]}")) {
						$html .= '<td>' . $fila->$campo[0]()->$campo[1]() . '</td>';
					} else {
						$html .= '<td>' . $fila->$campo[0]()->$campo[1] . '</td>';
					}
				} else {
					if (method_exists($fila, "{$campo}")) {
						$html .= '<td>' . $fila->$campo() . '</td>';
					} else if (isset($fila->$campo)) {
						$html .= '<td>' . $fila->$campo . '</td>';
					} else {
						$html .= '<td>' . $campo . '</td>';
					}
				}
			}
			foreach (self::$_acciones as $accion) {
				$html .= '<td><a href="' . $accion['url'] . '/' . $fila->id . '" ' . $accion['atributos'] . '>';
				$html .= $accion['img'] . $accion['texto'] . '</a></td>';
			}
			$html .= '</tr>';
		}
		$html .= '   </tbody>';
		if (sizeof(self::$_modelo)) {
			if (self::$_paginador) {
				$html .= '   <tfoot><tr><td colspan="100">';
				$html .= self::paginador();
				$html .= '</td></tr></tfoot>';
			}
		} else {
			$html .= '   <tfoot><tr><td colspan="100">';
			$html .= self::$_mensajeSinRegistros;
			$html .= '</td></tr></tfoot>';
		}
		$html .= '</table>';
		return $html;
	}
 
	/**
	 * Separa los campos del modelo, de los campos de las subTablas
	 * ...espero otro lo pueda explicar mejor :P
	 *
	 * @param array $campos campos y subTablas de la base de datos
	 */
	protected static function extraerCampos($campos) {
		for ($x = 0; $x < sizeof($campos); ++$x) {
			if (sizeof($temp = explode('.', $campos[$x])) > 1) {
				$tabla = 'get' . ucfirst($temp[0]);
				$campos[$x] = array($tabla, $temp[1]);
			}
		}
		self::$_campos = $campos;
	}
 
	/**
	 * asigna un mensaje a mostrar cuando la consulta no arroje resultados
	 *
	 * @param $string $mensaje mensaje a mostrar
	 */
	public static function mensaje($mensaje) {
		self::$_mensajeSinRegistros = $mensaje;
	}
 
	/**
	 *  establece los nombres de las columnas que se mostraran en la tabla
	 *
	 * @param array $array arreglo con los nombres de las cabeceras
	 * @param string $strings nombres de las cabeceras
	 */
	public static function cabeceras() {
		$parametros = Util::getParams(func_get_args());
		if (is_array($parametros[0])) {
			self::$_cabeceras = $parametros[0];
		} else {
			self::$_cabeceras = $parametros;
		}
	}
 
	/**
	 *  establece los anchos de las columnas que de la tabla
	 *
	 * @param array $array arreglo con los anchos de las columnas
	 * @param string $strings anchos de las columnas
	 */
	public static function anchoColumnas() {
		$parametros = Util::getParams(func_get_args());
		if (is_array($parametros[0])) {
			self::$_anchuras = $parametros[0];
		} else {
			self::$_anchuras = $parametros;
		}
	}
 
	/**
	 *  establece los anchos de las columnas que de la tabla
	 *
	 * @param array $array arreglo con los anchos de las columnas
	 * @param string $strings anchos de las columnas
	 */
	public static function anchoCols() {
		$parametros = Util::getParams(func_get_args());
		if (is_array($parametros[0])) {
			self::$_anchuras = $parametros[0];
		} else {
			self::$_anchuras = $parametros;
		}
	}
 
	/**
	 *  Establece los campos a mostrar de las tablas
	 *
	 * @param array $array arreglo con los campos de las tablas
	 * @param string $strings campos de las tablas
	 *
	 * @return void
	 * ejemplos:
	 *
	 *  llamando solo a los campos de la tabla
	 *
	 *      Tabla::campos(array('cedula','email','nombres'));
	 *      Tabla::campos('cedula','email','nombres');
	 *
	 *  llamando a tablas q estan relacionadas
	 *
	 *      Tabla::campos(array('cedula','email','nombres','direcciones.ciudad'));
	 *      Tabla::campos('cedula','email','nombres','direcciones.ciudad');
	 *
	 *  llamando a metodos en vez de a campos
	 *
	 *      Tabla::campos(array('cedula','getNombres','direcciones.getCiudad'));
	 *      Tabla::campos('cedula','getNombres','direcciones.getCiudad');
	 *
	 *  no llamando a ningun metodo ni miembro de ningun modelo
	 *  sino que creando un enlace
	 *
	 *      Tabla::campos('cedula','nombres',Html::link('index','holaaa'));
	 *
	 */
	public static function campos() {
		$parametros = Util::getParams(func_get_args());
		if (is_array($parametros[0])) {
			self::extraerCampos($parametros[0]);
		} else {
			self::extraerCampos($parametros);
		}
	}
 
	/**
	 *  agrega un link al final de la tabla
	 *
	 * @param string $url url hacia donde llevará el link
	 * @param string $texto texto a mostrar 
	 * @param string $img url de la imagen a mostrar
	 */
	public static function link($url, $texto, $img = false) {
		if ($img) {
			$img = '<img src="' . PUBLIC_PATH . 'img/' . $img . '" width="15px" align="left" style="margin-right:10px;" />';
		} else {
			$img = '';
		}
		self::$_acciones[] = array(
			'url' => PUBLIC_PATH . $url,
			'atributos' => '',
			'texto' => $texto,
			'img' => $img
		);
	}
 
	/**
	 *  agrega un check al principio de la tabla
	 *
	 * @param string $nombre nombre del check
	 */
	public static function check($nombre) {
		self::$_check = array(
			'nombre' => $nombre,
		);
	}
 
	/**
	 *  agrega una accion con mensaje de confirmacion al final de la tabla
	 *
	 * @param string $url url hacia donde llevará el link
	 * @param string $texto texto a mostrar
	 * @param string $confirm texto a mostrar
	 * @param string $img url de la imagen a mostrar
	 */
	public static function linkConfirm($url, $texto, $confim = '¿ Está Seguro ?', $img = false) {
		if ($img) {
			$img = '<img src="' . PUBLIC_PATH . 'img/' . $img . '" width="15px" align="left" style="margin-right:10px;" />';
		} else {
			$img = '';
		}
		self::$_acciones[] = array(
			'url' => PUBLIC_PATH . $url,
			'atributos' => 'class= "js-confirm" title="' . $confim . '"',
			'texto' => $texto,
			'img' => $img
		);
	}
 
	/**
	 *  resultado de la consulta que se mostrara en la tabla
	 *
	 * @param ActiveRecord $modelo resultado de una consulta
	 */
	public static function modelo($modelo) {
		if (isset($modelo->items)) {
			self::$_modelo = $modelo->items;
			self::$_paginador = $modelo;
		} else {
			self::$_modelo = $modelo;
		}
	}
 
	/**
	 *  asigna el url que usará el paginador
	 *
	 * @param strin $uel url del paginador
	 */
	public static function urlPaginador($url) {
		self::$_urlPaginador = $url . '/';
	}
 
	/**
	 *  establece las clases que tendran las filas de la tabla
	 * para crear un efecto de cebra
	 *
	 * @param array $array arreglo con los nombres de las clases
	 * @param string $strings cadenas con los nombres de las clases
	 */
	public static function clases() {
		$parametros = Util::getParams(func_get_args());
		if (is_array($parametros[0])) {
			self::$_clases = $parametros[0];
		} else {
			self::$_clases = $parametros;
		}
	}
 
	protected static function sigClass() {
		if (sizeof(self::$_clases)) {
			if (self::$_posClass == sizeof(self::$_clases)) {
				self::$_posClass = 0;
			}
			return self::$_clases[self::$_posClass++];
		}  else {
			return '';
		}
	}
 
	protected static function paginador() {
		$html = '';
		if (self::$_paginador->prev) {
			$html .= Html::link(self::$_urlPaginador . self::$_paginador->prev, 'Anterior', 'title="Ir a la pág. anterior" class="nextprev"');
			$html .= '&nbsp;&nbsp;';
		}
		for ($x = 1; $x <= self::$_paginador->total; ++$x) {
			$html .= self::$_paginador->current == $x ? '<strong>' . $x . '</strong>' : Html::link(self::$_urlPaginador . $x, $x);
			$html .= '&nbsp;&nbsp;';
		}
		if (self::$_paginador->next) {
			$html .= Html::link(self::$_urlPaginador . self::$_paginador->next, 'Siguiente', 'title="Ir a la pág. siguiente" class="nextprev"');
		}
		return $html;
	}
 
}