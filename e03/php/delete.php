<?php session_start(); ?>

<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
<head>
    <meta charset='utf-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>        
    <link rel='stylesheet' type='text/css' href='../src/css/bootstrap.min.css' />
    <link rel='stylesheet' type='text/css' href='../src/css/style.css' />
    <title>Tarea Presencial 3</title>
</head>
<body> <?php                
        require_once('../login/connect_db.php');

        if (isset($_GET['id_bal'])) {
            $id = $_GET['id_bal'];
            
            $sql = 'DELETE FROM balances WHERE id_bal=?';
            $sth = $dbh->prepare($sql);
            $sth->execute(array($id));
            
            if ($sth) { 
              header('Location: ./delete_list.php');
            }
        }
        else {
            die('Error: el ID está vacio.');
        } ?>
    </section>
</body>
</html>
