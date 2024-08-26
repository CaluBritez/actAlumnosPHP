<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

    function generarAlumnos($cantidad = 10) {
        $nombres = ["Juan", "María", "Pedro", "Ana", "Luis", "Sofía", "Carlos", "Lucía", "Miguel", "Laura"];
        $alumnos = [];

        for ($i = 1; $i <= $cantidad; $i++) {
            $alumno = [
                'id_alumno' => $i,
                'nombre' => $nombres[$i-1],
                'nota_matematicas' => rand(1, 10),
                'nota_quimica' => rand(1, 10),
                'asistencias' => rand(0, 40)
            ];
            $alumnos[] = $alumno;
        }

        return $alumnos;
    }

    // Elaboramos lista
    $listaAlumnos = generarAlumnos();

    foreach ($listaAlumnos as $alumno) {
        $promedio_asistencia = ($alumno['asistencias'] / 40) * 100;
        echo "El promedio de asistencia de {$alumno['nombre']} es: {$promedio_asistencia}%<br>";

        $promedio = ($alumno['nota_matematicas'] + $alumno['nota_quimica']) / 2;
        if (($promedio > 7) and (($alumno['nota_matematicas']) > 7 and ($alumno['nota_quimica'] > 7))) {
            echo "El alumno {$alumno['nombre']} es regular con un promedio de : {$promedio}<br>";
        }elseif ($promedio > 7) {
            echo "El alumno {$alumno['nombre']} debe realizar clases de apoyo. Su promedio es: {$promedio}<br>";
        }
        elseif (($alumno['nota_matematicas']) < 8 or ($alumno['nota_quimica'] < 8)) {
            echo "El alumno {$alumno['nombre']} debe recuperar un parcial. Su promedio es: {$promedio}<br>";
        }else {
            echo "El alumno {$alumno['nombre']} esta libre con un promedio de : {$promedio}<br>";
        }
    }
    ?>

</body>
</html>