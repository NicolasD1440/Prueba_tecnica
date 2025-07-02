<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD']=== 'POST') {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $tipo = $_POST['tipo'];
    $stock = $_POST['stock'];
    $fecha_c = $_POST['fecha'];


    $conexion->query("
        INSERT INTO productos
        (`NOMBRE_PROD`,`DESCRIPCION`, `PRECIO`, `TIPO`, `STOCK`, `FECHA_CREACION`) 
        VALUES (' $nombre','$descripcion','$precio','$tipo',' $stock','$fecha_c')
        "
     );


     header("Location: index.php");
}
?>

<form method="POST">
    Nombre: <input type="text" name="nombre" required><br>
    Precio :<input type="text" name="precio" required><br>
    Descripcion: <input type="text" name="descripcion" required><br>
    Tipo: <input type="text" name="tipo" required><br>
    Stock: <input type="text" name="stock" required><br>
    Fecha: <input type="date" name="fecha" required><br>
    <button type="submit">Crear nuevo producto</button><br>
</form>