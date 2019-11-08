<div class="container-fluid">
    <div class="row main">
        <h1>Buscar usuarios</h1>

        <input class="form-control" id="caja_busqueda" type="text" placeholder="Buscar...">
        <br><br>

        <?php
        include("../controlador/script_php/conexion_PDO.php");
        
        $conexionPDO = conexionPDO("user", "password", "escuela_web");
        $conexionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = "SELECT * FROM alumnos;";

        $sentencia = $conexionPDO->prepare($consulta);
        $sentencia->execute([]);

        echo "<table class='table table-bordered table-striped'>";
        echo "<thead>";
        echo "<tr id='titulo'>
                            <th>Número de control</th>
                            <th>Nombre</th>
                            <th>Primer apellido</th>
                            <th>Segundo apellido</th>
                            <th>edad</th>
                            <th>Semestre</th>
                            <th>Carrera</th>
                        </tr>";
        echo "</thead>";
        echo "<tbody id='registros_usuarios'>";

        while ($row = $sentencia->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['numControl'] . "</td>";
            echo "<td>" . $row['nombre'] . "</td>";
            echo "<td>" . $row['primerAp'] . "</td>";
            echo "<td>" . $row['segundoAp'] . "</td>";
            echo "<td>" . $row['edad'] . "</td>";
            echo "<td>" . $row['semestre'] . "</td>";
            echo "<td>" . $row['carrera'] . "</td>";
            echo "<td>";
            echo "<a href='editar_usuario.php?nc=" 
                . $row['numControl'] . "&n=" . $row['nombre'] . "&pa=" . $row['primerAp'] . "&sap=" 
                . $row['segundoAp'] . "&e=" . $row['edad'] . "&s=" . $row['semestre'] . "&ca=" 
                . $row['carrera']  
                . "' title='Actualizar usuario' data-toggle='tooltip'><span class='glyphicon glyphicon-pencil'></span></a>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";

        $sentencia = null;
        ?>
    </div>
</div>
<script type="text/javascript">
    var $rows = $('#registros_usuarios tr');
    $('#caja_busqueda').keyup(function() {
        var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();

        $rows.show().filter(function() {
            var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
            return !~text.indexOf(val);
        }).hide();
    });
</script>