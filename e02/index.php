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
                        <a class='breadcrumb-item gray' disabled>Ejercicio 2.1</p>
                </td>                
            </tr>
        </table>
  
        <!-- PESTAÑAS -->
        <ul class='nav nav-tabs text-center'>
            <li class='nav-item w-25'><a class='nav-link' href='../e01/index.php'>Ejercicio 1</a></li>
            <li class='nav-item w-25'><a class='nav-link white active' href='./index.php'>Ejercicio 2</a></li>
            <li class='nav-item w-25'><a class='nav-link' href='../e03/login/index.php'>Ejercicio 3</a></li>
        </ul>
        
        <ul class='nav nav-tabs text-center'>
            <li class='nav-item w20'><a class='nav-link active white' href='index.php'>Ejercicio 2.1</a></li>
            <li class='nav-item w20'><a class='nav-link white' href='e02_2.php'>Ejercicio 2.2</a></li>
            <li class='nav-item w20'><a class='nav-link white' href='e02_3.php'>Ejercicio 2.3</a></li>
            <li class='nav-item w20'><a class='nav-link white' href='e02_4.php'>Ejercicio 2.4</a></li>
            <li class='nav-item w20'><a class='nav-link white' href='e02_5.php'>Ejercicio 2.5</a></li>
        </ul> <?php

        // PÁGINA
        include './e02_1_class.php';

        // INTRODUCCIÓN DE DATOS MEDIANTE CONSTRUCTOR
        $punto1 = new Punto(10, 20);
        $punto2 = new Punto(30, 40);
        $punto3 = new Punto(50, 60); ?><br />

        <p class='lead font-weight-normal text-center'>
            INTRODUCIR LAS COORDENADAS DE UN PUNTO EN EL PLANO CARTESIANO:<br />
            DATOS INTRODUCIDOS MEDIANTE EL CONSTRUCTOR Y OBTENIDOS MEDIANTE EL MÉTODO GETTER.
        </p>        

        <table class='table table-bordered text-center table-hover'>
            <thead class='thead-light'>
                <tr> 
                    <th scope='col'>Nº de instancia</th>
                    <th scope='col'>Coordenada X</th>
                    <th scope='col'>Coordenada Y</th>                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope='row'>Instancia 1</td>
                    <td><?= $punto1->get_x() ?></td>
                    <td><?= $punto1->get_y() ?></td>                    
                </tr>
                <tr>
                    <td scope='row'>Instancia 2</td>
                    <td><?= $punto2->get_x() ?></td>
                    <td><?= $punto2->get_y() ?></td>                    
                </tr>
                <tr>
                    <td scope='row'>Instancia 3</td>
                    <td><?= $punto3->get_x() ?></td>
                    <td><?= $punto3->get_y() ?></td>                    
                </tr>
            </tbody>
        </table> <?php
        
        // MODIFICACIÓN DE DATOS MEDIANTE SETTER
        $punto1->set_x(100); $punto1->set_y(200);
        $punto2->set_x(300); $punto2->set_y(400);
        $punto3->set_x(500); $punto3->set_y(600); ?>

        <p class='lead font-weight-normal text-center'>
            MODIFICAR LAS COORDENADAS DE UN PUNTO EN EL PLANO CARTESIANO:<br />
            DATOS MODIFICADOS MEDIANTE EL MÉTODO SETTER Y OBTENIDOS MEDIANTE EL MÉTODO GETTER.
        </p>        

        <table class='table table-bordered text-center table-hover'>
            <thead class='thead-light'>
                <tr> 
                    <th scope='col'>Nº de instancia</th>
                    <th scope='col'>Coordenada X</th>
                    <th scope='col'>Coordenada Y</th>                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope='row'>Instancia 1</td>
                    <td><?= $punto1->get_x() ?></td>
                    <td><?= $punto1->get_y() ?></td>                    
                </tr>
                <tr>
                    <td scope='row'>Instancia 2</td>
                    <td><?= $punto2->get_x() ?></td>
                    <td><?= $punto2->get_y() ?></td>                    
                </tr>
                <tr>
                    <td scope='row'>Instancia 3</td>
                    <td><?= $punto3->get_x() ?></td>
                    <td><?= $punto3->get_y() ?></td>                    
                </tr>
            </tbody>
        </table>
    </section>
</body>
</html>
