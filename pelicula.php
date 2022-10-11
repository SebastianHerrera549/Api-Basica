<?php

include_once 'db.php';
// alcance especifico a la base de datos 
class Pelicula extends DB{
    
    function obtenerPeliculas(){
        $query = $this->connect()->query('SELECT * FROM pelicula');
        return $query;
    }

}

?>