<?php
class conectar{
      public function conection(){
       try{
             $user = "root";
             $password = "";
             $host = "localhost";
             $db = "resguardo";
             $conexion = new PDO("mysql:host=$host;dbname=$db;",$user,$password);
             return $conexion;
           }catch(PDOException $e){
             echo "¡Error!: " . $e->getMessage() . "<br/>";
             die();
           }
            echo "conecto";
  }

}
?>