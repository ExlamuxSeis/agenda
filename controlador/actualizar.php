<?php
require '../modelo/conexion.php';
require '../modelo/modelo.php';
//var_dump($_POST);
$tabla = "contactos";
$id = $_POST['id'];
$parametros = [
    'nombre' => $_POST['nombre'],
    'paterno' => $_POST['paterno'],
    'materno' => $_POST['materno'],
    'telefono' => $_POST['telefono'],
    'email' => $_POST['email'],
    'categoria' => $_POST['categoria'],
    'icono' => $_POST['icono']
];
$conn = conexion::dbconexion();
actualizar($tabla, $parametros, $conn, $id);
header('Location: ../vista/admin/contactos.php');
