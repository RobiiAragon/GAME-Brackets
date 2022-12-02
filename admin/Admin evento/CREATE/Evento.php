
<?php 
include('../conexionDB.php');

class Evento extends conexionDB{
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
    public function setEvento($txtNombre,$txtFecha,$txtDuracion,$txttipo_evento,$txtjuegos){
      $sql= "insert into Evento(nombre,fecha,duracion,tipo_evento,juegos) 
      values('".$txtNombre."','".$txtFecha."','".$txtDuracion."','.$txttipo_evento.','".$txtjuegos."')";
      echo $sql;
      $result = $this->conectar();

      if($result){
        $newid=$this->insertar($sql);
      }else{
         $newid=0;
      }
      
      return $newid;
      header('Location:ADDEventoCRUD.php');
    }
}
?>
