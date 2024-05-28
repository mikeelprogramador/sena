<?php

    $doc = $_GET['doc'];
    $nombre = $_GET['name'];
    $apellido = $_GET['latsname'];
    $fecha = $_GET['fecha'];


    include("clase.php");
    Login::registrar($doc,$nombre,$apellido,$fecha);