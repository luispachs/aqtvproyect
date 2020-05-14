<?php


$datos= $_POST["envio"];
$datos=json_decode($datos);
$matrix=array();
$matrix1;

$busquedad= new buscar_Item();
foreach($datos as $i=>$value){
    $d=$busquedad->search($i);
    $matrix1=array("id"=>$d["pid"],"nombre"=>$d["pnombre"],"precio"=>$d["pprecio"],"imagen"=>$d["pimagen"]);
    array_push($matrix,$matrix1);
    unset($matrix1);

}
echo json_encode($matrix);

 class buscar_Item extends mysqli{
    private $id;
    private $conn=null;
    private $respuesta=null;
    private $resultado;
    private $consulta="";
    private $host;
    private $user;
    private $password;
    private $database;
    public function __construct(){

    $this->id=0;
    $this->host="localhost";
    $this->user ="clienteProducto";
    $this->password ="123456789";
    $this->database ="aqtv";
    $this->conn= new  mysqli($this->host,$this->user,$this->password,$this->database);

    }
    public function search($id){
        $this->id=$id;
        $this->consulta="select pid,pnombre, pprecio, pimagen from productos where pid={$this->id}";
         $this->respuesta=$this->conn->query($this->consulta);
        $this->resultado=$this->respuesta->fetch_assoc();
           
       
       
        return  $this->resultado;
    }
}


?>