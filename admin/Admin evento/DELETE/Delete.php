<?php
include('../conexionDB.php');
    class EventoDEL extends conexionDB{
        private $codigo;
        private $nombre;
        private $fecha;
        private $duracion;
        private $tipo_evento;
        private $juegos;
  
    public function getAllEvento(){
      $result = $this->conectar();
      if($result){
         $dataset=$this->consultar("select * from evento;");
      }else{
          echo "no hay datos ";
          $dataset="vacio";
      }
      return $dataset;
    }
  public function DelEvento($codigo){
    $sql="delete from evento 
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

