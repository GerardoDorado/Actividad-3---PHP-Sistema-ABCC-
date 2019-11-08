
<?php

    include("conexion_PDO.php");

    $conexionPDO = conexionPDO("user", "password", "escuela_web");
    $conexionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (
        isset($_POST["inputNombre"]) || isset($_POST["inputPrimerApellido"]) || isset($_POST["inputSegundoAp"]) ||
        isset($_POST["inputEdad"]) ||  isset($_POST["inputCarrera"]) || isset($_POST["inputSemestre"]) ||
        isset($_POST["inputNumControl"])
    ) {

        $nombre = strtoupper($_POST["inputNombre"]);
        $primerAp = strtoupper($_POST["inputPrimerApellido"]);
        $segundoAp = strtoupper($_POST["inputSegundoAp"]);
        $numControl = strtoupper($_POST["inputNumControl"]);
        $carrera = strtoupper($_POST["inputCarrera"]);
        $semestre = strtoupper($_POST["inputSemestre"]);
        $edad = strtoupper($_POST["inputEdad"]);


        $consulta2 = "SELECT COUNT(*) FROM alumnos WHERE numControl LIKE ?;";

        $sentencia = $conexionPDO->prepare($consulta2);
        $sentencia->execute([$numControl]);

        $cons = $sentencia->fetch(PDO::FETCH_ASSOC);
        $l1 = $cons["COUNT(*)"];

        $sentencia = null;

        if (!($l1 >= 1)) {
            $sql = "INSERT INTO alumnos VALUES(?, ?, ?, ?, ?, ?, ?);";

            $sqlPreparado = $conexionPDO->prepare($sql);
            $sqlPreparado->execute([$numControl, $nombre, $primerAp, $segundoAp, $edad, $semestre, $carrera]);

            $sqlPreparado = null;
            header("Location: ../../vista/pagina_principal.php#/consultar_usuario");
        } else {
            header("Location: ../../vista/pagina_principal.php#/consultar_usuario");
        }
    } else { }
?>