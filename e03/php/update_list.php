<?php session_start(); ?>

<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>        
    <link rel='stylesheet' type='text/css' href='../../src/css/bootstrap.min.css' />
    <link rel='stylesheet' type='text/css' href='../../src/css/style.css' />
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
                        <a class='breadcrumb-item' href='../login/index.php'>Ejercicio 3</a>
                        <a class='breadcrumb-item gray' disabled>Insertar Campo</p>
                </td>
                <td>
                    <p class='login'><span class='gray'>Bienvenido <?= $_SESSION['usr'] ?>.</span>
                    <a class='card-link' href='../login/log_out.php'>Cerrar sesión</a></p>
                </td>
            </tr>
        </table>
  
        <!-- PESTAÑAS -->
        <ul class='nav nav-tabs text-center'>
            <li class='nav-item w-25'><a class='nav-link' href='../../e01/index.php'>Ejercicio 1</a></li>
            <li class='nav-item w-25'><a class='nav-link' href='../../e02/index.php'>Ejercicio 2</a></li>
            <li class='nav-item w-25'><a class='nav-link white active' href='../login/index.php'>Ejercicio 3</a></li>
        </ul>
        
        <ul class='nav nav-tabs text-center'>
            <li class='nav-item w20'><a class='nav-link white' href='./index.php'>Listar</a></li>
            <li class='nav-item w20'><a class='nav-link white' href='./add.php'>Insertar</a></li>
            <li class='nav-item w20'><a class='nav-link white active' href='./update_list.php'>Modificar</a></li>
            <li class='nav-item w20'><a class='nav-link white' href='./delete_list.php'>Eliminar</a></li>            
        </ul><br />
        
        <!-- PÁGINA -->
        <h1 class='display-5 text-center'>Modificar contenido.</h1><br /> <?php
                
        require_once('../login/connect_db.php');
        
        $sql = 'SELECT * FROM balances';
        $sth = $dbh->prepare($sql); 
        $sth->execute();
        $rows = $sth->fetchAll(); ?>
        
        <table class='custom'>
            <thead>
                <tr class='dark-blue center'><th colspan=8>ELIMINAR</th></tr>
                <tr class='medium-blue center'>
                    <th colspan=3>INGRESOS</th>
                    <th colspan=3>GASTOS</th>
                    <th colspan=2></th>
                </tr>
                <tr class='light-blue'>
                    <th>Fecha</th><th>Descripción</th><th>Cantidad</th>
                    <th>Fecha</th><th>Descripción</th><th>Cantidad</th>
                    <th colspan=2></th>
                </tr>
            </thead>
            <tbody> <?php                
                $total_ing = 0;
                $total_gas = 0;

                foreach ($rows as &$row) { ?>
                    <tr>
                        <td><?= $row['fech_ing'] ?></td>
                        <td><?= $row['desc_ing'] ?></td>
                        <td><?= $row['cant_ing'] ?> €</td>
                        <td><?= $row['fech_gas'] ?></td>
                        <td><?= $row['desc_gas'] ?></td>
                        <td><?= $row['cant_gas'] ?> €</td>
                        <td colspan=2><a title='update_<?= $row['id_bal']; ?>' href='update_form.php?id_bal=<?= $row['id_bal'] ?>'>Modificar</a></td>
                    </tr> <?php

                    $total_ing += $row['cant_ing'];
                    $total_gas += $row['cant_gas'];                    
                } ?>

                <tr>
                    <th colspan=2>Total de ingresos</th>
                    <th><?= $total_ing; ?></th>
                    <th colspan=2>Total de gastos</th>
                    <th><?= $total_gas; ?></th>
                    <th colspan=2></th>
                </tr>
                <tr>
                    <th colspan=2>BALANCE ACTUAL</th>
                    <th colspan=6><?= $total_ing - $total_gas; ?></th>                    
                    
                </tr>
            </tbody>
        </table>
    </section>
</body>
</html>