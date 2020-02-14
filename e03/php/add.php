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
            <li class='nav-item w20'><a class='nav-link white active' href='./add.php'>Insertar</a></li>
            <li class='nav-item w20'><a class='nav-link white' href='./update_list.php'>Modificar</a></li>
            <li class='nav-item w20'><a class='nav-link white' href='./delete_list.php'>Eliminar</a></li>            
        </ul><br />
        
        <!-- PÁGINA -->
        <form method='post'>
            <h1 class='display-5 text-center'>Insertar campo.</h1><br />
            <table class='table table-striped custom'>                
                <thead>
                <tr class='dark-blue text-center'><th colspan=4>INSERTAR</th></tr>
                    <tr class='medium-blue text-center'>                        
                        <th colspan=2>INGRESOS</th>
                        <th colspan=2>GASTOS</th>
                    </tr>                    
                </thead>
                <tbody>
                    <tr><td class='form-group text-center w-25'>Fecha</td>
                        <td class='form-group w-25'><input class='form-control' type='date' name='fech_ing' required='required' /></td>
                        <td class='form-group text-center w-25'>Fecha</td>
                        <td class='form-group w-25'><input class='form-control' type='date' name='fech_gas' required='required' /></td>
                    </tr>
                    <tr><td class='form-group text-center'>Descripción</td>
                        <td class='form-group'><input class='form-control' type='text' name='desc_ing' placeholder='Concepto' required='required' /></td>
                        <td class='form-group text-center'>Descripción</td>
                        <td class='form-group'><input class='form-control' type='text' name='desc_gas' placeholder='Concepto' required='required' /></td>
                    </tr>
                    <tr><td class='form-group text-center'>Cantidad</td>
                        <td class='form-group'><input class='form-control' type='number' name='cant_ing' min=0 value=0 /></td>
                        <td class='form-group text-center'>Cantidad</td>
                        <td class='form-group'><input class='form-control' type='number' name='cant_gas' min=0 value=0 /></td>
                    <tr>
                </tbody>
            </table>
            <input class='btn btn-primary w-25' type='submit' name='insertar' value='Insertar Campo'/>
        </form> <?php
            
        if(isset($_POST['insertar'])) {
            $usr_id = $_SESSION['usr'];
            $fech_ing = $_POST['fech_ing'];
            $fech_gas = $_POST['fech_gas'];
            $desc_ing = $_POST['desc_ing'];
            $desc_gas = $_POST['desc_gas'];
            $cant_ing = $_POST['cant_ing'];
            $cant_gas = $_POST['cant_gas'];
            
            require_once('../login/connect_db.php');
                        
            $sql = 'INSERT INTO balances (usr_id, fech_ing, fech_gas, desc_ing, desc_gas, cant_ing, cant_gas) VALUES (?,?,?,?,?,?,?)';                
            $sth = $dbh->prepare($sql);
            $sth->execute(array($usr_id, $fech_ing, $fech_gas, $desc_ing, $desc_gas, $cant_ing, $cant_gas)); ?>

            <br /><p>Campo insertado satisfactoriamente en la BBDD.</p> <?php                                
        } ?>
    </section>
</body>
</html>