<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>QUIZZ EJEMPLO PHP</title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    </head>
    <body style="background-color:powderblue;">
        <?php
        include('./funciones.php');
        $mysqli = conectaBBDD();

        $consulta = $mysqli->query("SELECT * FROM preguntas ;");
        $num_filas = $consulta->num_rows;
        $listaPreguntas = array();

        for ($i = 0; $i < $num_filas; $i++) {
            $resultado = $consulta->fetch_array();
            $listaPreguntas[$i][0] = $resultado['numero'];
            $listaPreguntas[$i][1] = $resultado['tema'];
            $listaPreguntas[$i][2] = $resultado['enunciado'];
            $listaPreguntas[$i][3] = $resultado['r1'];
            $listaPreguntas[$i][4] = $resultado['r2'];
            $listaPreguntas[$i][5] = $resultado['r3'];
            $listaPreguntas[$i][6] = $resultado['r4'];
            $listaPreguntas[$i][7] = $resultado['correcta'];
        }

        $preguntaElegida = rand(0, $num_filas - 1);
        $r1 = rand(3, 6);
        $r2 = rand(3, 6);
        while ($r2 == $r1) {
            $r2 = rand(3, 6);
        }
        $r3 = rand(3, 6);
        while ($r3 == $r1 || $r3 == $r2) {
            $r3 = rand(3, 6);
        }
        $r4 = rand(3, 6);
        while ($r4 == $r1 || $r4 == $r2 || $r4 == $r3) {
            $r4 = rand(3, 6);
        }

//            $numeros = range(3, 6);
//            shuffle($numeros);
//            foreach ($numeros as $numero) {
//                echo "$numero ";
//            }
        
        $chequeaRespuesta = false;
        if ($chequeaRespuesta == TRUE) {
            if ($listaPreguntas[$preguntaElegida][7] == $n) {
                echo "correcta";
            } else {
                echo "Mal";
            }
            header("http://localhost:8081/EjemploQuizPHP/index.php");
            $chequeaRespuesta = false;
        }
        
        ?>
        <div class="container">
            <div class="row">
                <button class="btn btn-block btn-warning disabled " style = " margin-top:6%" style = "font-size:32px;" >
                    <?php echo $listaPreguntas[$preguntaElegida][2]; ?>
                </button>
                <div class="col-md-1"></div>
                    <div class="col-md-10">
                        <br><br>
                        <button name="r1" class="btn btn-block btn-primary " style = "font-size:25px" style = " margin-top:5%" onclick="$chequeaRespuesta = true;">
                            <?php echo $listaPreguntas[$preguntaElegida][$r1]; ?>
                        </button>
                        <br><br>
                        <button name="r1" class="btn btn-block btn-primary " style = "font-size:25px" onclick="$chequeaRespuesta = true;">
                            <?php echo $listaPreguntas[$preguntaElegida][$r2]; ?>
                        </button> 
                        <br><br>
                        <button class="btn btn-block btn-primary " style = "font-size:25px" onclick="$chequeaRespuesta = true;">
                            <?php echo $listaPreguntas[$preguntaElegida][$r3]; ?>
                        </button> 
                        <br><br>                                                            
                        <button class="btn btn-block btn-primary"  style = "font-size:25px" onclick="$chequeaRespuesta = true;">
                            <?php echo $listaPreguntas[$preguntaElegida][$r4]; ?>
                        </button> 
                    </div>
                <div class="col-md-3"></div>
            </div>
        </div>


        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
