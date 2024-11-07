<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de alumnos</title>
    <link rel="shortcut icon" href="imagenes/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos2.css" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            margin: 7px 300px;
            background-color: beige;
        }
        button {
            background-color: #fff;
            font-weight: semibold;
            color: #444;
            font-size: 1rem;
            padding: 1rem 1.5rem;
            border: rgb(140, 240, 120);
            border-radius: .3rem;
            box-shadow: .4rem .4rem 1rem #998787;
        }
    </style>



</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <header>

        <img src="imagenes/logo cecyte.png" alt="" width="90px" height="90">
        <h1>
            <center>
                Alta de alumnos
            </center>
        </h1>
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
                <a href="alumnos.php">MENU</a>
                </li>
            </ul>
        </nav>
    </header>

    <article>
        <form action="" method="Post" class="was-validated" novalidate>
            <div class="has-validation">
                <label for="nombre" class="form-label">Escribe nombre:</label>
                <input type="text" class="form-control" name="nombre" pattern="^[A-Za-z ]{1,50}$" placeholder="Escribe tu nombre completo" aria-describedby="emailHelp" required>
                <div class="valid-feedback">
                    ¡Excelente!
                </div>
                <div class="invalid-feedback">
                    Por favor, Escriba su nombre correctamente
                </div>
            </div>
            <br> <br>
            <div class="has-validation">
                <label for="correo">Escribe correo electrónico:</label>
                <input type="email" name="correo" placeholder="ejemplo@gmail.com" maxlength="50" class="form-control" aria-describedby="emailHelp" required>
                <div class="valid-feedback">
                    ¡Excelente!
                </div>
                <div class="invalid-feedback">
                    Por favor, Escriba su correo
                </div>
            </div>
            <br> <br>
            <div class="has-validation">
                <label for="edad">Registo de edad:</label>
                <input type="number" name="edad" min="14" max="20" class="form-control" aria-describedby="emailHelp" required>
                <div class="valid-feedback">
                    ¡Excelente!
                </div>
                <div class="invalid-feedback">
                    Por favor, ingrese su edad
                </div>
            </div>
            <br> <br>
            <div class="has-validation"></div>
            <label for="genero">Género del alumno:</label>
            <input type="radio" name="genero" value="Hombre" required> Hombre
            <input type="radio" name="genero" value="Mujer" required> Mujer
            <input type="radio" name="genero" value="Binario" required> Binario
            <div class="valid-feedback">
                ¡Excelente!
            </div>
            <div class="invalid-feedback">
                Por favor, Seleccioné su genero
            </div>
            </div>
        
            
            <br> <br>
            <div class="has-validation">
                <label for="fech_n">Ingresa fecha de nacimieto:</label>
                <input type="date" name="fech_n" min="2004-01-01" max="2011-12-31" class="form-control" aria-describedby="emailHelp" required>
                <div class="valid-feedback">
                    ¡Excelente!
                </div>
                <div class="invalid-feedback">
                    Por favor, Seleccioné su fecha de nacimiento
                </div>
            </div>
            <br> <br>
            
            <div class="has-validation">
                <label for="n_tel">Escribe un número de teléfono:</label>
                <input type="text" name="n_tel" pattern="^[0-9]{1,10}$" minlength="10" maxlength="10" placeholder="10 digitos" class="form-control" aria-describedby="emailHelp" required>
                <div class="valid-feedback">
                    ¡Excelente!
                </div>
                <div class="invalid-feedback">
                    Por favor, Escriba su teléfono
                </div>
            </div>
     
            
            <br> <br>
            <div class="has-validation">
                <label for="grupo"> Grupo a ingresar:</label>
                <select name="grupo" id="">
                <option value="A" name="grupo">A</option>
                <option value="B" name="grupo">B</option>
                <option value="C" name="grupo">C</option>
                <option value="D" name="grupo">D</option>
                <option value="E" name="grupo">E</option>
                <option value="F" name="grupo">F</option>
                <option value="G" name="grupo">G</option>
                <option value="H" name="grupo">H</option>
            </select>
                <div class="valid-feedback">
                    Elija su grupo
                </div>
                <div class="invalid-feedback">
                    Por favor, Elija su grupo
                </div>
            </div>
            <br> <br>
            <div class="has-validation">
                <label for="grado">Grado a darse de alta:</label>
                <select name="grado" id="" required>
                <option value="1" name="grado">Primero</option>
                <option value="2" name="grado">Tercero</option>
                <option value="3" name="grado">Quinto</option>
            </select>
                <div class="valid-feedback">
                    Elija su grado
                </div>
                <div class="invalid-feedback">
                    Por favor, seleccione su grado
                </div>
            </div>
            <br> <br>

            <center>
               <button> <input type="submit" value="Registrar Alumno" name="Registro"></button>
               <button> <input type="reset" value="Otros datos" name="reset"> </button>
            </center>
            <?php
            $conexion=mysqli_connect("localhost","root","","bd_5a_e");
            if(isset($_POST['Registro'])){
                $nombreb=$_POST['nombre'];
                $correob=$_POST['correo'];
                $edadb=$_POST['edad'];
                $generob=$_POST['genero'];
                $fech_nb=$_POST['fech_n'];
                $n_telb=$_POST['n_tel'];
                $grupob=$_POST['grupo'];
                $gradob=$_POST['grado'];

                $insertar= "INSERT INTO alumnos(nombrea,correoa,edada,sexoa,fecha_nacia,tela,grupo,grado)VALUES('$nombreb','$correob','$edadb','$generob','$fech_nb','$n_telb.','$grupob','$gradob')";
                if($conexion->query($insertar)==true)
                {
                    echo"<script> alert('EL empleado [$nombreb] se agrago correctamente'); location.href='alumnos.php'; </script>";
                         }else{
                     echo"<script> alert('EL empleado [$nombreb] no se agrago correctamente'); location.href='alumnos.php'; </script>";
                         }       
                        }
                        
                        mysqli_close($conexion);

            
            ?>
        </form>
    </article>
    <footer>
        <p>
            <center>Mirian Ochoa Benítez- </center>
        </p>
    </footer>
</body>

</html>