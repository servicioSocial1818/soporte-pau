<?php

    session_start();
    $idUsuario = $_SESSION['usuario']['id'];
    $datos = array(
        'idEquipo' => $_POST['idEquipo'], 
        'idAsignacion' => $_POST['idAsignacion'],
        'problema' => $_POST['problema'],
        'idUsuario' => $idUsuario
    );


    include "../../clases/Reportes.php";
    $Reportes = new Reportes();
    echo $Reportes->agregarReporteCliente($datos);
