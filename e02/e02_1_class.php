<?php

// DEFINICIÓN DE LA CLASE PUNTO
class Punto {        
    //CONSTRUCTOR
    function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;    
    }
    
    // MÉTODOS
    function set_x($x) {
        $this->x = $x;
    }
    function set_y($y) {
        $this->y = $y;
    }
    function get_x() {
        return $this->x;
    }    
    function get_y() {
        return $this->y;
    }
}

?>