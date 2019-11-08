<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Modificar alumno</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="../controlador/script_php/editar_alumno.php" method="post">

                    <div class="form-row">
                        
                        <div class="form-group col-md-6">
                            <label for="inputNumControl">Numero de control*</label>
                            <input type="text" class="form-control" value="<?php echo $_GET['nc'] ?>" id="inputNumControl" name="inputNumControl" placeholder="<?php echo $_GET['nc'] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputNombre">Nombres(*)</label>
                            <input type="text" class="form-control" id="inputNombre" value="<?php echo $_GET['n'] ?>" name="inputNombre" placeholder="<?php echo $_GET['n'] ?>" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputPrimerApellido">Primer apellido</label>
                            <input type="text" class="form-control" value="<?php echo $_GET['pa'] ?>" id="inputPrimerApellido" name="inputPrimerApellido" placeholder="<?php echo $_GET['pa'] ?>" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputSegundoAp">Segundo apellido</label>
                            <input type="text" class="form-control" value="<?php echo $_GET['sap'] ?>" id="inputSegundoAp" name="inputSegundoAp" placeholder="<?php echo $_GET['sap'] ?>" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputEdad">Edad</label>
                            <input type="number" class="form-control" value="<?php echo $_GET['e'] ?>" id="inputEdad" name="inputEdad" placeholder="<?php echo $_GET['e'] ?>" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputSemestre">Semestre</label>
                            <select id="inputSemestre" name="inputSemestre" class="form-control" required>
                                <?php
                                $acciones_usuarios = array(
                                    "01" => "01",
                                    "02" => "02",
                                    "03" => "03",
                                    "04" => "04",
                                    "05" => "05",
                                    "06" => "06",
                                    "07" => "07",
                                    "08" => "08",
                                    "09" => "09",
                                    "10" => "10",
                                    "11" => "11",
                                    "12" => "12"
                                );

                                foreach ($acciones_usuarios as $clave => $valor) {
                                    echo "<option value='" . $valor . "' ";
                                    if ($_GET['s'] == $valor) {
                                        echo "selected";
                                    }
                                    echo ">" . $clave . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputCarrera">Carrera</label>
                            <select id="inputCarrera" name="inputCarrera" class="form-control" required>
                                <option selected>Carrera</option>
                                <?php
                                $acciones_usuarios = array(
                                    "Ing. Industrias Alimentarias" => "Ing. Industrias Alimentarias",
                                    "Ing. Sistemas Computacionales" => "Ing. Sistemas Computacionales",
                                    "Ing. Mecatronica" => "Ing. Mecatronica",
                                    "Lic. Administracion" => "Lic. Administracion",
                                    "Lic. Contador Publico" => "Lic. Contador Publico"
                                );

                                foreach ($acciones_usuarios as $clave => $valor) {
                                    echo "<option value='" . $valor . "' ";
                                    if ($_GET['ca'] == strtoupper($valor)) {
                                        echo "selected";
                                    }
                                    echo ">" . $clave . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Modificar alumno</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>