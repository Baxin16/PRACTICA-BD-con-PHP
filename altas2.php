<html>
    <head>
        <title>Agregar</title>
    </head>
    <body>
        <?php
        $conexion=mysqli_connect("localhost","root","","escuela") or die("Problemas con la conexión");
        if (empty($_POST['nombre'])) {
            echo"<script type=\"text/javascript\">alert('ERROR... CAMPO NOMBRE VACIO');
            Javascript:history.back(1)</script>";
        }
        else{
            if (empty($_POST['mail'])) {
                echo"<script type=\"text/javascript\">alert('ERROR... CAMPO E-MAIL VACIO');
                Javascript:history.back(1)</script>";
            }
            else{
                mysqli_query($conexion,"insert into alumnos(nombre,mail,codigocurso) values
                ('$_REQUEST[nombre]','$_REQUEST[mail]',$_REQUEST[codigocurso])") or die ("Problemas en el select".mysqli_error($conexion));
                mysqli_close($conexion);
                echo"<script type=\"text/javascript\">alert('DATOS DEL ALUMNO REGISTRADOS CON EXITO');
                window.location='index.html';</script>";
            }
        }
        ?>
    </body>
</html>
