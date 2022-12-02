

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Administracion</title>
    <!-- base:css -->
    <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <meta property="og:title" content="Plataforma de gastos y donaciones RayoGuatemalteco" />
    <link rel="canonical" href="https://wordpress.maristak.com/" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://wordpress.maristak.com/" />
    <meta name="author" content="Xabier">
    <meta name="twitter:site" content="@RayoGuatemalteco">
    <meta property="og:site_name" content="Rayo Donativo">
    <!-- inject:css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />
</head>


<body>
    <div class="container-scroller d-flex">
        <!-- partial:./partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item sidebar-category">
                    <p>Rayo Guatemalteco</p>
                    <span></span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        <i class="mdi mdi-view-quilt menu-icon"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item sidebar-category">
                    <p>Componentes</p>
                    <span></span>
                </li>



                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-computer" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-television menu-icon"></i>
                        <span class="menu-title">Categoria </span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-computer">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="add-category.php">Añadir
                            Categoria</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="manage-category.php">Todas las
                            Categoria</a></li>
                        </ul>
                    </div>
                </li>




                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-computers" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-television menu-icon"></i>
                        <span class="menu-title">Gastos </span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-computers">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="add-expense.php">Anadir
                            gastos
                            </a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" href="manage-expenses.php">Gestionar
                            gastos</a></li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-user" aria-expanded="false" aria-controls="ui-basic">
                        <i class="mdi mdi-account-multiple menu-icon"></i>
                        <span class="menu-title">Todos los reportes </span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-user">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="daywise-reports.php">
                                Gastos diarios
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="monthwise-reports.php">Gastos mensuales

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="yearwise-reports.php">Gastos anuales

                                </a>
                            </li>
                        </ul>
                    </div>
                </li>


                <li class="nav-item sidebar-category">
                    <p>Paginas</p>
                    <span></span>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="profile.php">
                        <i class="mdi mdi-account-circle menu-icon"></i>
                        <span class="menu-title">Perfil</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="change-password.php">
                        <i class="mdi mdi-settings menu-icon"></i>
                        <span class="menu-title">Cambiar contrasena</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                        <i class="mdi mdi-power-settings menu-icon"></i>
                        <span class="menu-title">Logout</span>
                    </a>
                </li>

            </ul>
        </nav>




        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:./partials/_navbar.html -->
            <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                        <span class="mdi mdi-menu"></span>
                    </button>
                    <div class="navbar-brand-wrapper">
                        <a class="navbar-brand brand-logo" href="home.php"></a>
                        <a class="navbar-brand brand-logo-mini" href="home.php"></a>
                    </div>

                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item">
                            <h4 class="mb-0 font-weight-bold d-none d-xl-block"><?php echo "Date: " . date("d/m/Y"); ?>
                            </h4>
                        </li>


                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                        <span class="mdi mdi-menu"></span>
                    </button>
                </div>
                <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
                    <ul class="navbar-nav mr-lg-2">
                        <li class="nav-item nav-search d-none d-lg-block">
                            <div class="input-group">

                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">

                                <span class="nav-profile-name">Bienvenido </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                                <a class="dropdown-item" href="profile.php">

                                    <i class="mdi mdi-settings text-primary"></i>
                                    Ajustes
                                </a>
                                <a class="dropdown-item" href="Error404.php">
                                    <i class="mdi mdi-logout text-primary"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>
                </div>
            </nav>