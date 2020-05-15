# PHP-MSSQL
Login con PHP y base de datos MSSQL

Para poder realizar con la conexión entre PHP y MSSQL debe de agregar en esta ruta en esta ruta C:\xampp\php\ext los siguientes drivers:

- php_pdo_sqlsrv_XX_ts_x64
- php_sqlsrv_XX_ts_x64

Una vez agregados los drivers debe buscar el archivo php.ini en la siguiente ruta C:\xampp\php y añadir las siguientes líneas:

- [PHP_SQLSRV]
- extension=sqlsrv_XX_ts_x64
- [PHP_PDO_SQLSRV]
- extension=pdo_sqlsrv_XX_ts_x64

Una vez agregadas las líneas del driver debe reiniciar el servidor Apache para que reconozca los cambios.

A partir de ahora ya podrá realizar la conexión entre PHP y MSSQL

Nota: El "XX" hace referencia a la versión del driver compatible con la versión de PHP. Para más información consulte en el siguiente enlace: https://docs.microsoft.com/en-us/sql/connect/php/system-requirements-for-the-php-sql-driver?view=sql-server-ver15

Nota: "x64" hace referencia a la arquitectura de 64 bits, también hay una versión para la arquitectura de 32 bits. Para más información revise el enlace previamente compartido.
