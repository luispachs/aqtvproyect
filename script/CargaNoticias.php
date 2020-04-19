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
  private $tipo="Todo";
  private $consulta="";
  private $respuesta=null;
  private $matrix=array();
  public function __construct() {

    $this->host="localhost";
    $this->user ="clienteProducto";
    $this->password ="123456789";
    $this->database ="aqtv";

    
    $this->conn= new  mysqli($this->host,$this->user,$this->password,$this->database);
  
  }

  public function connection_sql($dato1,$dato2,$dato3,$dato4){
    
    
    if(!$this->conn->connect_error){
      $this->buscar=$dato1;
      $this->valorMin=(int)$dato2;
      $this->valorMax=(int)$dato3;
      $this->tipo=$dato4;
      $i=1;
      /*Verificacion de datos  si contienen algun valor para pasar los  datos a la consulta*/
      if($this->buscar==="" && $this->valorMin===0 && $this->valorMax===0 && $this->tipo==="Todo"){// Si los campos buscar esta vacio
        
             $this->consulta="select * from productos";
             $this->respuesta1= $this->conn->query($this->consulta);
            
             
             while($i<=$this->conn->affected_rows){
             $this->respuesta=$this->respuesta1->fetch_array(MYSQLI_ASSOC);
            /*Creacion de array compuesto de array para ser retornados los datos de la consulta */
              $matrix2= array("id"=>$this->respuesta["pid"],"nombre"=>$this->respuesta["pnombre"],"precio"=>$this->respuesta["pprecio"],"tipo"=>$this->respuesta["ptipo"],"descripcion"=>$this->respuesta["pdescripcion"],"imagen"=>$this->respuesta["pimagen"]);

             array_push($this->matrix,$matrix2);
             unset($matrix2);
             
             $i++;
             }
           
            
            
      }
      else if($this->buscar!="" && $this->valorMin!=0 && $this->valorMax!=0 && $this->tipo!="Todo" ){
        
        $this->consulta="select * from productos where pdescripcion like '%{$this->buscar}%' and pprecio between {$this->valorMin} and {$this->valorMax} and ptipo= '{$this->tipo}'";
        $this->respuesta1=$this->conn->query($this->consulta);
        
       
        while($i<=$this->conn->affected_rows){
          $this->respuesta=$this->respuesta1->fetch_array(MYSQLI_ASSOC);
          $matrix2= array("id"=>$this->respuesta["pid"],"nombre"=>$this->respuesta["pnombre"],"precio"=>$this->respuesta["pprecio"],"tipo"=>$this->respuesta["ptipo"],"descripcion"=>$this->respuesta["pdescripcion"],"imagen"=>$this->respuesta["pimagen"]);
          array_push($this->matrix,$matrix2);
          unset($matrix2);
          $i++;

        }
        }
      else if($this->buscar!="" && $this->valorMin===0 && $this->valorMax===0 && $this->tipo==="Todo"){
        $this->consulta="select * from productos where pdescripcion like'%{$this->buscar}%'";
        $this->respuesta1=$this->conn->query($this->consulta);
        $i=1;
        while($i<=$this->conn->affected_rows){
          $this->respuesta=$this->respuesta1->fetch_array(MYSQLI_ASSOC);
          $matrix2= array("id"=>$this->respuesta["pid"],"nombre"=>$this->respuesta["pnombre"],"precio"=>$this->respuesta["pprecio"],"tipo"=>$this->respuesta["ptipo"],"descripcion"=>$this->respuesta["pdescripcion"],"imagen"=>$this->respuesta["pimagen"]);
          array_push($this->matrix,$matrix2);
          unset($matrix2);
          $i++;
        }

      }
      else if($this->buscar==="" && $this->valorMin!=0 && $this->valorMax===0 && $this->tipo==="Todo"){
        $this->consulta="select * from productos where pprecio between {$this->valorMin} and 5000000";
        $this->respuesta1=$this->conn->query($this->consulta);
        $i=1;
        while($i<=$this->conn->affected_rows){
          $this->respuesta=$this->respuesta1->fetch_array(MYSQLI_ASSOC);
          $matrix2=array("id"=>$this->respuesta["pid"],"nombre"=>$this->respuesta["pnombre"],"precio"=>$this->respuesta["pprecio"],"tipo"=>$this->respuesta["ptipo"],"descripcion"=>$this->respuesta["pdescripcion"],"imagen"=>$this->respuesta["pimagen"]);
          array_push($this->matrix,$matrix2);
          unset($matrix2);
          $i++;
        }
      }
      else if($this->buscar==="" && $this->valorMin===0 && $this->valorMax!=0 && $this->tipo==="Todo"){
        $this->consulta="select * from productos where pprecio between 0 and {$this->valorMax}";
        $this->respuesta1=$this->conn->query($this->consulta);
        $i=1;
        while($i<=$this->conn->affected_rows){
          $this->respuesta=$this->respuesta1->fetch_array(MYSQLI_ASSOC);
          $matrix2=array("id"=>$this->respuesta["pid"],"nombre"=>$this->respuesta["pnombre"],"precio"=>$this->respuesta["pprecio"],"tipo"=>$this->respuesta["ptipo"],"descripcion"=>$this->respuesta["pdescripcion"],"imagen"=>$this->respuesta["pimagen"]);
          array_push($this->matrix,$matrix2);
          unset($matrix2);
          $i++;
        }
      }
      else if($this->buscar==="" && $this->valorMin!=0 && $this->valorMax!=0 && $this->tipo==="Todo"){
        $this->consulta="select * from productos where pprecio between {$this->valorMin} and {$this->valorMax}";
        $this->respuesta1=$this->conn->query($this->consulta);
        $i=1;
        while($i<=$this->conn->affected_rows){
          $this->respuesta=$this->respuesta1->fetch_array(MYSQLI_ASSOC);
          $matrix2=array("id"=>$this->respuesta["pid"],"nombre"=>$this->respuesta["pnombre"],"precio"=>$this->respuesta["pprecio"],"tipo"=>$this->respuesta["ptipo"],"descripcion"=>$this->respuesta["pdescripcion"],"imagen"=>$this->respuesta["pimagen"]);
          array_push($this->matrix,$matrix2);
          unset($matrix2);
          $i++;
        }
      }
      else if($this->buscar==="" && $this->valorMin===0 && $this->valorMax===0 && $this->tipo!="Todo"){
        $this->consulta="select * from productos where ptipo ='{$this->tipo}'";
        $this->respuesta1=$this->conn->query($this->consulta);
        $i=1;
        while($i<=$this->conn->affected_rows){
          $this->respuesta=$this->respuesta1->fetch_array(MYSQLI_ASSOC);
          $matrix2=array("id"=>$this->respuesta["pid"],"nombre"=>$this->respuesta["pnombre"],"precio"=>$this->respuesta["pprecio"],"tipo"=>$this->respuesta["ptipo"],"descripcion"=>$this->respuesta["pdescripcion"],"imagen"=>$this->respuesta["pimagen"]);
          array_push($this->matrix,$matrix2);
          unset($matrix2);
          $i++;
        }
      }
      else if($this->buscar!="" && $this->valorMin!=0 && $this->valorMax!=0 && $this->tipo==="Todo"){
        $this->consulta="select * from productos where pdescripcion like '{%$this->buscar%}' and pprecio between {$this->valorMin} and {$this->valorMax}";
        $this->respuesta1=$this->conn->query($this->consulta);
        $i=1;
        while($i<=$this->conn->affected_rows){
          $this->respuesta=$this->respuesta1->fetch_array(MYSQLI_ASSOC);
          $matrix2=array("id"=>$this->respuesta["pid"],"nombre"=>$this->respuesta["pnombre"],"precio"=>$this->respuesta["pprecio"],"tipo"=>$this->respuesta["ptipo"],"descripcion"=>$this->respuesta["pdescripcion"],"imagen"=>$this->respuesta["pimagen"]);
          array_push($this->matrix,$matrix2);
          unset($matrix2);
          $i++;
        }
      }
    }
    return $this->matrix;
      $this->conn->close();
      
    }

}



//$data = new noticias();
//echo JSON_encode($data->connection_sql("",0 ,0 ,"camara"));
 ?>
