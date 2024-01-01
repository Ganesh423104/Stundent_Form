<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- Choices CSS-->
    <link rel="stylesheet" href="vendor/choices.js/public/assets/styles/choices.min.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
</head>

<body>
    <div class="page" style="  position: -webkit-sticky; position: sticky; top: 0;">
        <header class="header z-index-50">
            <nav class="nav navbar py-3 px-0 shadow-sm text-white position-relative">
                <div class="search-box shadow-sm">
                    <button class="dismiss d-flex align-items-center">
                        <svg class="svg-icon svg-icon-heavy">
                            <use xlink:href="#close-1"> </use>
                        </svg>
                    </button>
                    <form id="searchForm" action="#" role="search">
                        <input class="form-control shadow-0" type="text" placeholder="What are you looking for...">
                    </form>
                </div>
                <div class="container-fluid w-100">
                    <div class="navbar-holder d-flex align-items-center justify-content-between w-100">
                        <div class="navbar-header">
                            <a class="navbar-brand d-none d-sm-inline-block" href="index.html">
                                <div class="brand-text d-none d-lg-inline-block"><strong>Dashboard</strong></div>
                                <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong>BD</strong></div>
                            </a>
                            <a class="menu-btn" id="" href="#"><span></span><span></span><span></span></a>
                        </div>
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">

                            <li class="nav-item d-flex align-items-center">
                                <a id="search" href="#">
                                    <svg class="svg-icon svg-icon-xs svg-icon-heavy">
                                        <use xlink:href="#find-1"></use>
                                    </svg>
                                </a>
                            </li>
                            <div class="text-start ms-4">
                                <button type="submit" class="btn brand-text d-none d-lg-inline-block w-100 text-white me-1 text-last"
                                    name="logout">Logout</button>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="page-content d-flex align-items-stretch">

            <nav class="side-navbar z-index-20">

                <div class="sidebar-header d-flex align-items-center py-4 px-3">
                    <div class="ms-3 title">
                        <h1 class="h4 mb-2">Ganesh Kekan</h1>
                        <p class="text-sm text-gray-500 fw-light mb-0 lh-1">Full-stack Developer</p>
                    </div>
                </div>
                <ul class="list-unstyled py-4 pb-5">
                    <li class="sidebar-item"><a class="sidebar-link" href="index.php">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#real-estate-1"> </use>
                            </svg>Dashboard </a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="forms.php">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#survey-1"> </use>
                            </svg>Student_Forms </a></li>
                    <li class="sidebar-item"><a class="sidebar-link" href="tables.php">
                            <svg class="svg-icon svg-icon-sm svg-icon-heavy me-xl-2">
                                <use xlink:href="#portfolio-grid-1"> </use>
                            </svg>Student_Tables </a>
                    </li>
                </ul>
                <!-- <div class="text-start mt-5 pt-5">
                    <button type="submit" class="btn bg-primary w-50 text-white mt-5 ms-5 me-1 text-last"
                        name="logout">Logout</button>
                </div> -->
            </nav>
            <div class="content-inner w-100">
                <header class="bg-white shadow-sm px-4 py-3 z-index-20">
                    <div class="container-fluid px-0">
                        <h2 class="mb-0 p-1">Dashboard</h2>
                    </div>
                </header>