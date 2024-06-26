<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="ccs/bootstrap.css">
        <link rel="stylesheet" href="ccs/bootstrap-icons.min.css">
        <link rel="stylesheet" href="ccs/prism-okaidia.css">
        <link rel="stylesheet" href="ccs/custom.min.css">
        <title>Document</title>
        
    </head>
    <body>
        <div class="navbar navbar-expand-lg fixed-top bg-primary" data-bs-theme="dark">
            <div class="container">
                <a href="index.php" class="navbar-brand">Banco Virtual</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown" data-bs-theme="light">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" id="servicios">Servicios</a>
                            <div class="dropdown-menu" aria-labelledby="servicios">
                                <a class="dropdown-item" href="#">Prestamos</a>
                                <a class="dropdown-item" href="#">Tarjetas</a>
                                <a class="dropdown-item" href="#">Inversiones</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Terminos y condiciones</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Iniciar Sesion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="RegistroUsuario.php">Registrarse</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-md-auto">
                        <li class="nav-item">
                        <a target="_blank" rel="noopener" class="nav-link" href="https://github.com/thomaspark/bootswatch/"><i class="bi bi-github"></i><span class="d-lg-none ms-2">GitHub</span></a>
                        </li>
                        <li class="nav-item">
                        <a target="_blank" rel="noopener" class="nav-link" href="https://twitter.com/bootswatch"><i class="bi bi-twitter"></i><span class="d-lg-none ms-2">Twitter</span></a>
                        </li>
                        <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
                        <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                        <hr class="d-lg-none my-2 text-white-50">
                        </li>
                        <li class="nav-item dropdown" data-bs-theme="light">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="version-menu" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme">
                            <span class="d-lg-none me-2">Bootstrap </span>
                            <span>v5.3</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                            <a href="https://bootswatch.com/" class="dropdown-item d-flex align-items-center justify-content-between" aria-current="true">
                                <span class="ms-2">v5.3.x</span><i class="bi bi-check"></i>
                            </a>
                            </li>
                            <li>
                            <a href="https://bootswatch.com/4/" class="dropdown-item d-flex align-items-center justify-content-between">
                                <span class="ms-2">v4.6.2</span>
                            </a>
                            </li>
                            <li>
                            <a href="https://bootswatch.com/3/" class="dropdown-item d-flex align-items-center justify-content-between">
                                <span class="ms-2">v3.4.1</span>
                            </a>
                            </li>
                            <li>
                            <a href="https://bootswatch.com/2/" class="dropdown-item d-flex align-items-center justify-content-between">
                                <span class="ms-2">v2.3.2</span>
                            </a>
                            </li>
                            <li>
                            <hr class="dropdown-divider">
                            </li>
                            <li>
                            <a href="https://github.com/thomaspark/bootswatch/tags" class="dropdown-item d-flex align-items-center justify-content-between">
                                <span class="ms-2">All versions</span>
                            </a>
                            </li>
                        </ul>
                        </li>
                        <li class="nav-item py-2 py-lg-1 col-12 col-lg-auto">
                        <div class="vr d-none d-lg-flex h-100 mx-lg-2 text-white"></div>
                        <hr class="d-lg-none my-2 text-white-50">
                        </li>
                        <li class="nav-item dropdown" data-bs-theme="light">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="theme-menu" aria-expanded="false" data-bs-toggle="dropdown" data-bs-display="static" aria-label="Toggle theme">
                            <i class="bi bi-circle-half"></i>
                            <span class="d-lg-none ms-2">Toggle theme</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                                <i class="bi bi-sun-fill"></i><span class="ms-2">Light</span>
                            </button>
                            </li>
                            <li>
                            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="true">
                                <i class="bi bi-moon-stars-fill"></i><span class="ms-2">Dark</span>
                            </button>
                            </li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="page-header" id="banner">
                <div class="row">
                    <div class="col-lg-8 col-md-7 col-sm-6">
                        <h1>Banco Virtual</h1>
                        <p class="lead">Bienvenido a tu Banca Virtual</p>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-6">
                        <div class="sponsor">
                            <img src="multimedia/seguridad.jpg" alt="logo seguridad" width="100" height="100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
