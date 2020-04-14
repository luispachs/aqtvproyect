 <?php
/*
Desarrollador: Luis Alfredo Pacheco Sandoval
Correo: laps1308@gmail.com
Descripción: Codigo  para la conexion  a la base de datos
*/
class noticias extends mysqli {
  private $host ;
  private $user ;
  private $password ;
  private $database;
  private $conn;
  public $errno;
  public $error;
  private $buscar="";
  private $valorMin=0;
  private $valorMax=0;
  private $tipo="todo";
  private $consulta="";
  private $respuesta=null;
  public function __construct() {

    $this->host="localhost";
    $this->user ="clienteProducto";
    $this->password ="123456789";
    $this->database ="aqtv";

    //$this->conn=parent::__construct($this->host,$this->user,$this->password,$this->database);
    $this->conn= new  mysqli($this->host,$this->user,$this->password,$this->database);
  //  $this->errno= $this->conn->connect_errno;
    //$this->error= $this->conn->connect_error;
  }

  public function connection_sql($dato1,$dato2,$dato3,$dato4){
    $pnombre;
    $pid;
    $pprecio;
    $ptipo;
    $pdescripcion;
    if(!$this->conn->connect_error){
      $this->buscar=$dato1;
      $this->valorMin=(int)$dato2;
      $this->valorMax=(int)$dato3;
      $this->tipo=$dato4;
      /*Verificacion de datos  si contienen algun valor para pasar los  datos a la consulta*/
      if($this->buscar===""){// Si el campo buscar esta vacio
        if($this->valorMin===0){//si el campo valorMin tienen es igual a 0
          if($this->valorMax===0){//si el campo valorMin tienen es igual a 0
            if($this->tipo="todo"){//si El capo tipo esta marcado como "Todo"
            //Consulta general para mostrar al inicio de pagina productos
             $this->consulta="select * from productos";
             $respuesta1= $this->conn->query($this->consulta);
             $i=1;
             $matrix=array();
             while($i<=$this->conn->affected_rows){
              $this->respuesta=$respuesta1->fetch_array(MYSQLI_ASSOC);
            /*Creacion de array compuesto de array para ser retornados los datos de la consulta */
              $matrix2= array("id"=>$this->respuesta["pid"],"nombre"=>$this->respuesta["pnombre"],"precio"=>$this->respuesta["pprecio"],"tipo"=>$this->respuesta["ptipo"],"descripcion"=>$this->respuesta["pdescripcion"],"imagen"=>$this->respuesta["pimagen"]);

             $matrix[]=$matrix2;
             
             $i++;
             }
             //retorno del datos
             return $matrix;
            }
          }
        }
      }
      else if($this->buscar!=""||$this->valorMin!=0||$this->valorMax!=0||$this->tipo!="todo"){
        $this->consulta="select * from productos where pnombre like '%{$this->buscar}%' and pprecio between {$this->valorMin} and {$this->valorMax} and ptipo= '{$this->tipo}'";
        $this->respuesta1=$this->conn->query($this->consulta);
        $i=1;
        $matrix2;
        $matrix= array();
        while($i<=$this->conn->affected_rows){
          $this->respuesta=$this->respuesta1->fetch_array(MYSQLI_ASSOC);
          $matrix2=array("id"=>$this->respuesta["pid"],"nombre"=>$this->respuesta["pnombre"],"precio"=>$this->respuesta["pprecio"], "tipo"=>$this->respuesta["ptipo"],"descripcion"=>$this->respuesta["pdescripcion"],"imagen"=>$this->respuesta["pimagen"]);
          $matrix[]=$matrix2;
          $i++;

        }
        return $matrix;
      

      }
     
      $this->conn->close();

    }

}

}

$data = new noticias();
$data->connection_sql("",0,0,"todo");
 ?>
