<?php
    session_start();
    if(!isset($_SESSION['data'])){
        header('Location: index.php');
    }else{
        $data = $_SESSION['data'];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <title>Login - MSSQL</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h3>Bienvenido: <?php echo $data['nombre']; ?> <?php echo $data['apellido']; ?></h3>
        <form method="POST" action="logout.php">
            <input type="submit" value="Cerrar Seseión">
        </form>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>