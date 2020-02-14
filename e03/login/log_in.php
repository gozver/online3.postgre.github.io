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
                        <a class='breadcrumb-item gray' disabled>Login </p>
                </td>
                <td>
                <p class='login'><span class='gray'>¿Aún no tienes una cuenta? </span>
                    <a class='card-link' href='./sign_up_form.php'>Regístrarse.</a></p>
                </td>
            </tr>
        </table> <!-- <hr /> -->
        
        <!-- PESTAÑAS -->
        <ul class='nav nav-tabs text-center'>
            <li class='nav-item w-25'><a class='nav-link' href='../../e01/index.php'>Ejercicio 1</a></li>
            <li class='nav-item w-25'><a class='nav-link' href='../../e02/index.php'>Ejercicio 2</a></li>
            <li class='nav-item w-25'><a class='nav-link white active' href='../login/index.php'>Ejercicio 3</a></li>
        </ul><br /> <?php

        require_once('connect_db.php');

        $usr = $_POST['usr'];
        $pwd = $_POST['pwd'];
                
        //COMPROBAMOS SI EL USUARIO EXISTE EN LA BBDD. SI EXISTE, OBTENEMOS SU PASSWORD ENCRIPTADA DE LA BBDD
        $sql = "SELECT * FROM usuarios WHERE usr='$usr'";
        $sth = $dbh->prepare($sql);
        $sth->execute();
        $result = $sth->fetch();            
    
        /* echo $result['usr']."<br>";
        echo $result['pwd']."<br>";
        echo $pwd."<br>"; */
                    
        if (empty($result)) { ?>
            <br /><h4>Usuario incorrecto. Por favor inténtelo de nuevo.</h4><br /> <?php
        } else {
            $pwd_db = $result['pwd'];
            //LA PASSWORD DADA POR EL USUARIO EN TEXTO PLANO CONCUERDA CON LA PASSWORD ENCRIPTADA DE LA BBDD
            if( password_verify($pwd, $result['pwd']) ) {
                session_start();
                $_SESSION['usr'] = $result['usr'];
                header('Location: ./index.php');
            //LA PASSWORD DADA POR EL USUARIO EN TEXTO PLANO NO CONCUERDA CON LA PASSWORD ENCRIPTADA DE LA BBDD
            } else { ?>
                <br /><br />
                <h4>Contraseña incorrecta. Por favor inténtelo de nuevo.</h4>
                <br /> <?php
            }
        } ?>

        <a class='card-link' href='./index.php'>Volver a la página anterior.</a>
    </section>    
</body>
</html>



