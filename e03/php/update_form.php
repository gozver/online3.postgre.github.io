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
        
        if (isset($_GET['id_bal'])) {
          $id = $_GET['id_bal'];
        }        

        $sql = 'SELECT * FROM balances WHERE id_bal=?';
        $sth = $dbh->prepare($sql);
        $sth->execute(array($id));
        $result = $sth->fetch(); ?>

        <form action='update.php' method='post'>            
            <input type='hidden' name='id_bal' value='<?= $id ?>' />
            Fecha ingreso: 
            <input class='form-control' type='date' name='fech_ing' required='required' value='<?= $result['fech_ing'] ?>' /><br />
            Fecha gasto: 
            <input class='form-control' type='date' name='fech_gas' required='required' value='<?= $result['fech_gas'] ?>' /><br />
            Descripción ingreso: 
            <input class='form-control' type='text' name='desc_ing' required='required' value='<?= $result['desc_ing'] ?>' /><br />
            Descripción gasto: 
            <input class='form-control' type='text' name='desc_gas' required='required' value='<?= $result['desc_gas'] ?>' /><br />
            Cantidad ingreso: 
            <input class='form-control' type='text' name='cant_ing' required='required' value='<?= $result['cant_ing'] ?>' /><br />
            Cantidad gasto: 
            <input class='form-control' type='text' name='cant_gas' required='required' value='<?= $result['cant_gas'] ?>' /><br />                        
            
            <input class='btn btn-primary w-25' type='submit' name='modificar' value='Modificar Campo' />
        </form>    
</body>
</html>
