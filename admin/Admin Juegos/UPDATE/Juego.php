<?php
include('../conexionDB.php');
class juegoUPD extends conexionDB
{
  private $codigo;
  private $nombre;
  private $generos;


  public function getAlljuegos()
  {
    $result = $this->conectar();
    if ($result) {
      $dataset = $this->consultar("select * from juegos;");
    } else {
      echo "no hay datos ";
      $dataset = "vacio";
    }
    return $dataset;
  }
  public function updjuego($codigo, $txtnombre, $txtgeneros){
    $sql="update juegos set 
    nombre='".$txtnombre."',
    generos='".$txtgeneros."',
    where codigo = ".$codigo.";";

    echo "<br>";
    echo $sql;
    $result = $this->conectar();
    if ($result) {
      echo '<br>';
      $newid = $this->insertar($sql);
      echo "si Actualiza";
    } else {
      $newid = 0;
    }

    return $newid;
    header('Location:.eventoCRUD.php');
  }
}
