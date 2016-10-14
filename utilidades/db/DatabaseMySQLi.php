<?php
/**
  * DatabaseMySQLi Class
  * @author Ignacio Gutierrez
  *
  * @method consultar "Ejecuta consultas preparandolas"
  * @param string $consultaSQL "Representa el template de las consultas a realizar" 
  * @param array $valores "Representa la informacion necesaria para la consulta"
*/

class DatabaseMySQLi
{
    private static $instancia; // Contenedor de la instancia del Singleton
    private $db;
    private $db_controlador;
    private $db_servidor;
    private $db_pruerto;
    private $db_usuario;
    private $db_pass;
    private $dbh;

    /* Un constructor privado evita la creación de un nuevo objeto */
    final private function __construct($archivo = 'ubicacion/configuracion.ini')
    {
        //Obtengo los datos de un archivo de configuracion, para NO Hardcodear
            $this->obtenerConfiguracion($archivo);

        //Creo una instancia de PDO
        $this->dbh = new mysqli($this->db_servidor, $this->db_usuario, $this->db_pass, $this->db);
    
        if ($this->dbh -> connect_errno)
        {
            die( "Fallo la conexión a MySQL: (" . $this->dbh->mysqli_connect_errno() 
            . ") " . $this->dbh->mysqli_connect_error());
        }
    }
 
    
    /* Aplico Patron Singleton (Para ahorrar recursos del sistema) */
    final public static function getManejador()
    {
        if (is_null(self::$instancia)) {
            $miclase = __CLASS__;
            self::$instancia = new $miclase;
        } 
        return self::$instancia;
    }


    /* Evito que el objeto se pueda clonar, en caso de intentarlo disparo un error de nivel usuario */
    final public function __clone()
    {
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    }


    final public function consultar($consultaSQL, $parametros = null)
    {
        if($statement = $this->dbh->prepare($consultaSQL))
        {
            if(!is_null($parametros))
            { 
                $tipo = "";

                foreach($parametros as $key => $parametro)
                {
                    switch ($parametro)
                    {
                        case is_int($parametro):
                            $tipo .= 'i';
                            break;
                        case is_string($parametro):
                            $tipo .= 's';
                            break;
                    }
                }

                $tipos = explode(',', $tipo);
                $parametros = array_merge($tipos, array_values($parametros));

                call_user_func_array(array($statement, 'bind_param'), $this->referenciarValores($parametros));
            } 
            
            $statement->execute();

            if($resultado = $statement->get_result())
            {
                $datos = array();
                
                while($fila = $resultado->fetch_assoc())
                {
                    $datos[] = $fila;
                }

                $statement->close();
                return $datos;
            }

            $statement->close();
        }
        else
        {
            echo "Error al ejecutar la sentencia preparada".$this->dbh->error;
        }
    }


    final private function referenciarValores(array $arrayDeParametros)
    {
        if (strnatcmp(phpversion(),'5.3') >= 0) 
        //El parametro debe estar indicado por referencia desde PHP 5.3+
        {
            $arrayDeReferencias = array();
            
            foreach($arrayDeParametros as $key => $value)
                $arrayDeReferencias[$key] = &$arrayDeParametros[$key];
            return $arrayDeReferencias;
        }
        return $arrayDeParametros;
    }

    final private function obtenerConfiguracion($archivo)
    {
        if (!$cfg = parse_ini_file($archivo, true))
        {
            throw new exception ('No se puede abrir el archivo: ' . $archivo . '.');
        } 

        $this->db_controlador   = $cfg["database"]["driver"];
        $this->db_servidor      = $cfg["database"]["host"];
        $this->db_pruerto       = $cfg["database"]["port"];
        $this->db               = $cfg["database"]["schema"];
            
        $this->db_usuario       = $cfg['database']['username'];
        $this->db_pass          = $cfg['database']['password'];
    }
}