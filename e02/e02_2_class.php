<?php

// DEFINICIÓN DE LA CLASE
class Linea {        
    //CONSTRUCTOR
    function __construct($x1, $y1, $x2, $y2) {
        $this->x1 = $x1;
        $this->y1 = $y1;
        $this->x2 = $x2;
        $this->y2 = $y2;  
    }
    
    // MÉTODOS
    function set_x1($x1) {
        $this->x1 = $x1;
    }
    function set_y1($y1) {
        $this->y1 = $y1;
    }
    function set_x2($x2) {
        $this->x2 = $x2;
    }    
    function set_y2($y2) {
        $this->y2 = $y2;
    }
    function get_x1() {
        return $this->x1;
    }
    function get_y1() {
        return $this->y1;
    }
    function get_x2() {
        return $this->x2;
    }    
    function get_y2() {
        return $this->y2;
    }
    function punto_medio($x1, $y1, $x2, $y2) {
        $x = ($x1 + $x2) / 2;
        $y = ($y1 + $y2) / 2;

        return $x.", ".$y;
    }
}

?>