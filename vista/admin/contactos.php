<?php
    require '../../modelo/conexion.php';
    require '../../modelo/modelo.php';
require 'vista/header_admin.php';
?>
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <!-- Topbar Search -->

</div>

<!-- Content Row -->

<div class="row">

    <!-- Area Chart -->
    <div class="col-xl-12 col-lg-7">
        <div class="card shadow mb-4">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Registros guardados</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="">
                    <h3>
                    <div class="table-responsive">
                        <table class="table display" id="mitabla">
                                <thead class="table-primary table-striped">
                                    <tr style="font-size: 11px ;">
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>Apellido Paterno</th>
                                        <th>Apellido Materno</th>
                                        <th>Teléfono</th>
                                        <th>Email</th>
                                        <th>Categoria</th>
                                        <th>Icono</th>
                                        <th colspan="2" class="text-center">Actividad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $tabla = "contactos";
                                $conn = conexion::dbconexion();
                                $registro = getAll($conn, $tabla);
                                foreach ($registro as $persona) :
                                ?>
                                    <tr style="font-size: 11px ;">
                                        <td><?php echo $persona['id']; ?></td>
                                        <td><?php echo $persona['nombre']; ?></td>
                                        <td><?php echo $persona['paterno']; ?></td>
                                        <td><?php echo $persona['materno']; ?></td>
                                        <td><?php echo $persona['telefono']; ?></td>
                                        <td><?php echo $persona['email']; ?></td>
                                        <td><?php echo $persona['categoria']; ?></td>
                                        <td><img src="../../img/principal/<?php echo $persona['icono'].".png"; ?>"></td>
                                        <td><a href="../../vista/admin/editar.php?id=<?php echo $persona['id']; ?>"><button class="btn btn-sm btn btn-outline-primary">Editar</button></a></td>
                                        <td><a onclick="eliminar()" href="../../controlador/eliminar.php?id=<?php echo $persona['id']; ?>"><button class="btn btn btn-sm btn-outline-danger">Eliminar</button></a></td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                        </table>
                    </div>
                    </h3>
                </div>
            </div>
        </div>
    </div>

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php
require 'vista/footer_admin.php';
?>