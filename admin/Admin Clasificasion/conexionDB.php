<?php
//conexionDB.php
//variables o atruibuto
class conexionDB{
private $HOST;
private $USER;
private $PASSW;
private $DB;
private $connection;
private $dataset;
//constructor
public function __construct(){
    $this->HOST ="localhost";
    $this->USER ="root";
    $this->PASSW ="";
    $this->DB ="proyecto";
}
//constructor con parametros
/*
public function __construct($phost,$puser,$ppassw,$pdb){
    $this->HOST =$phost;
    $this->USER =$puser;
    $this->PASSW =$ppassw;
    $this->DB =$pdb;
}
*/
//metodos
public function conectar(){
    $this->connection=@mysqli_connect($this->HOST,$this->USER,$this->PASSW,$this->DB);
    if($this->connection){
       // echo "si conecto";
        return true;
    }
    else {
        echo "no conecto";
        return false;
    }
}//////fin conectar
////////////////////////
//resultset es lo mismo que dataset
public function consultar($sql){
    $this->dataset=mysqli_query($this->connection,$sql);
    if($this->dataset){
       //echo "Inventario de Libros ";
        return $this->dataset;
    }
    else{
        echo "consulta fallida";
        return "vacio";
    }
}   //fin consultar
public function insertar($sql){
    if(mysqli_query($this->connection, $sql)){
    
      //  echo "insercion ralizada";
}   
else{
    echo "insercion no realizada" ;
    
}//fin del insert
return ;
} //fin

public function actualizar($sql){
    if(mysqli_query($this->connection, $sql)){
    
      //  echo "insercion ralizada";
}   
else{
    echo "actualizacion no realizada" ;
    
}//fin  actualizar
return ;
} //fin
public function eliminar($sql){
    if(mysqli_query($this->connection, $sql)){
    
      //  echo "insercion ralizada";
}   
else{
    echo "actualizacion no realizada" ;
    
}//fin  actualizar
return ;
} //fin
}
?>