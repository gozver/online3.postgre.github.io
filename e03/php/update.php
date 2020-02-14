<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
<head>
    <meta charset='utf-8' />
    <title>Editar</title>    
</head>
<body>
    <?php
    require_once('../login/connect_db.php');

    $id = $_POST['id_bal'];    
    $fech_ing = $_POST['fech_ing'];
    $fech_gas = $_POST['fech_gas'];
    $desc_ing = $_POST['desc_ing'];
    $desc_gas = $_POST['desc_gas'];
    $cant_ing = $_POST['cant_ing'];
    $cant_gas = $_POST['cant_gas'];
    
    $sql = 'UPDATE balances SET fech_ing=?, fech_gas=?, desc_ing=?, desc_gas=?, cant_ing=?, cant_gas=? WHERE id_bal=?';
    $sth = $dbh->prepare($sql);
    $sth->execute(array($fech_ing, $fech_gas, $desc_ing, $desc_gas, $cant_ing, $cant_gas, $id));        
            
    header('Location: ./update_list.php'); ?>
    
</body>
</html>
