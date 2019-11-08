<?php
    include("conexion_PDO.php");

    $conexionPDO = conexionPDO("user", "password", "escuela_web");
    $conexionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST["inputNumControl"])) {
        $numControl = strtoupper($_POST["inputNumControl"]);
        
        $sql = "DELETE FROM alumnos WHERE numControl = ?;";

        $sqlPreparado = $conexionPDO->prepare($sql);
        $sqlPreparado->execute([$numControl]);

        $sqlPreparado = null;
        header("Location: ../../vista/pagina_principal.php#/consultar_usuario");
        
    } else { }
?>