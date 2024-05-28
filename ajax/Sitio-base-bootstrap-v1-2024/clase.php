<?php

class Login
{
    public static function registrar($doc,$nombre,$apellido,$fecha){
        $conexion = mysqli_connect("localhost","root","","bd_ajax");
        $sql = "INSERT INTO tb_usuarios(documento, nombre,apellido,fecha_nacimiento)value('$doc','$nombre','$apellido','$fecha')";
        $consulta = $conexion->query($sql);
        if ($consulta){
        header("location: controlador.php?seccion=seccion6");
        }
    }

    public static function ver(){
        $salida = "";
        $conexion = mysqli_connect("localhost","root","","bd_ajax");
        $sql = "SELECT * FROM tb_usuarios";
        $consulta = $conexion->query($sql);
        while($fila=$consulta->fetch_assoc()){
            $salida .= $fila['documento']. "<br>";
            $salida .= $fila['nombre']. "<br>";
            $salida .= $fila['apellido']. "<br>";
            $salida .= $fila['fecha_nacimiento']."<br><br>";
        }
        return $salida;
    }
}