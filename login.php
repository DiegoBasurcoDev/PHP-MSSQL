<?php
	session_start();
	require_once "database.php";
    $objC = new conexion();
    $cn=$objC->getConexionBD();
    $mensaje = '';
    if($cn){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM Usuario WHERE USUARIO = ? AND CONTRASENIA = ?";
        $params = array($username, $password);
        $stmt = sqlsrv_prepare($cn, $sql, $params);
        sqlsrv_execute($stmt);
        if(sqlsrv_execute($stmt)){
            $estado = 0;
            while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
                $data = array(
                    "nombre" => $row['nombre'],
                    "apellido" => $row['apellido']
                );
                $_SESSION['data'] = $data;
                $estado = 1;
            }
			sqlsrv_close($cn);
            if($estado == 1){
                header('Location: index.php');
            }else{
            	$_SESSION['error'] = "Usuario y/o contraseña incorrecto";
            	header('Location: index.php');
            }  
        }else{
        	sqlsrv_close($cn);
            $_SESSION['error'] = "Fallo la ejecución del servidor.";
            header('Location: index.php');
        }
    }else{
        $_SESSION['error'] = 'No se pudo establecer la conexion con el servidor.';
        header('Location: index.php');
    }
?>