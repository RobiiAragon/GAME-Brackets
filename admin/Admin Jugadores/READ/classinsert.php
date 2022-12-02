<?php 
include('../conexionDB.php');
class Jugadores extends conexionDB{
        private $codigo;
        private $Nombres;
        private $Apellidos;
        private $Alias;
        private $password;
        private $nacionalidad;
    
      public function getAllJugador(){
        $result = $this->conectar();
        if($result){
           $dataset=$this->consultar("select * from jugadores;");
        }else{
            echo "no hay datos ";
            $dataset="vacio";
        }
        return $dataset;
      }
    public function setJugador($first,$txtLastName,$txtAlias,$txtpassword,$txtnacionalidad){
      $sql= "insert into jugadores(Nombres,Apellidos,Alias,password,nacionalidad) 
      values('".$first."','".$txtLastName."','".$txtAlias."','.$txtpassword.','$txtnacionalidad')";
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
