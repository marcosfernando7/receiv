<?php
    require 'functions.php';
    require 'Class/Conn.php';
    require 'Class/Devedor.php';
    require 'Class/DevedorDAO.php';
    require 'Class/Divida.php';
    require 'Class/DividaDAO.php';
    include 'header.php';
    $devedores = $devedor->listar($pdo);

    $devedores_dividas = $divida->listar($pdo);

    $total = $divida->somar_total($pdo);
?>

<body>
    <!-- Tab Mobile View Header -->
    <header class="tabMobileView header navbar fixed-top d-lg-none">
        <div class="nav-toggle">
                <a href="javascript:void(0);" class="nav-link sidebarCollapse" data-placement="bottom">
                    <i class="flaticon-menu-line-2"></i>
                </a>
            <a href="index.html" class=""> <img src="assets/img/logo-3.png" class="img-fluid" alt="logo"></a>
        </div>
        <ul class="nav navbar-nav">
            <li class="nav-item d-lg-none">
                <form class="form-inline justify-content-end" role="search">
                    <input type="text" class="form-control search-form-control mr-3">
                </form>
            </li>
        </ul>
    </header>
    <!-- Tab Mobile View Header -->

    <!--  BEGIN NAVBAR  -->
    <?php include 'navbar.php'; ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">
        <div class="overlay"></div>
        <div class="cs-overlay"></div>

        <!--  BEGIN SIDEBAR  -->

        <div class="sidebar-wrapper sidebar-theme">

            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            <?php include 'menu.php'; ?>
        </div>

        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT PART  -->
        <div id="content" class="main-content">
            <div class="container">
                <div class="page-header">
                    <div class="page-title">
                        <h3>Dívidas</h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                                <!-- <li><a href="#">Forms</a></li> -->
                                <li class="active"><a href="#">Dívidas</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>


                <button type="button" class="btn btn-info btn-rounded mb-4 mr-2" data-toggle="modal" data-target="#exampleModal"><span class="flaticon-dollar-coin"></span> Atribuir dívida</button>
                <div class="row">
                <div class="col-lg-12 layout-spacing">
                <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Data Vencimento</th>
                                                <th>Nome</th>
                                                <th>CPF</th>
                                                <th>Valor R$</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach($devedores_dividas as $devedor) : ?>

                                            <tr>
                                                <td class="align-center"><?= $devedor->data_vencimento ?></td>
                                                <td><?= $devedor->nome ?></td>
                                                <td><?=  mask($devedor->cpf, '###.###.###-##') ?></td>
                                                <td>R$ <?= $devedor->valor ?></td>
                                            </tr>

                                            <?php endforeach; ?>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td><strong>Total em dívidas: </strong></td>
                                                <td><strong>R$ <?= $total->total ?></strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  END CONTENT PART  -->
    </div>
    <!-- END MAIN CONTAINER -->
    <?php
        include 'modal-divida.php';
        include 'footer.php';
    ?>