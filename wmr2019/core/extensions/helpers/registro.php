<?php
 
class Registro {
 
    /**
     * Helpers para crear un datagrid sencillo a partir de un ActiveRecord
     * Ejemplo:
     * Sin Opciones
     * <code>
     * $campos = array(
     *		'Codigo' => 'id',
     *		'Nombre' => 'nombre',
     *		'Telefono' => 'telefono',
     *		'Direccion' => 'direccion');
     * </code>
     * Con Opciones
     * <code>
     * $campos = array(
     *		'Codigo' => 'id',
     *		'Nombre' => 'nombre',
     *		'Telefono' => 'telefono',
     *		'Direccion' => 'direccion',
     *          'Opciones' => '$');
     *
     * $opciones = array(
     *		'Actulizar' => 'controlador/actualizar/',
     *		'Modificar' => 'controlador/modificar/',
     *		'Detalles' => 'controlador/detalles/',
     *		'Borrar' => 'controlador/borrar/');
     * </code>
     * Adicionales
     * <code>
     * $campos = array(
     *		'sexo' => 'Femenino|Masculino',
     *		'estado' => 'Activo|Inactivo',
     *		't_vivienda' => 'Propia|Alquilada|Heredada|Choza');
     * </code>
     *
     * @param Object $modelo
     * @param Array $campos
     * @param Array/Null $opciones
     * @param Array/Null $adicionales
     * @return String 
     *
     */
    public static function datagrid($modelo, $campos, $opciones = NULL, $adicionales = NULL) {
 
        // Agregar el ccs para el datagrid
        Tag::css('datagrid');
 
        // Cabecera
        $grid = "<div id=\"datagrid\">";
        $grid .= "<table border=\"1px\" cellpadding=\"0px\"  width='100%' cellspacing=\"0px\" align=\"center\">";
        $grid .= "<thead><tr style='background-color: #9FBF36; color: #FFFFFF'>";
 
        // Titulo de la tabla
        foreach ($campos as $titulo => $valor):
 
            // Campo pequeño si es Id o Código
            if ( $titulo == "C&oacute;digo" || $titulo == "Id" ):
                $grid .= "<th width=\"10px\">";
            else:
                $grid .= "<th>";
            endif;
 
            $grid .= $titulo;
            $grid .= "</th>";
 
        endforeach;
 
        $grid .= "</tr></thead><tbody>";
        $i = 1;
 
        // Datos de la tabla
        if (count($modelo)) :
            foreach ($modelo as $model):
 
                // Columnas pares o impares
                if ( ($i%2) == 0 ):
                    $colm = 'par';
                else:
                    $colm = 'impar';
                endif;
                $grid .= "<tr class=\"$colm\">";
                $i++;
 
                // Data
                foreach ($campos as $campo):
 
                    // Si es activado la fila Opciones
                    if ( $campo == '$' ):
 
                        $grid .= "<td align=\"center\" width=\"150\">";
                        $cant = count($opciones);
                        $j = 1;
 
                        foreach ($opciones as $opcion => $link):
 
                            $link = $link . $model->id;
                            $grid .= Html::link($link, $opcion);
 
                            if ($cant != $j):
                                 $grid .= " | ";
                            endif;
 
                            $j++;
                        endforeach;
 
                        $grid .= "</td>";
                    else:
 
                        // Centrar si el campo es el id
                        if ( $campo == "id" ):
                            $campoc = "align=\"center\"";
                        else:
                            $campoc = "align=\"center\"";
                        endif;
 
                        if (count($adicionales)) :
                            if (array_key_exists ($campo, $adicionales)):
                                    $addons = explode("|", $adicionales[$campo]);
                                    $grid .= "<td $campoc>" . $addons[$model->$campo] . "</td>";
                            else:
                                $grid .= "<td $campoc>" . $model->$campo . "</td>";
                            endif;
                        else:
                            $grid .= "<td $campoc>" . $model->$campo . "</td>";
                        endif;
 
                    endif;
                endforeach;
 
                $grid .= "</tr>";
 
            endforeach;
        else:
            $grid .= "<tr><td colspan='" . count($campos) . "' align='center'>No hay registros </td></tr>";
        endif;
        $grid .= "</tbody></table></div>";
 
        return $grid;
    }
}
?>