<?php
include "conexion.php";

// Definir variables con valores predeterminados
$id_dulce = $nombre = $cantidad = $costo = $textura = $fecha = '';

// Verificar si el índice 'id' está presente en la URL
if (isset($_GET['id_dulce'])) {
    $id_dulce = $_GET['id_dulce'];  // Asegúrate de validar y limpiar esta entrada

    // Consulta para obtener los datos actuales del dulce
    $consulta = "SELECT * FROM dulces WHERE id_dulce = $id_dulce";
    $resultado = mysqli_query($conexion, $consulta);

    // Verificar si la consulta fue exitosa
    if ($resultado) {
        // Obtener los datos del resultado
        $datos_dulce = mysqli_fetch_assoc($resultado);

        // Verificar si las variables están definidas antes de asignarlas
        if (isset($datos_dulce['nombre'])) {
            $nombre = $datos_dulce['nombre'];
        }

        if (isset($datos_dulce['cantidad'])) {
            $cantidad = $datos_dulce['cantidad'];
        }

        if (isset($datos_dulce['costo'])) {
            $costo = $datos_dulce['costo'];
        }

        if (isset($datos_dulce['Textura'])) {
            $textura = $datos_dulce['Textura'];
        }

        if (isset($datos_dulce['fecha'])) {
            $fecha = $datos_dulce['fecha'];
        }
    } else {
        // Manejar el error, por ejemplo, redireccionar a una página de error
        echo "Esta mal 1";
        exit();
    }
} else {
    // Manejar el caso donde 'id' no está presente en la URL
    echo "Esta mal 2";
    exit();
}

// Procesar el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['btn_actualizar']) && $_POST['btn_actualizar'] === 'ok') {
    // Obtener los datos del formulario
    $nombre_nuevo = $_POST['nombre'];
    $cantidad_nueva = $_POST['cantidad'];
    $costo_nuevo = $_POST['costo'];
    $textura_nueva = $_POST['Textura'];
    $fecha_nueva = $_POST['fecha'];

    // Actualizar los datos en la base de datos
    $consulta_actualizar = "UPDATE dulces SET nombre='$nombre_nuevo', cantidad=$cantidad_nueva, costo=$costo_nuevo, Textura='$textura_nueva', fecha='$fecha_nueva' WHERE id_dulce=$id_dulce";
    $resultado_actualizar = mysqli_query($conexion, $consulta_actualizar);

    if ($resultado_actualizar) {
        // Redirigir después de la actualización
        header("Refresh: 2; URL=http://localhost/Dulceria/");
        exit();
    } else {
        // Manejar el error, por ejemplo, redireccionar a una página de error
        echo "Esta mal 4";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Dulce</title>
</head>
<body>
    <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary">Modificar Dulce</h3>

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del Dulce</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $nombre; ?>">
        </div>

        <div class="mb-3">
            <label for="cantidad" class="form-label">Cantidad</label>
            <input type="number" class="form-control" name="cantidad" value="<?php echo $cantidad; ?>">
        </div>

        <div class="mb-3">
            <label for="costo" class="form-label">Costo</label>
            <input type="number" class="form-control" name="costo" value="<?php echo $costo; ?>">
        </div>

        <div class="mb-3">
            <label for="textura" class="form-label">Textura</label>
            <input type="text" class="form-control" name="Textura" value="<?php echo $textura; ?>">
        </div>

        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control" name="fecha" value="<?php echo $fecha; ?>">
        </div>

        <button type="submit" class="btn btn-primary" name="btn_actualizar" value="ok">Actualizar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
