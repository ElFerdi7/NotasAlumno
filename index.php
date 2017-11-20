<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<strong>Ejercicio a</strong>";
        echo"<br>";
        echo "Matriz notas:";
        echo"<br>";
        $notasAlumnos = array(
            "AL1" => array("DAW" => 7, "DIW" => 8, "DWS" => 8, "DWC" => 7),
            "AL2" => array("DAW" => 6, "DIW" => 5, "DWS" => 4, "DWC" => 3),
            "AL3" => array("DAW" => 8, "DIW" => 8, "DWS" => 8, "DWC" => 9),
            "AL4" => array("DAW" => 4, "DIW" => 3, "DWS" => 3, "DWC" => 6)
        );
        print_r($notasAlumnos);
        echo"<br>";
        echo"<br>";

        echo "<strong>Ejercicio b</strong>";
        echo"<br>";

        function mostrarNotasAlumnos($i) {
            foreach ($i as $ind1 => $valor1) {
                foreach ($valor1 as $ind2 => $valorReal) {
                    echo "El alumno $ind1 de la asignatura $ind2 ha obtenido un $valorReal<br/>";
                }
            }
        }

        echo mostrarNotasAlumnos($notasAlumnos);
        echo"<br>";
        echo"<br>";


        echo "<strong>Ejercicio c</strong>";
        echo"<br>";
        $mostrarAlumno = "AL1";

        function mostrarNotasAlumno($alumno, $array) {
            foreach ($array as $key2 => $value2) {
                if ($key2 == $alumno) {
                    foreach ($value2 as $key3 => $value3) {
                        echo "El alumno " . $key2 . " de la asignatura " . $key3 . " ha obtenido un " . $value3 . "<br>";
                    }
                }
            }
        }

        echo mostrarNotasAlumno($mostrarAlumno, $notasAlumnos);
        echo "<br>";
        echo "<br>";
        echo "<strong>Ejercicio d</strong>";
        echo "<br>";

        $mostrarAlumno2 = "AL2";

        function mostrar_NotaMasAlta_Alumno($alumno2, $arrayNotas) {
            foreach ($arrayNotas as $clave => $valor) {
                if ($clave == $alumno2) {
                    list(, $valor1) = each($valor);
                    $max = $valor1;
                    foreach ($valor as $clave1 => $valor2) {
                        if ($max < $valor2) {
                            $max = $valor2;
                            $asig = $clave1;
                        } else {
                            $max = $max;
                            $asig = $clave1;
                        }
                    }
                }
            }
            return "La nota mas alta obtenida por " . $alumno2 . " ha sido en " . $asig . " con un " . $max;
        }

        echo mostrar_NotaMasAlta_Alumno($mostrarAlumno2, $notasAlumnos);
        ?>
    </body>
</html>
