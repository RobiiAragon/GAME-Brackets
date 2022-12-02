<?php
include('../conexionDB.php');
    class juegoDEL extends conexionDB{
        private $codigo;
        private $nombre;
        private $fecha;
        private $duracion;
        private $tipo_juego;
        private $juegos;
  
    public function getAlljuego(){
      $result = $this->conectar();
      if($result){
         $dataset=$this->consultar("select * from juego;");
      }else{
          echo "no hay datos ";
          $dataset="vacio";
      }
      return $dataset;
    }
  public function Deljuego($codigo){
    $sql="delete from juegos 
    where codigo=".$codigo.";";
    echo $sql;
    $result = $this->conectar();

    if($result){
        echo '<br>';
        $newid=$this->insertar($sql);
        echo "si inserta"; 
      }else{
         $newid=0;
      }
      
      return $newid;

  }

    }
  
?>

