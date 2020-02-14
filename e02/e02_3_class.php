<?php

// DEFINICIÓN DE LA CLASE
class Rectangulo {        
    //CONSTRUCTOR
    function __construct($longitud, $ancho) {
        $this->longitud = $longitud;
        $this->ancho = $ancho;         
    }
    
    // MÉTODOS
    function set_longitud($longitud) {
        $this->longitud = $longitud;
    }
    function set_ancho($ancho) {
        $this->ancho = $ancho;
    }    
    function get_longitud() {
        return $this->longitud;
    }
    function get_ancho() {
        return $this->ancho;
    }    
    function area($longitud, $ancho) {        
        return ($longitud * $ancho);
    }
}

?>