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
                        <a class='breadcrumb-item' href='./index.php'>Ejercicio 1</a>
                        <a class='breadcrumb-item gray' disabled>Inicio</p>
                </td>                
            </tr>
        </table>
  
        <!-- PESTAÑAS -->
        <ul class='nav nav-tabs text-center'>
            <li class='nav-item w-25'><a class='nav-link white active' href='./index.php'>Ejercicio 1</a></li>
            <li class='nav-item w-25'><a class='nav-link' href='../e02/index.php'>Ejercicio 2</a></li>
            <li class='nav-item w-25'><a class='nav-link' href='../e03/login/index.php'>Ejercicio 3</a></li>            
        </ul>        
        
        <!-- PÁGINA --> <br />
        
        <h1 class='display-5 text-center'>Seleccione la cantidad de cada producto.</h1><br />            
        
        <form method='get' action='procesar.php'>
            <table class='table table-striped custom text-center'>
                <thead>
                    <tr class='dark-blue center'><th colspan=4>LISTADO DE FRUTAS Y VERDURAS</th></tr>
                    <tr class='medium-blue center'>
                        <th colspan=2 class='w-50'>Producto</th>
                        <th colspan=2 class='w-50'>Cantidad</th>                
                    </tr>
                </thead>
                <tbody> 
                    <tr><td colspan=2>Manzanas</td>
                        <td colspan=2><input type='number' min=0 max=100 value=0 name='manzanas' /></td>                    
                    </tr>
                    <tr><td colspan=2>Naranjas</td>
                        <td colspan=2><input type='number' min=0 max=100 value=0 name='naranjas' /></td>
                    </tr>
                    <tr><td colspan=2>Peras</td>
                        <td colspan=2><input type='number' min=0 max=100 value=0 name='peras' /></td>
                    </tr>
                    <tr><td colspan=2>Cebolla</td>
                        <td colspan=2><input type='number' min=0 max=100 value=0 name='cebollas' /></td>
                    </tr>
                    <tr><td colspan=2>Zanahorias</td>
                        <td colspan=2><input type='number' min=0 max=100 value=0 name='zanahorias' /></td>
                    </tr>
                    <tr><td colspan=2>Alcachofas</td>
                        <td colspan=2><input type='number' min=0 max=100 value=0 name='alcachofas' /></td>
                    </tr>

                    <tr>
                        
                    </tr>
                </tbody>
            </table>
            <table class='border0 text-center w-100'><tr>
                <td class='w-25'><input type='submit' class='btn btn-primary btn-block' name='crear' value='Crear Cookie' /></td>
                <td class='w-25'><input type='submit' class='btn btn-primary btn-block' name='modificar' value='Modificar Cookie' /></td>
                <td class='w-25'><input type='submit' class='btn btn-primary btn-block' name='comprobar' value='Comprobar Cookie' /></td>
                <td class='w-25'><input type='submit' class='btn btn-primary btn-block' name='borrar' value='Eliminar Cookie' /></td>
            </td></tr></table>
        </form>
    </section>
</body>
</html>
