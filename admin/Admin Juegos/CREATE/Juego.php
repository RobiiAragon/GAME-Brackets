
<?php 
include('../conexionDB.php');

class Juego extends conexionDB{
        private $codigo;
        private $nombre;
        private $generos;

    
      public function getAlljuegos(){
        $result = $this->conectar();
        if($result){
           $dataset=$this->consultar("select * from juegos;");
        }else{
            echo "no hay datos ";
            $dataset="vacio";
        }
        return $dataset;
      }
    public function setjuegos($txtcodigo, $txtNombre, $txtgeneros){
      $sql= "insert into juegos(codigo, nombre, generos)
      values('".$txtcodigo."','".$txtNombre."','".$txtgeneros."')";
      echo $sql;
      $result = $this->conectar();

      if($result){
        $newid=$this->insertar($sql);
      }else{
         $newid=0;
      }
      
      return $newid;
      header('Location:ADDJuego.php');
    }
}
?>
