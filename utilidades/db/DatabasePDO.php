<?php
/**
  * DatabasePDO Class
  * @author Ignacio Gutierrez
  *
  * @method consultar "Ejecuta consultas preparandolas"
  * @param string $consultaSQL "Representa el template de las consultas a realizar" 
  * @param array $valores "Representa la informacion necesaria para la consulta"
*/

class DatabasePDO
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
        try{
            $dsn = $this->db_controlador.':host=' . $this->db_servidor . ';port=' . $this->db_pruerto .';dbname=' . $this->db;

            $this->dbh = new PDO($dsn, $this->db_usuario, $this->db_pass);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);   
        }
        catch(PDOException $e)
        {
            echo "Error en la conexión: ".$e->getMessage();
            exit();
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
   
    
    // Evito que el objeto se pueda clonar, en caso de intentarlo disparo un error de nivel usuario
    final private function __clone()
    {
        trigger_error('La clonación de este objeto no está permitida', E_USER_ERROR);
    }


    final public function consultar($consultaSQL, array $valores = array())
    {
        $resultado = false;

        if($statement = $this->dbh->prepare($consultaSQL))
        {    
            //Ejecuto la consulta en la DB
            try {
                if(empty($valores))
                {
                    if (!$statement->execute())
                    {
                        print_r($statement->errorInfo());
                    }
                }else{
                    if (!$statement->execute($valores))
                    {
                        print_r($statement->errorInfo());
                    }
                }

                //Si la consulta que devuelve valores, los guardo en un arreglo asociativo.
                    $resultado = $statement->fetchAll(PDO::FETCH_ASSOC);
                $statement->closeCursor();
            }
            catch(PDOException $e){
                /*
                    Si el codigo de error es = HY000 indica que el metodo fetchAll() devolvio vacio.
                    Devuelve vacio, cuando se ejecuta consultas INSERT y UPDATE
                */
                if($e->getCode()!='HY000')
                {
                    echo "Error de ejecución: \n";
                    print_r($e->getMessage());
                }
            }   
        }
        return $resultado;
    }

    final private function obtenerConfiguracion($archivo)
    {
        if (!$cfg = parse_ini_file($archivo, true))
        {
            throw new exception ('No se puede abrir el archivo: ' . $archivo . '.');
            exit();
        } 

        $this->db_controlador   = $cfg["database"]["driver"];
        $this->db_servidor      = $cfg["database"]["host"];
        $this->db_pruerto       = $cfg["database"]["port"];
        $this->db               = $cfg["database"]["schema"];
            
        $this->db_usuario       = $cfg['database']['username'];
        $this->db_pass          = $cfg['database']['password'];
    }
}