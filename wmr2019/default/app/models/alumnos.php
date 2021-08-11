<?php
class Alumnos extends ActiveRecord	{
		
 	public function getAlumnos1a($page, $ppage=1)

    {

        return $this->paginate_by_sql("select * from alumnos where cursos_grado = '1' 
        	ORDER BY alumnos_nombre ASC", "page: $page", "per_page: $ppage", null);

    }

    public function getAlumnos2a($page, $ppage=1)

    {

        return $this->paginate_by_sql("select * from alumnos where cursos_grado = '2' 
        	ORDER BY alumnos_nombre ASC", "page: $page", "per_page: $ppage", null);

    }

    public function getAlumnos3a($page, $ppage=1)

    {

        return $this->paginate_by_sql("select * from alumnos where cursos_grado = '3' 
        	ORDER BY alumnos_nombre ASC", "page: $page", "per_page: $ppage", null);

    }

    public function getAlumnos4a($page, $ppage=1)

    {

        return $this->paginate_by_sql("select * from alumnos where cursos_grado = '4' 
        	ORDER BY alumnos_nombre ASC", "page: $page", "per_page: $ppage", null);

    }

    public function getAlumnos5a($page, $ppage=1)

    {

        return $this->paginate_by_sql("select * from alumnos where cursos_grado = '5' 
        	ORDER BY alumnos_nombre ASC", "page: $page", "per_page: $ppage", null);

    }

    public function getAlumnos6a($page, $ppage=1)

    {

        return $this->paginate_by_sql("select * from alumnos where cursos_grado = '6' 
        	ORDER BY alumnos_nombre ASC", "page: $page", "per_page: $ppage", null);

    }

    public function getAlumnos7a($page, $ppage=1)

    {

        return $this->paginate_by_sql("select * from alumnos where cursos_grado = '7' 
        	ORDER BY alumnos_nombre ASC", "page: $page", "per_page: $ppage", null);

    }

    public function getAlumnos8a($page, $ppage=1)

    {

        return $this->paginate_by_sql("select * from alumnos where cursos_grado = '8' 
        	ORDER BY alumnos_nombre ASC", "page: $page", "per_page: $ppage", null);

    }
			
}