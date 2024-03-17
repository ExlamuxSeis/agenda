<?php
    require '../../modelo/conexion.php';
    require '../../modelo/modelo.php';
require 'vista/header_admin.php';
?>
<!-- Begin Page Content -->

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Cargar nueva pelicula</h6>
                </div>

                <!-- Card Body -->
                <div class="card-body">
                    <div class="">
                        <div class="container" style="padding-top: 10px;">
                            <main class="form-signin w-100 m-auto">
                                <?php
                                $id = $_GET['id'];
                                $tabla = "contactos";
                                $conn = conexion::dbconexion();
                                $registro = getRegistro($conn, $tabla, $id);
                                foreach ($registro as $persona) :
                                ?>
                                <form class="needs-validation" novalidate action="../../controlador/actualizar.php" method="post" enctype="multipart/form-data">
                                <input type="number" hidden class="form-control" required name="id" value="<?php echo $persona['id']; ?>">
                                    <div class="row mb-3">
                                        <label for="validationCustom01" class="col-sm-2 col-form-label">Nombre:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required id="validationCustom01" name="nombre" value="<?php echo $persona['nombre']; ?>" placeholder="Ingresa tu nombre">
                                            <div class="invalid-feedback">Por favor, ingresa tu nombre.</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="validationCustom02" class="col-sm-2 col-form-label">Apellido paterno:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required name="paterno" value="<?php echo $persona['paterno']; ?>" id="validationCustom02 placeholder="Ingresa tu apellido paterno">
                                            <div class="invalid-feedback">Por favor, ingresa tu apellido paterno.</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="validationCustom03" class="col-sm-2 col-form-label">Apellido materno:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required name="materno" value="<?php echo $persona['materno']; ?>" id="validationCustom03"placeholder="Ingresa tu apellido materno">
                                            <div class="invalid-feedback">Por favor, ingresa tu apellido materno.</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="validationCustom04" class="col-sm-2 col-form-label">Teléfono:</label>
                                        <div class="col-sm-8">
                                            <input type="tel" class="form-control" name="telefono" required value="<?php echo $persona['telefono']; ?>" id="validationCustom04" placeholder="732xxxxxxx">
                                            <div class="invalid-feedback">Por favor, ingresa tu teléfono.</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="validationCustom05" class="col-sm-2 col-form-label">Correo electrónico:</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" required name="email" id="validationCustom05" value="<?php echo $persona['email']; ?>" placeholder="Ingresa tu correo electrónico">
                                            <div class="invalid-feedback">Por favor, ingresa un correo electrónico válido.</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="validationCustom06" class="col-sm-2 col-form-label">Categoría:</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" id="validationCustom06" name="categoria" value="<?php echo $persona['categoria']; ?>" required id="motivo">
                                                <option selected disabled value="">Selecciona una categoría</option>
                                                <option value="Familia">Familia</option>
                                                <option value="Trabajo">Trabajo</option>
                                                <option value="Amigos">Amigos</option>
                                                <option value="Colegas">Colegas</option>
                                                <option value="Otros contactos profesionales">Otros contactos profesionales</option>
                                            </select>
                                            <div class="invalid-feedback">Por favor, selecciona una categoría.</div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="invalidCheck2" class=" mr-3">Seleccionar icono: </label>
                                        <div class="col-sm-10 d-flex align-items-center">
                                            <div class="form-check me-3">
                                                <input class="form-check-input" required type="radio" value="joven" name="icono" id="invalidCheck2">
                                                <img src="../../img/principal/joven.png" width="24px">
                                            </div>
                                            <div class="form-check me-3 ml-4">
                                                <input class="form-check-input" required type="radio" value="colega" name="icono" id="invalidCheck2">
                                                <img src="../../img/principal/colega.png" width="24px">
                                            </div>
                                            <div class="form-check me-3 ml-4">
                                                <input class="form-check-input" required type="radio" value="adulto" name="icono" id="invalidCheck2">
                                                <img src="../../img/principal/adulto.png" width="24px">
                                            </div>
                                            <div class="form-check me-3 ml-4">
                                                <input class="form-check-input" required type="radio" value="mujer" name="icono" id="invalidCheck2">
                                                <img src="../../img/principal/mujer.png" width="24px">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-10 offset-sm-2">
                                            <button type="submit" class="btn btn-primary">Actualizar</button>
                                            <a class="btn btn-success" href="contactos.php">Regresar</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                    </div>
                                </form>
                                <?php endforeach ?>
                            </main>
                        </div>
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