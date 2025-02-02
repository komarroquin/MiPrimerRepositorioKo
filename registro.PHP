<!DOCTYPE html>
<html>
    <head>
        <title>Registro</title>
    </head>

        <body>
            <p><h2>El servidor está encendido</h2></p>

            <?php
                $MostrarTexto="Mi texto está oculto";
                echo('<p>'.$MostrarTexto.'</p>');
            ?>

            <form action="CapturarRegistro.php" method="POST">
            Nombre:<input type="text" placeholder="Ingrese el nombre" name="nombre"><br>
            Apellido:<input type="text" placeholder="Ingrese el apellido" name="apellido"><br>
            Usuario:<input type="text" placeholder="Nombre de usuario" name="usuario"><br>
            Clave:<input type="password" placeholder="Ingrese la clave" name="clave"><br>
            </input>
            <button type="submit">Enviar</button>
            </form>


        </body>
</html>