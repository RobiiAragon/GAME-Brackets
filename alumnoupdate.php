<?php 
include('conexionDB.php');
class JugadoresUPD extends conexionDB{
        private $codigo;
        private $Nombres;
        private $Alias;
        private $Apellidos;
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
public function updJugador($id,$txtFirst,$txtLast,$txtnick,$txtpassw,$txtnacion){
  $sql="update jugadores set 
 Nombres='".$txtFirst."',
 Apellidos='".$txtLast."',
 Alias='".$txtnick."',
 password='".$txtpassw."',
 nacionalidad=".$txtnacion."
  where codigo = ".$id.";";

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