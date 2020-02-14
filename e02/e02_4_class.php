<?php

// DEFINICIÓN DE LA CLASE
class Circulo {        
    //CONSTRUCTOR
    function __construct($radio) {
        $this->radio = $radio;                
    }
    
    // MÉTODOS
    function set_radio($radio) {
        $this->radio = $radio;
    }    
    function get_radio() {
        return $this->radio;
    }    
    function area($radio) {        
        return number_format((pi() * pow($radio, 2)), 2);
    }
    function circunsferencia($radio) {        
        return number_format((2 * pi() * $radio), 2);
    }
}

?>