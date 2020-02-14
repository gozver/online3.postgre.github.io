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
                        <a class='breadcrumb-item gray' disabled>Ejercicio 2.2</p>
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
            <li class='nav-item w20'><a class='nav-link active white' href='e02_2.php'>Ejercicio 2.2</a></li>
            <li class='nav-item w20'><a class='nav-link white' href='e02_3.php'>Ejercicio 2.3</a></li>
            <li class='nav-item w20'><a class='nav-link white' href='e02_4.php'>Ejercicio 2.4</a></li>
            <li class='nav-item w20'><a class='nav-link white' href='e02_5.php'>Ejercicio 2.5</a></li>
        </ul> <?php

        // PÁGINA        
        include './e02_2_class.php';

        // INSTANCIAS
        $linea1 = new Linea(10, 14, 12, 16);
        $linea2 = new Linea(20, 30, 22, 32);
        $linea3 = new Linea(45, 52, 47, 58); ?><br />

        <p class='lead font-weight-normal text-center'>CALCULAR EL PUNTO MEDIO DE UN SEGMENTO EN EL PLANO CARTESIANO:</p>         

        <table class='table table-bordered text-center table-hover'>
            <thead class='thead-light'>
                <tr> 
                    <th scope='col'>Nº de instancia</th>
                    <th scope='col'>Coordenada X<sub>1</sub>, Y<sub>1</sub></th>
                    <th scope='col'>Coordenada X<sub>2</sub>, Y<sub>2</sub></th>                    
                    <th scope='col'>Punto medio</th>
                </tr>
            </thead>
            <!-- UTILIZACION DE LOS MÉTODOS -->
            <tbody>
                <tr>
                    <td scope='row'>Instancia 1</td>
                    <td><?= $linea1->get_x1() ?>, <?= $linea1->get_y1() ?></td>
                    <td><?= $linea1->get_x2() ?>, <?= $linea1->get_y2() ?></td>                    
                    <td><?= $linea1->punto_medio($linea1->get_x1(), $linea1->get_y1(), $linea1->get_x2(), $linea1->get_y2()) ?></td>
                </tr>
                <tr>
                    <td scope='row'>Instancia 2</td>
                    <td><?= $linea2->get_x1() ?>, <?= $linea2->get_y1() ?></td>
                    <td><?= $linea2->get_x2() ?>, <?= $linea2->get_y2() ?></td>
                    <td><?= $linea1->punto_medio($linea2->get_x1(), $linea2->get_y1(), $linea2->get_x2(), $linea2->get_y2()) ?></td>
                </tr>
                <tr>
                    <td scope='row'>Instancia 3</td>
                    <td><?= $linea3->get_x1() ?>, <?= $linea3->get_y1() ?></td>
                    <td><?= $linea3->get_x2() ?>, <?= $linea3->get_y2() ?></td>
                    <td><?= $linea1->punto_medio($linea3->get_x1(), $linea3->get_y1(), $linea3->get_x2(), $linea3->get_y2()) ?></td>
                </tr>
            </tbody>
        </table>         
    </section>
</body>
</html>
