<!DOCTYPE html>
<html xmlns='http://www.w3.org/1999/xhtml' lang='en'>
<head>
    <meta charset='utf-8' />    
</head>
<body> 
    <?php

    session_start();
    session_destroy();
    header('Location: ./index.php');

    ?>
  </body>
</html>