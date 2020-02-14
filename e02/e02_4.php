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
                        <a class='breadcrumb-item gray' disabled>Ejercicio 2.4</p>
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
            <li class='nav-item w20'><a class='nav-link active white' href='e02_4.php'>Ejercicio 2.4</a></li>
            <li class='nav-item w20'><a class='nav-link white' href='e02_5.php'>Ejercicio 2.5</a></li>
        </ul> <?php

        // PÁGINA 
        include './e02_4_class.php';

        // INSTANCIAS
        $cir1 = new Circulo(4);
        $cir2 = new Circulo(6);
        $cir3 = new Circulo(10); ?><br>

        <p class='lead font-weight-normal text-center'>CALCULAR EL ÁREA Y EL PERÍMETRO DE UNA CIRCUNSFERENCIA EN EL PLANO CARTESIANO:</p>         

        <table class='table table-bordered text-center table-hover'>
            <thead class='thead-light'>
                <tr> 
                    <th scope='col'>Nº de instancia</th>
                    <th scope='col'>Radio</th>
                    <th scope='col'>Area</th>                    
                    <th scope='col'>Perímetro</th>
                </tr>
            </thead>
            <!-- UTILIZACION DE LOS MÉTODOS -->
            <tbody>
                <tr>
                    <td scope='row'>Instancia 1</td>
                    <td><?= $cir1->get_radio() ?></td>
                    <td><?= $cir1->area($cir1->get_radio()) ?></td>
                    <td><?= $cir1->circunsferencia($cir1->get_radio()) ?></td>
                </tr>
                <tr>
                    <td scope='row'>Instancia 2</td>
                    <td><?= $cir2->get_radio() ?></td>
                    <td><?= $cir2->area($cir2->get_radio()) ?></td>
                    <td><?= $cir2->circunsferencia($cir2->get_radio()) ?></td>
                </tr>
                <tr>
                    <td scope='row'>Instancia 3</td>
                    <td><?= $cir3->get_radio() ?></td>
                    <td><?= $cir3->area($cir3->get_radio()) ?></td>
                    <td><?= $cir3->circunsferencia($cir3->get_radio()) ?></td>
                </tr>
            </tbody>
        </table>         
    </section>
</body>
</html>
