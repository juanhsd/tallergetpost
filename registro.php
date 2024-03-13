<?php
    $sexo = $_REQUEST["sexo"];
    $nombre = $_REQUEST["nombre"];
    $tipo = $_REQUEST["tipo"];
    $radicado = rand(1000, 9999);
    $descripcion = $_REQUEST["descripcion"];
    date_default_timezone_set('America/Bogota');
    $fecha = date('d-m-y');

    echo "$sexo, $nombre. ";
    echo "<br>";
    echo "Su $tipo ha sido radicada con Nro. $radicado, el día $fecha.";
    echo "<br>";
    if ($tipo = "peticion") {
        echo "En 24 horas le será resuelto su caso:";
    } elseif ($queja = "queja"){ 
        echo "En 72 horas le será resuelto su caso:";
    } else {
        "En 12 horas le será resuelto su caso";
    }
    echo "$descripcion.";
?>