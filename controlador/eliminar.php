<?php
require '../modelo/conexion.php';
require '../modelo/modelo.php';
//var_dump($_POST);

$id = $_GET['id'];
$tabla = "contactos";
$conn = conexion::dbconexion();
eliminar($conn, $tabla, $id);
header('Location: ../vista/admin/contactos.php');
