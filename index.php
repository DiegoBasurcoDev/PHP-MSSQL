<?php
    session_start();
    if(isset($_SESSION['data'])){
        header('Location: home.php');
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
        <h3>Iniciar Sesión</h3>
        <form method="POST" action="login.php">
            <input type="text" name="username" required="true" placeholder="Usuario">
            <input type="password" name="password" required="true" placeholder="Contraseña">
            <input type="submit" value="Acceder">
        </form>
        <?php
            if(isset($_SESSION['error'])) { 
                if(!empty($_SESSION['error'])){
        ?>
            <p style="color: #FE2E2E;"><?php echo $_SESSION['error'] ?></p>
        <?php 
                }  
            }
        ?>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>