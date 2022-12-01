<?php 
include('conexionDB.php');

class Emparejamiento extends conexionDB{
        private $codigo;
        private $posiciones;
        private $puntaje;
        private $Alias;
    
      public function getAllPlayer(){
        $result = $this->conectar();
        if($result){
           $dataset=$this->consultar("select * from emparejamiento;");
        }else{
            echo "no hay datos ";
            $dataset="vacio";
        }
        return $dataset;
      }
    public function setEMP($posic,$pun,$game,$alias){
      $sql= "insert into emparejamiento(posiciones,puntaje,juegos,Alias) 
      values('".$posic."','".$pun."','.$game.','".$alias."')";
      echo $sql;

      $result = $this->conectar();      
      if($result){
        $newid=$this->insertar($sql);
      }else{
         $newid=0;
      }
      
      return $newid;
    }
}
?>