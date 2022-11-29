<?php
class conexionDB{
    //atributos
    private $conection;
    private $HOST;
    private $USER;
    private $PASSW;
    private $DB;
    private $dataset;
    //constructor
    public function __construct(){
        $this->HOST = "127.0.0.1";
        $this->USER ="root";
        $this->PASSW="";
        $this->DB="proyecto";
    } 
    //metodos
    public function conectar(){
        $this->conection= @mysqli_connect($this->HOST,$this->USER,$this->PASSW,$this->DB);

        if($this->conection){
            echo 'si conecta';
            return true;
        }else{
            echo 'no conecta';
            return false;
        }
    }  

    public function consultar($sql){
       $this->dataset=mysqli_query($this->conection,$sql);

       if($this->dataset){
         echo "consulta realizada";
         return $this->dataset;
       }else{
         echo "consulta no realizada";
         echo "vacio";
       }
    }
    public function insertar($sql){
        echo "<br>".$sql;
        if(mysqli_query($this->conection,$sql)>0){
         $newid=$this->conection->insert_id;
         echo "insert  realizada";
       }else{
         echo "no se inserto";
         $newid=0;
       }
       return $newid;
    }
}
  


?>