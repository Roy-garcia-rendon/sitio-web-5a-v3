<!DOCTYPE html>
<html>

<head>
    <title>NUESTROS ALUMNOS</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x.ico" href="imagenes/per1.ico">
    <link rel="stylesheet" href="css/estilos2.css" type="text/css">
</head>

<body>

    <header>
        <center>
            <h1>SISTEMA DE ATENCIÓN A ALUMNOS </h1>

        </center>
        <div><img src="imagenes/progra.png" width="50px" height="50px"></div>
        <nav>
            <ul>
                <li><a href="bienvenido.php"> ALUMNOS </a></li>
                <li><a href="insercion.php"> AGREGAR ALUMNOS</a></li>
                <li><a href="modificacion.php"> MODIFICAR ALUMNOS</a></li>
                <li><a href="eliminar.php"> BAJA DE ALUMNOS</a></li>
                
            </ul>
        </nav>
    </header>
    <section class="main">
        <?php

       $conexion=mysqli_connect("localhost", "root", "", "escuela");
        $Alumnos= "SELECT * FROM alumnos";
        ?>
        <center>
        <table>
            <tr>
                <th colspan="5" class="titulos" style="font-size: 20px; margin: 10px; padding: 5px; ">ALUMNOS INSCRITOS</th>
            </tr>
            <tr>
                <td class="titulos"><b>No. Control</b></td>
                <td class="titulos"><b>Nombre</b></td>
                <td class="titulos"><b>Especialidad</b></td>
                <td class="titulos"><b> Nacimiento</b></td>
                <td class="titulos"><b>Beca</b></td>
            </tr>
            <?php $resultado = mysqli_query($conexion, $Alumnos); 
            
            
            while($row=mysqli_fetch_assoc($resultado)) {?>
            <tr>
                <td><?php echo $row["no_control"]; ?></td>
                <td><?php echo $row["nombre"]; ?></td>
                <td><?php echo $row["especialidad"]; ?></td>
                <td><?php echo $row["fecha_na"]; ?></td>
                <td><?php echo $row["beca"]; ?></td>
            </tr>
            <?php  } ?>


        </table>
    </center>

       <?php
        mysqli_free_result($resultado);
         mysqli_close($conexion);
        ?>
    </section>
    <footer>
        <p>Mirian Ochoa Benítez-2022</p>
    </footer>
</body>

</html>