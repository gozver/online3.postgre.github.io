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
                        <a class='breadcrumb-item gray' disabled>Registro de Usuario</p>
                </td>                
            </tr>
        </table> 
        
        <!-- PESTAÑAS -->
        <ul class='nav nav-tabs text-center'>
            <li class='nav-item w-25'><a class='nav-link' href='../../e01/index.php'>Ejercicio 1</a></li>
            <li class='nav-item w-25'><a class='nav-link' href='../../e02/index.php'>Ejercicio 2</a></li>
            <li class='nav-item w-25'><a class='nav-link white active' href='../login/index.php'>Ejercicio 3</a></li>
        </ul><br />
        
        <div  class='padding05'>
            <br /><h4>Se ha producido un error en el registro del usuario.</h4><br /> <?php

            require_once('./connect_db.php');

            $usr = $_POST['usr'];    
            $pwd = $_POST['pwd'];
            
            //EXPRESIONES REGULARES: https://www.coding.academy/blog/how-to-use-regular-expressions-to-check-password-strength
            $usr_regex = '/^[A-Za-z][A-Za-z0-9]{3,20}$/';
            $pwd_regex = '/^.{4,20}$/';
            
            //EL NOMBRE DE USUARIO Y LA PASSWORD CUMPLEN LAS CONDICIONES
            if (preg_match($usr_regex, $usr) === 1 && preg_match($pwd_regex, $pwd) === 1) {
                //SE ENCRIPTA LA PASSWORD Y SE INSERTAN LAS CREDENCIALES EN LA BBDD
                $psw_hash = password_hash($pwd, PASSWORD_DEFAULT);        
                $sql = 'INSERT INTO usuarios (usr, pwd) values (?, ?)';
                $sth = $dbh->prepare($sql);
                $success = $sth->execute(array($usr, $psw_hash));

                //EL USUARIO SE HA INSERTADO
                if ($success) {
                    session_start();
                    $_SESSION['usr'] = $usr;            
                    header('Location: ./index.php');
                //EL USUARIO NO SE HA INSERTADO (EXISTE OTRO USUARIO CON EL MISMO NOMBRE O PRIMARY KEY)
                } else { ?> 
                    <p>El nombre de usuario ya existe.</p> <?php 
                } 
            } 

            //EL NOMBRE DE USUARIO NO CUMPLE LAS CONDICIONES
            if (preg_match($usr_regex, $usr) === 0) { ?>
                <p>El nombre de usuario debe cumplir los siguientes requisitos:</p>
                <ul>
                    <li>Debe empezar con una letra.</li>
                    <li>Debe contener solo letras y números.</li>
                    <li>La longitud debe ser de 3 a 20 caracteres.</li>        
                </ul> <?php 
            }
            
            //LA PASSWORD NO CUMPLE LAS CONDICIONES
            if (preg_match($pwd_regex, $pwd) === 0) { ?>
                <p>La password debe cumplir los siguientes requisitos:</p>
                <ul>
                    <li>La longitud debe ser de 4 a 20 caracteres.</li>
                </ul> <?php 
            } ?>

            <a class='card-link' href='./sign_up_form.php'>Volver a la página anterior.</a>
        </div>
    </section>
</body>
</html>

