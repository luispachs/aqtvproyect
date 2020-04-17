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
  $buscar=empty($_POST["buscar"])? "" : $_POST["buscar"];
  $valorMin=empty($_POST["valorMin"])? 0 :$_POST["valorMin"];
  $valorMax=empty($_POST["valorMax"])? 0 :$_POST["valorMax"];
  $opcion=empty($_POST["opcion"])? "todo":$_POST["opcion"];

      $dato =$shared->connection_sql($buscar,$valorMin,$valorMax,$opcion); //"estos son los valores: {$buscar},{$valorMin},{$valorMax},{$opcion}";
    echo json_encode($dato);
}

?>
