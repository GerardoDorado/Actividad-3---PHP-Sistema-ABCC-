<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>CRUD alumnos</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
    
    <link rel="stylesheet" type="text/css" href="../estilos/pagina_principal.css">
    <link rel="stylesheet" type="text/css" href="../estilos/tablas.css">


</head>

<body ng-app="myApp">
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3> C R U D Alumnos</h3>
                <strong>CRUD</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="">
                    <a href="#!consultar_usuario" data-toggle="" aria-expanded="false">
                        <i class="glyphicon glyphicon-eye-open"></i>
                        Consultas alumnos
                    </a>
                </li>
                <li>
                    <a href="#!agregar_usuario" data-toggle="" aria-expanded="false">
                        <i class="glyphicon glyphicon-user"></i>
                        Altas alumno
                    </a>
                </li>
                
                <li>
                    <a href="#!eliminar_usuario" data-toggle="" aria-expanded="false">
                        <i class="glyphicon glyphicon-remove-circle"></i>
                        Bajas alumno
                    </a>
                </li>

                <li>
                    <a href="#!modificar_usuario" data-toggle="" aria-expanded="false">
                        <i class="glyphicon glyphicon-refresh"></i>
                        Cambios alumno
                    </a>
                </li>
            </ul>
        </nav>

        <div id="content" class="container">

            <nav class="navbar navbar-default">
                <div class="container-fluid">

                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                            <i class="glyphicon glyphicon-align-left"></i>
                            <span>Menu</span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a>Cerrar sesion</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div ng-view></div>
            
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').toggleClass('active');
            });
        });

    </script>

    <script>
        var app = angular.module("myApp", ["ngRoute"]);
        app.config(function($routeProvider) {
            $routeProvider
                .when("/", {
                    templateUrl: "consultar_alumnos.php"
                })
                .when("/agregar_usuario", {
                    templateUrl: "altas_alumnos.php"
                })
                .when("/modificar_usuario", {
                    templateUrl: "modificar_alumno.php"
                })
                .when("/editar_usuario", {
                    templateUrl: "editar_usuario.php"
                })
                .when("/eliminar_usuario", {
                    templateUrl: "eliminar_alumnos.php"
                })
                .when("/consultar_usuario", {
                    templateUrl: "consultar_alumnos.php"
                });
        });

    </script>
</body>

</html>
