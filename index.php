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
                }; 
            };          
        }; 
        
        echo mostrarNotasAlumnos ($notasAlumnos);
        echo"<br>";
        ?>
    </body>
</html>
