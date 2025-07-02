<?php
include 'db.php';

$id = $_GET['id'];
$consulta = $conexion->query("SELECT * FROM productos WHERE ID = '$id'");
$producto = $consulta->fetch_assoc();


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];
    $tipo = $_POST['tipo'];
    $stock = $_POST['stock'];
    $fecha_c = $_POST['fecha'];


    $conexion->query("

     UPDATE `productos` SET
    `NOMBRE_PROD`='$nombre',
    `DESCRIPCION`='$precio',
    `PRECIO`='$descripcion',
    `TIPO`='$tipo',
    `STOCK`='$stock',
    `FECHA_CREACION`='$fecha_c' WHERE ID = '$id'
    "
     );

      header("Location: index.php");
    
}
?>

<form method="POST">
    Nombre: <input type="text" name="nombre" required value="<?=$producto['NOMBRE_PROD']?>"><br>
    Precio :<input type="text" name="precio" required value="<?=$producto['PRECIO']?>"><br>
    Descripcion: <input type="text" name="descripcion" required value="<?=$producto['DESCRIPCION']?>"><br>
    Tipo: <input type="text" name="tipo" required value="<?=$producto['TIPO']?>"><br>
    Stock: <input type="text" name="stock" required value="<?=$producto['STOCK']?>"><br>
    Fecha: <input type="date" name="fecha" required value="<?=$producto['FECHA_CREACION']?>"><br>
    <button type="submit">Actualizar producto</button><br>
</form>