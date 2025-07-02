<?php
 include 'db.php';
 $id = $_GET['id'];
 if (isset($id)) {
    $conexion->query("
    DELETE FROM PRODUCTOS
    WHERE ID = '$id'
    ");

    header("Location: index.php");
 }
?>