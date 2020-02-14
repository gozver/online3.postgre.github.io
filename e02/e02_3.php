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
                        <a class='breadcrumb-item gray' disabled>Ejercicio 2.3</p>
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
            <li class='nav-item w20'><a class='nav-link active white' href='e02_3.php'>Ejercicio 2.3</a></li>
            <li class='nav-item w20'><a class='nav-link white' href='e02_4.php'>Ejercicio 2.4</a></li>
            <li class='nav-item w20'><a class='nav-link white' href='e02_5.php'>Ejercicio 2.5</a></li>
        </ul> <?php

        // PÁGINA 
        include './e02_3_class.php';

        // INSTANCIAS
        $rect1 = new Rectangulo(10, 20);
        $rect2 = new Rectangulo(20, 40);
        $rect3 = new Rectangulo(25, 10); ?><br />

        <p class='lead font-weight-normal text-center'>CALCULAR EL ÁREA DE UN RECTÁNGULO EN EL PLANO CARTESIANO:</p>         

        <table class='table table-bordered text-center table-hover'>
            <thead class='thead-light'>
                <tr> 
                    <th scope='col'>Nº de instancia</th>
                    <th scope='col'>Altura</th>
                    <th scope='col'>Base</th>                    
                    <th scope='col'>Area</th>
                </tr>
            </thead>
            <!-- UTILIZACION DE LOS MÉTODOS -->
            <tbody>
                <tr>
                    <td scope='row'>Instancia 1</td>
                    <td><?= $rect1->get_longitud() ?></td>
                    <td><?= $rect1->get_ancho() ?></td>
                    <td><?= $rect1->area($rect1->get_longitud(), $rect1->get_ancho()) ?></td>
                </tr>
                <tr>
                    <td scope='row'>Instancia 2</td>
                    <td><?= $rect2->get_longitud() ?></td>
                    <td><?= $rect2->get_ancho() ?></td>
                    <td><?= $rect2->area($rect2->get_longitud(), $rect2->get_ancho()) ?></td>
                </tr>
                <tr>
                    <td scope='row'>Instancia 3</td>
                    <td><?= $rect3->get_longitud() ?></td>
                    <td><?= $rect3->get_ancho() ?></td>
                    <td><?= $rect3->area($rect3->get_longitud(), $rect3->get_ancho()) ?></td>
                </tr>
            </tbody>
        </table>         
    </section>
</body>
</html>
