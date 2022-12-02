<?php
include('../conexionDB.php');
class EventoUPD extends conexionDB
{
  private $codigo;
  private $nombre;
  private $fecha;
  private $duracion;
  private $tipo_evento;
  private $juegos;

  public function getAllEvento()
  {
    $result = $this->conectar();
    if ($result) {
      $dataset = $this->consultar("select * from evento;");
    } else {
      echo "no hay datos ";
      $dataset = "vacio";
    }
    return $dataset;
  }
  public function updEvento($codigo, $txtnombre, $txtfecha, $txtduracion, $txttipo_evento, $txtjuegos){
    $sql="update evento set 
    nombre='".$txtnombre."',
    fecha='".$txtfecha."',
    duracion='".$txtduracion."',
    tipo_evento='.$txttipo_evento.',
    juegos='".$txtjuegos."'
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