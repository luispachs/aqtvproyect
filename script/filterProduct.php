<?php
include ("CargaNoticias.php");

$shared= new noticias();

//$type;
//$decodificar=null;
//$codificar;
$buscar;
$valorMin;
$valorMax;
$opcion;
$dato;


if($_POST!= null)
{
  $buscar=$_POST["buscar"];
  $valorMin=$_POST["valorMin"];
  $valorMax=$_POST["valorMax"];
  $opcion=$_POST["opcion"];
  /*$dato = array(
    "buscar"=>$buscar,
    "valorMin"=>$valorMin,
    "valorMax"=>$valorMax,
    "opcion"=>$opcion,
  );*/

 
      $dato =$shared->connection_sql($buscar,$valorMin,$valorMax,$opcion); //"estos son los valores: {$buscar},{$valorMin},{$valorMax},{$opcion}";
    echo json_encode($dato);
}

?>
