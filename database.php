<?php
	class conexion{
        private $cn = null;
        public function getConexionBD(){
            try{
            	$serverName = ""; // Nombre de tu servidor MSSQL
				$connectionInfo = array("Database"=>"PruebaLogin","UID"=>"", "PWD"=>"");
                // Database: Nombre de la Base de datos a utilizar.
                // UID: Usuario de la base de datos MSSQL
                // PWD: Contraseña de la base de datos MSSQL
				$this->cn = sqlsrv_connect($serverName,$connectionInfo);
				
            }catch(Exception $e){
            }
            return $this->cn;
        }
    }
?>