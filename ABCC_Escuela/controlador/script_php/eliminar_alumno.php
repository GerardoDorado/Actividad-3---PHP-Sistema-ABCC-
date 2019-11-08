<?php
    include("conexion_PDO.php");
    
    if(isset($_GET["numControl"])){
        $m = $_GET["numControl"];
        
        $conexionPDO = conexionPDO("user", "password", "escuela_web");
        $conexionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        $consulta = "DELETE FROM alumnos WHERE numControl = ?;";
        
        $sentencia = $conexionPDO->prepare($consulta);
        $sentencia->execute([$m]);

        $sentencia = null;
        header("Location: ../../vista/pagina_principal.php#/consultar_usuario");
    }else{
        header("Location: ../../vista/pagina_principal.php#/consultar_usuario");
    }    
?>