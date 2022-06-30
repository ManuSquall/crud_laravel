<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('template/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('template/vendor/fonts/circular-std/style.css" rel="stylesheet')}}">
    <link rel="stylesheet" href="{{asset('template/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendor/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet"
        href="{{asset('template/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendor/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{asset('template/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <!-- squall -->
    <link rel="stylesheet" href="{{asset('css/squall.css')}}">
    <title>GESTION STOCK</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">

        <!-- ============================================================== -->
        <!-- header -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="#">GESTION STOCK</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                </button>

            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Menu</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">



                            <!-- ############################################## -->

                            <!-- ############################################## -->


                            <li class="nav-divider">
                                Services
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-1" aria-controls="submenu-1"><i
                                        class="fa fa-fw fa-user-circle"></i>Rôles : <span
                                        class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Ajouter</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Gestion</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- ################# -->
                            <li class="nav-divider">
                            </li>
                            <!-- ################# -->

                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-2" aria-controls="submenu-2"><i
                                        class="fab fa-fw fa-wpforms"></i>Utilisateurs : <span
                                        class="badge badge-success">6</span></a>
                                <div id="submenu-2" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Ajouter</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Gestion</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <!-- ################# -->
                            <li class="nav-divider">
                            </li>
                            <!-- ################# -->

                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-3" aria-controls="submenu-3"><i
                                        class="fab fa-fw fa-wpforms"></i>Catégories : <span
                                        class="badge badge-success">6</span></a>
                                <div id="submenu-3" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Ajouter</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Gestion</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>


                            <!-- ################# -->
                            <li class="nav-divider">
                            </li>
                            <!-- ################# -->

                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-3" aria-controls="submenu-3"><i
                                        class="fab fa-fw fa-wpforms"></i>Produits : <span
                                        class="badge badge-success">6</span></a>
                                <div id="submenu-3" class="collapse submenu" >
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Ajouter</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Gestion</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>



                            <!-- ############################################## -->


                            <li class="nav-divider">
                                <a href="#"> Info</a>

                            </li>
                            <li class="nav-divider">
                                <a href="Login/logout"> Déconnecter</a>

                            </li>





                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->

<!-- ============================================================== -->
<!-- wrapper  -->
<!-- ============================================================== -->
<div class="dashboard-wrapper">


<div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">



        <!-- ########################################################################### -->





