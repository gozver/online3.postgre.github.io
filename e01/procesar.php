<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>        
    <link rel='stylesheet' type='text/css' href='../src/css/bootstrap.min.css' />
    <link rel='stylesheet' type='text/css' href='../src/css/style.css' /> 
    <title>Tarea Online 3</title>
</head>
<body>
    <header class='container-fluid'>        
        <h1 class='display-4 text-center font-weight-bold'>Tarea Online 3</h1>        
    </header>
    
    <section class='container rounded'>
        <!-- MIGAS DE PAN --> 
        <table class='w-100'>
            <tr><td><p> <a class='breadcrumb-item' href='../../index.html'>Enunciado</a>
                        <a class='breadcrumb-item' href='./index.php'>Ejercicio 1</a>
                        <a class='breadcrumb-item gray' disabled>Procesar Datos</p>
                </td>                
            </tr>
        </table>
  
        <!-- PESTAÑAS -->
        <ul class='nav nav-tabs text-center'>
            <li class='nav-item w-25'><a class='nav-link white active' href='./index.php'>Ejercicio 1</a></li>
            <li class='nav-item w-25'><a class='nav-link' href='../e02/index.php'>Ejercicio 2</a></li>
            <li class='nav-item w-25'><a class='nav-link' href='../e03/login/index.php'>Ejercicio 3</a></li>
        </ul> <?php

        // CREAR O MODIFICAR COOKIE (MODIFICAR Y CREAR UNA COOKIE ES LO MISMO)
        if (isset($_GET['crear']) || isset($_GET['modificar'])) {                        
            $manzanas = $_GET['manzanas'];      $naranjas = $_GET['naranjas'];
            $peras = $_GET['peras'];            $cebollas = $_GET['cebollas'];
            $zanahorias = $_GET['zanahorias'];  $alcachofas = $_GET['alcachofas'];
            
            $valor = 'Manzanas: '.$manzanas . ', Naranjas: ' . $naranjas . ', Peras: ' . $peras . ', Cebollas: ' . $cebollas;
            $valor = $valor . ', Zanahorias: ' . $zanahorias . ', Alcachofas: ' . $alcachofas;            
            $expiracion = time() + 60 * 60 * 1;                    

            setcookie('cookie', $valor, $expiracion);            
            
            // CREAR             
            if (isset($_GET['crear'])) { ?> <br />
                <h1 class='display-5 text-center'>Crear Cookie</h1>
                <p class='lead font-weight-normal text-center'>
                    La cookie se ha creado con éxito. 
                    Expirará en 1 hora (a las <?= (date('h') + 1 ). ':' . date('i') . ' '. date('A') ?>).
                </p> <?php
            // MODIFICAR
            } else if (isset($_GET['modificar'])) { ?> <br />
                <h1 class='display-5 text-center'>Modificar Cookie</h1>
                <p class='lead font-weight-normal text-center'>
                    La cookie se ha modificado con éxito. 
                    Expirará en 1 hora (a las <?= (date('h') + 1 ). ':' . date('i') . ' '. date('A') ?>).
                </p> <?php
            } ?>                    
            
            <table class='table table-striped custom text-center table-hover'>
                <thead>
                    <tr class='dark-blue center'><th colspan=2>CONTENIDO DE LA COOKIE</th></tr>
                    <tr class='medium-blue center'><th>Producto</th>
                        <th>Cantidad</th>                
                    </tr>
                </thead>
                <tbody> 
                    <tr><th>Producto    </th>   <th>Cantidad</th></tr>
                    <tr><td>Manzanas    </td>   <td><?= $manzanas ?>    </td></tr>
                    <tr><td>Naranjas    </td>   <td><?= $naranjas ?>    </td></tr>
                    <tr><td>Peras       </td>   <td><?= $peras ?>       </td></tr>
                    <tr><td>Cebollas    </td>   <td><?= $cebollas ?>    </td></tr>
                    <tr><td>Zanahorias  </td>   <td><?= $zanahorias ?>  </td></tr>
                    <tr><td>Alcachofas  </td>   <td><?= $alcachofas ?>  </td></tr>                        
                </tbody>
            </table> <?php

        } // COMPROBAR COOKIE
        else if(isset($_GET['comprobar'])) { ?> <br />
            <h1 class='display-5 text-center'>Comprobar Cookie</h1><br /> <?php
            if(!isset($_COOKIE['cookie'])) { ?>
                <p class='lead font-weight-normal text-center'>La cookie no existe.</p> <?php
            } else if(count($_COOKIE) > 0) { ?>
                <p class='lead font-weight-normal text-center'>La cookie existe y está activada.<br /><br />
                Su contenido es: <?= $_COOKIE['cookie'] ?>.</p> <?php
            } else { ?>
                <p class='lead font-weight-normal text-center'>La cookie está desactivada.</p> <?php
            } ?> <br /><br /> <?php
        
        } // BORRAR COOKIE
        else if(isset($_GET['borrar'])) {
            // PARA BORRAR UNA COOKIE, FIJAMOS SU FECHA DE EXPIRACIÓN ANTERIOR A LA FECHA Y HORA ACTUAL
            setcookie('cookie', '', (time() - 100)); ?> <br /><br />

            <h1 class='display-5 text-center'>Eliminar Cookie</h1><br />                
            <p class='lead font-weight-normal text-center'>
                La cookie se ha borrado con éxito.
            </p><br /><br /> <?php

        } ?>

        <a class='card-link' href='./index.php'>Volver a la página anterior.</a>
    </section>
</body>
</html>

<?php 

/* PARA VER LOS CAMBIOS EFECTUADOS SOBRE LA COOKIE HAS DE <a href=' <?= $_SERVER['REQUEST_URI'] ?> '>REFRESCAR</a> LA PANTALLA.
         VALOR DE LA COOKIE: <?= $_COOKIE[$nombre]; ?> */ 

?>