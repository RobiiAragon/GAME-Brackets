<?php 
include('../conexionDB.php');

class EmparejamientoDEL extends conexionDB{
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
  public function delClass($codigo){
    $sql="delete from emparejamiento 
    where codigo=".$codigo.";";

echo "<br>";
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