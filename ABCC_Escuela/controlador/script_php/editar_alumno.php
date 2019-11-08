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

        $sql = "UPDATE alumnos SET nombre =  ?, primerAp = ?, segundoAp = ?, edad = ?, semestre = ?, carrera = ? WHERE numControl LIKE ?;";
        
        $sqlPreparado = $conexionPDO->prepare($sql);
        $sqlPreparado->execute([$nombre, $primerAp, $segundoAp, $edad, $semestre, $carrera, $numControl]);

        $sqlPreparado = null;
        header("Location: ../../vista/pagina_principal.php#/consultar_usuario");
        
    } else { }
?>