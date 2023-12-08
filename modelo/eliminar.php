<?php
include('conexion.php');

// Verifica si se ha enviado un formulario
if(isset($_POST['btneliminar']) && $_POST['btneliminar'] === 'ok') {
    // Recupera el ID del dulce a eliminar
    $id_dulce = $_POST['id_dulce'];

    // Realiza la consulta de eliminación
    $query = "DELETE FROM dulces WHERE id_dulce = $id_dulce";
    $result = mysqli_query($conexion, $query);

    if($result) {
        header("Refresh: 1; URL=http://localhost/Dulceria/");
    } else {
        echo "Error al eliminar el dulce: " . mysqli_error($conexion);
    }
}

// Resto de tu código HTML y formulario para mostrar y seleccionar el dulce a eliminar
?>

<form method="post" action="eliminar.php">
    <div class="mb-3">
        <label for="id_dulce" class="form-label">ID del Dulce a Eliminar</label>
        <input type="text" class="form-control" name="id_dulce">
    </div>
    <button type="submit" class="btn btn-danger" name="btneliminar" value="ok">Eliminar Dulce</button>
</form>
