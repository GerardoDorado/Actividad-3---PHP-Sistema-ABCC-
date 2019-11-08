<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form action="../controlador/script_php/agregar_alumno.php" method="post">

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputNumControl">Numero de control*</label>
                        <input type="text" class="form-control" id="inputNumControl" name="inputNumControl" placeholder="Numero de control*" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputNombre">Nombres(*)</label>
                        <input type="text" class="form-control" id="inputNombre" name="inputNombre" placeholder="Nombres(s)*" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputPrimerApellido">Primer apellido</label>
                        <input type="text" class="form-control" id="inputPrimerApellido" name="inputPrimerApellido" placeholder="Primer apellido(s)*" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputSegundoAp">Segundo apellido</label>
                        <input type="text" class="form-control" id="inputSegundoAp" name="inputSegundoAp" placeholder="Segundo apellido" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputEdad">Edad</label>
                        <input type="number" class="form-control" id="inputEdad" name="inputEdad" placeholder="Edad" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputSemestre">Semestre</label>
                        <select id="inputSemestre" name="inputSemestre" class="form-control" required>
                            <option selected>Semestre</option>
                            <option value="01">01</option>
                            <option value="02">02</option>
                            <option value="03">03</option>
                            <option value="04">04</option>
                            <option value="05">05</option>
                            <option value="06">06</option>
                            <option value="07">07</option>
                            <option value="08">08</option>
                            <option value="09">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputCarrera">Carrera</label>
                        <select id="inputCarrera" name="inputCarrera" class="form-control" required>
                            <option selected>Carrera</option>
                            <option value="Ing. Industrias Alimentarias">Ing. Industrias Alimentarias</option>
                            <option value="Ing. Sistemas Computacionales">Ing. Sistemas Computacionales</option>
                            <option value="Ing. Mecatronica">Ing. Mecatronica</option>
                            <option value="Lic. Administracion">Lic. Administración</option>
                            <option value="Lic. Contador Publico">Lic. Contador Publico</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Registrar alumno</button>
            </form>
        </div>
    </div>
</div>