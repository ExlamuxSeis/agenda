<?php
require '../modelo/conexion.php';
require '../modelo/modelo.php';
//var_dump($_POST);
$tabla = "contactos";
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
crear($tabla, $parametros, $conn);
header('Location: ../vista/admin/contactos.php');
