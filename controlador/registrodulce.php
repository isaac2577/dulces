<?php

if (!empty($_POST["btnregistrar"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["cantidad"]) and !empty($_POST["costo"]) and !empty($_POST["textura"]) and !empty($_POST["fecha"]) ) {
        
        $nombre=$_POST["nombre"];
        $cantidad=$_POST["cantidad"];
        $costo=$_POST["costo"];
        $Textura=$_POST["textura"];
        $fecha=$_POST["fecha"];

        $sql=$conexion->query(" insert into dulces(nombre,cantidad,costo,textura,fecha)values('$nombre','$cantidad','$costo','$Textura','$fecha') ");
        if ($sql==1){
            echo '<div class="alert alert-succes>Registrado correctamente</div>';
        } else {
            echo '<div class="alert alert-danger>Error al registrar</div>';
        }
    }else{
        echo '<div class="alert alert-warning>Algunos de los campos esta vacio</div>';
    }

}
?>