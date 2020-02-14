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
            <tr><td><p> <a class='breadcrumb-item' href='../index.html'>Enunciado</a>
                        <a class='breadcrumb-item' href='./index.php'>Ejercicio 2</a>
                        <a class='breadcrumb-item gray' disabled>Ejercicio 2.5</p>
                </td>                
            </tr>
        </table>
  
        <!-- PESTAÑAS -->
        <ul class='nav nav-tabs text-center'>
            <li class='nav-item w-25'><a class='nav-link' href='../e01/index.php'>Ejercicio 1</a></li>
            <li class='nav-item w-25'><a class='nav-link white active' href='../e02/index.php'>Ejercicio 2</a></li>
            <li class='nav-item w-25'><a class='nav-link' href='../e03/login/index.php'>Ejercicio 3</a></li>
        </ul>
        
        <ul class='nav nav-tabs text-center'>
            <li class='nav-item w20'><a class='nav-link white' href='index.php'>Ejercicio 2.1</a></li>
            <li class='nav-item w20'><a class='nav-link white' href='e02_2.php'>Ejercicio 2.2</a></li>
            <li class='nav-item w20'><a class='nav-link white' href='e02_3.php'>Ejercicio 2.3</a></li>
            <li class='nav-item w20'><a class='nav-link white' href='e02_4.php'>Ejercicio 2.4</a></li>
            <li class='nav-item w20'><a class='nav-link active white' href='e02_5.php'>Ejercicio 2.5</a></li>
        </ul> <?php

        // PÁGINA 
        include './e02_5_class.php';

        $notas1 = array(9, 8, 9, 7.5);
        $notas2 = array(9, 8, 10, 6);
        $notas3 = array(5, 9, 7, 8);

        // INTRODUCCIÓN DE DATOS MEDIANTE CONSTRUCTOR      
        $est1 = new Estudiante('Lolo González', $notas1);
        $est2 = new Estudiante('Pepe Martínez', $notas2);
        $est3 = new Estudiante('Juan García', $notas3); ?> <br />

        <p class='lead font-weight-normal text-center'>
            INTRODUCIR NOMBRE Y NOTAS DE 3 ALUMNOS (INSTANCIAS) Y CALCULAR LA MEDIA:<br />
            DATOS INTRODUCIDOS MEDIANTE EL CONSTRUCTOR Y OBTENIDOS MEDIANTE EL MÉTODO GETTER.
        </p>

        <table class='table table-bordered text-center table-hover'>
            <thead class='thead-light'>
                <tr> 
                    <th scope='col'>Nº de instancia</th>
                    <th scope='col'>Nombre</th> <?php
                    for($i=0; $i < count($notas1); $i++) { ?> <th scope='col'>Nota <?= $i + 1 ?></th> <?php } ?>
                    <th scope='col'>Nota Media</th>                    
                </tr>
            </thead>
            <!-- UTILIZACION DE LOS MÉTODOS -->
            <tbody>
                <tr>
                    <td scope='row'>Instancia 1</td>
                    <td><?= $est1->get_nombre() ?></td> <?php                     
                    
                    $aNotas = $est1->get_notas();
                    for($i=0; $i < count($aNotas); $i++) { ?> <td><?= $aNotas[$i] ?></td> <?php } ?>
                    
                    <td><?= $est1->media($aNotas); ?></td>
                </tr>
                <tr>
                    <td scope='row'>Instancia 2</td>
                    <td><?= $est2->get_nombre() ?></td> <?php

                    $aNotas = $est2->get_notas();
                    for($i=0; $i < count($aNotas); $i++) { ?> <td><?= $aNotas[$i] ?></td> <?php } ?>

                    <td><?= $est2->media($aNotas); ?></td>
                </tr>
                <tr>
                    <td scope='row'>Instancia 3</td>
                    <td><?= $est3->get_nombre() ?></td> <?php 

                    $aNotas = $est3->get_notas();
                    for($i=0; $i < count($aNotas); $i++) { ?> <td><?= $aNotas[$i] ?></td> <?php } ?>
                    
                    <td><?= $est3->media($aNotas); ?></td>
                </tr>
            </tbody>
        </table>

        <p class='lead font-weight-normal text-center'>
            MODIFICAR LAS NOTAS DE LOS 3 ALUMNOS (INSTANCIAS):<br />
            DATOS MODIFICADOS MEDIANTE EL MÉTODO SETTER Y OBTENIDOS MEDIANTE EL MÉTODO GETTER.
        </p> <?php

        $notas1 = array(8, 7, 8, 7);
        $notas2 = array(6, 7, 7, 6);
        $notas3 = array(8, 9, 7, 9);
                   
        // MODIFICACIÓN DE DATOS MEDIANTE SETTER
        $est1->set_notas($notas1);
        $est2->set_notas($notas2);
        $est3->set_notas($notas3); ?>

        <table class='table table-bordered text-center table-hover'>
            <thead class='thead-light'>
                <tr> 
                    <th scope='col'>Nº de instancia</th>
                    <th scope='col'>Nombre</th> <?php
                    for($i=0; $i < count($notas1); $i++) { ?> <th scope='col'>Nota <?= $i + 1 ?></th> <?php } ?>
                    <th scope='col'>Nota Media</th>                    
                </tr>
            </thead>
            <!-- UTILIZACION DE LOS MÉTODOS -->
            <tbody>
                <tr>
                    <td scope='row'>Instancia 1</td>
                    <td><?= $est1->get_nombre() ?></td> <?php
                    
                    $aNotas = $est1->get_notas();
                    for($i=0; $i < count($aNotas); $i++) { ?> <td><?= $aNotas[$i] ?></td> <?php } ?>

                    <td><?= $est1->media($aNotas); ?></td>
                </tr>
                <tr>
                    <td scope='row'>Instancia 2</td>
                    <td><?= $est2->get_nombre() ?></td> <?php 
                    
                    $aNotas = $est2->get_notas();
                    for($i=0; $i < count($aNotas); $i++) { ?> <td><?= $aNotas[$i] ?></td> <?php } ?>

                    <td><?= $est2->media($aNotas); ?></td>
                </tr>
                <tr>
                    <td scope='row'>Instancia 3</td>
                    <td><?= $est3->get_nombre() ?></td> <?php                                        
                    
                    $aNotas = $est3->get_notas();
                    for($i=0; $i < count($aNotas); $i++) { ?> <td><?= $aNotas[$i] ?></td> <?php } ?>
                    
                    <td><?= $est3->media($aNotas); ?></td>
                </tr>
            </tbody>
        </table>        
    </section>
</body>
</html>
