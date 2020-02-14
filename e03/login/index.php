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
                        <a class='breadcrumb-item gray' disabled>Login</p>
                </td>
                <td>
                    <p class='login'><span class='gray'>¿Aún no tiene cuenta? </span>
                    <a class='card-link' href='./sign_up_form.php'>Regístrese aquí.</a></p>
                </td>
            </tr>
        </table> <!-- <hr /> -->
        
        <!-- PESTAÑAS -->
        <ul class='nav nav-tabs text-center'>
            <li class='nav-item w-25'><a class='nav-link' href='../../e01/index.php'>Ejercicio 1</a></li>
            <li class='nav-item w-25'><a class='nav-link' href='../../e02/index.php'>Ejercicio 2</a></li>
            <li class='nav-item w-25'><a class='nav-link white active' href='../login/index.php'>Ejercicio 3</a></li>
        </ul><br /> <?php

        // EL USUARIO NO HA INICIADO SESIÓN
        if (isset($_SESSION['usr']) === false) { ?>                    
            <div class='container login-container'>
                <div class='row justify-content-center'>
                    <div class='col-md-6 login-form'>
                        <h3>Inicio de Sesión</h3><br />
                        <form action='./log_in.php' method='post'>
                            <div class='form-group'>
                                <input class='form-control' name='usr' type='text'  placeholder='Introduce tu usuario' required='required' />
                            </div>
                            <div class='form-group'>
                                <input class='form-control' name='pwd' type='password' placeholder='Introduce tu password' required='required' />
                            </div>
                            <div class='form-group'>
                                <input class='btn btn-primary w-50 margin-top-1' type='submit' value='Iniciar Sesión' />
                            </div>                            
                        </form>
                    </div>
                </div>
            </div> <?php
        // EL USUARIO HA INICIADO SESIÓN
        } else {
            require_once('./connect_db.php');
            $usuario = $_SESSION['usr'];
            
            header('Location: ../php/index.php');
        } ?>       
    </section>
</body>
</html>