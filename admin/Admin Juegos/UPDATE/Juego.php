<?php
include('../conexionDB.php');
class juegoUPD extends conexionDB
{
  private $codigo;
  private $nombre;
  private $generos;

  public function updjuego($codigo, $txtnombre, $txtgeneros){
    $sql="update juegos set 
    nombre='".$txtnombre."',
    generos='".$txtgeneros."'
    where codigo = ".$codigo.";";


    echo $sql;
    $result = $this->conectar();
    if ($result) {
      $newid = $this->insertar($sql);
    } else {
      $newid = 0;
    }
    return $newid;
    header('Location:.eventoCRUD.php');
  }
}
