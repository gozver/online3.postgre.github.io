<?php

// DEFINICIÓN DE LA CLASE
class Estudiante {        
    //CONSTRUCTOR
    function __construct($nombre, $notas) {
        $this->nombre = $nombre;
        $this->notas = $notas;
    }
    
    // MÉTODOS
    function set_nombre($nombre) {
        $this->nombre = $nombre;
    }    
  
    function get_nombre() {
        return $this->nombre;
    }
  
    function set_notas($notas) {
        $this->notas = $notas;
    }    
  
    function get_notas() {
        return $this->notas;
    }
  
    function media($notas) {
        $media = 0;
        for ($i=0; $i < count($notas); $i++) { 
            $media += $notas[$i];
        }
        return $media /= count($notas);
    }
}

?>
