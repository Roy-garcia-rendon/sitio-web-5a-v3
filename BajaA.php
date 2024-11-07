<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MENU</title>
    <link rel="stylesheet" href="css/estilos2.css" type="text/css">
   

    <style>
        body {
            margin: 7px 300px;
            background-color: beige;
        }
    </style>
</head>

<body>
<?php
       $conexion=mysqli_connect("localhost","root","","bd_5a_e");
       $alumnos= "select * from alumnos"
?>
    <header>
    <center>
            <h1>SISTEMA DE ATENCIÓN SIBACE </h1>

        </center>
        <nav>
            <ul>

                <li>
                    <a href="AltaA.php">Registro de Alumnos</a>
                </li>
               
                <li>
                    <a href="UpdateA.html">Modificación de Datos</a>
                </li>
                <li>
                    <a href="BajaA.html">Baja de alumnos</a>
                </li>
                <li>
                    <a href="menu.html">MENU</a>
                </li>
            </ul>
        </nav>
    </header>
    <section class="main"> 
    <section class="articles">  
    <article><center>
        <h1>Bajas alumnos</h1></center>
        <form action="BajaA.php" method="post">¿Qué número de identificador se eliminara?
        <input type="number" name="ida" autofocus >
        <input type="submit" name="eliminar"  value='eliminar' onclick='return confirmacion()'>
        <?php 
if(isset($_POST["eliminar"])){
  $ida=$_POST["ida"];
   $alumno ="DELETE FROM alumnos WHERE ida=$ida";
   if($conexion->query($alumno) == true) {
    echo"registro eliminado";
   }
}

  ?>


       <table>
    <tr>
    <td>Identificador</td>
    <td>Nombre</td>
    <td>correo</td>
    <td>edad</td>
    <td>sexo</td>
    <td>fecha nacimiento</td>
    <td>tel</td>
    <td>grupo</td>
    <td>grado</td>    

         <?php
        $resultado=mysqli_query($conexion,$alumnos);
        while ($row=mysqli_fetch_assoc($resultado))
        {
            ?>
            <tr>
                <td> <?php echo $row["ida"];?> </td>
                <td> <?php echo $row["nombrea"];?> </td>
                <td> <?php echo $row["correoa"];?> </td>
                <td> <?php echo $row["edada"];?> </td>
                <td> <?php echo $row["sexoa"];?> </td>
                <td> <?php echo $row["fecha_nacia"];?> </td>
                <td> <?php echo $row["tela"];?> </td>
                <td> <?php echo $row["grupo"];?> </td>
                <td> <?php echo $row["grado"];?> </td>
            </tr>
        <?php } ?>
</table>


    </article>
    </section>
    </section>
  <footer>
    <CEnter>
    <hr style="width: 50%; text-align: center;">
    <h3>Mirian Ochoa Benítez</h3>
    <hr style="width: 50%; text-align: center;">
    </CEnter>
  </footer>
  
  <?php
  mysqli_close($conexion);
  ?>
</body>

</html>
