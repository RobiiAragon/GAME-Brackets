<?php
include('../conexionDB.php');
    class JugadoresDEL extends conexionDB{
      private $codigo;
      private $Nombres;
      private $Apellidos;
      private $Alias;
      private $password;
  
    public function getAllAlumno(){
      $result = $this->conectar();
      if($result){
         $dataset=$this->consultar("select * from jugadores;");
      }else{
          echo "no hay datos ";
          $dataset="vacio";
      }
      return $dataset;
    }
  public function DelJugador($codigo){
    $sql="delete from jugadores 
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

