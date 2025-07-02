<?php
include 'db.php';

$consulta = $conexion->query("SELECT * FROM productos");


?>

<h2>Lista de productos</h2>
<a href="crear.php">Crear nuevo producto</a>

<table border="1">
<tr>
<th>ID</th>
<th>Nombre de producto</th>
<th>Precio</th>
<th>Descripción</th>
<th>Tipo</th>
<th>Stock</th>
<th>Fecha de creación</th>
<th>Acciones</th>
</tr>
<?php while ($producto = $consulta->fetch_assoc()) { ?>
<tr>
    <td><?= $producto['ID']?></td>
    <td><?= $producto['NOMBRE_PROD']?></td>
    <td><?= $producto['PRECIO']?></td>
    <td><?= $producto['DESCRIPCION']?></td>
    <td><?= $producto['TIPO']?></td>
    <td><?= $producto['STOCK']?></td>
    <td><?= $producto['FECHA_CREACION']?></td>
    <td><a href="editar.php?id=<?=$producto['ID']?>">Editar</a>|
    <a href="eliminar.php?id=<?=$producto['ID']?>" onclick="alert('Esta seguro de eliminar este registro?')">Eliminar</a>
    </td>
</tr>
<?php } ?>

</table>