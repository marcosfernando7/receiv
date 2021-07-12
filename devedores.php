<?php
    require 'functions.php';
    require 'Class/Conn.php';
    require 'Class/Devedor.php';
    require 'Class/DevedorDAO.php';
    include 'header.php';
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
                        <h3>Devedores</h3>
                        <div class="crumbs">
                            <ul id="breadcrumbs" class="breadcrumb">
                                <li><a href="index.html"><i class="flaticon-home-fill"></i></a></li>
                                <!-- <li><a href="#">Forms</a></li> -->
                                <li class="active"><a href="#">Devedores</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <?php if(isset($_GET['inserido']) == true) : ?>
                    <div class="alert alert-icon-left alert-light-success mb-4" role="alert">
                        <i class="flaticon-cancel-12 close" data-dismiss="alert"></i>
                        <i class="flaticon-danger-3"></i>
                        <strong>Sucesso!</strong> Devedor inserido com Sucesso.
                    </div>
                <?php endif; ?>

                <?php if(isset($_GET['delete']) == true) : ?>
                    <div class="alert alert-icon-left alert-light-danger mb-4" role="alert">
                        <i class="flaticon-cancel-12 close" data-dismiss="alert"></i>
                        <i class="flaticon-danger-3"></i>
                        <strong>Sucesso!</strong> Devedor excluído com Sucesso.
                    </div>
                <?php endif; ?>

                <?php if(isset($_GET['alterado']) == true) : ?>
                    <div class="alert alert-icon-left alert-light-info mb-4" role="alert">
                        <i class="flaticon-cancel-12 close" data-dismiss="alert"></i>
                        <i class="flaticon-danger-3"></i>
                        <strong>Sucesso!</strong> Devedor alterado com Sucesso.
                    </div>
                <?php endif; ?>

                <button type="button" class="btn btn-primary btn-rounded mb-4 mr-2" id="btn-cadastrar"><span class="flaticon-user-11"></span> Cadastrar devedor</button>
                <div class="row">
                <div class="col-lg-12 layout-spacing">
                <div class="widget-content widget-content-area">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th class="align-center">#</th>
                                                <th>Nome</th>
                                                <th>CPF</th>
                                                <th>Endereço</th>
                                                <th class="align-center">Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                        <?php foreach($devedor->listar($pdo) as $devedor) : ?>

                                            <tr>
                                                <td class="align-center"><?= $devedor->id_devedor ?></td>
                                                <td><?= $devedor->nome ?></td>
                                                <td><?= mask($devedor->cpf, '###.###.###-##') ?></td>
                                                <td><?= $devedor->endereco ?></td>
                                                <td class="align-center">
                                                    <ul class="table-controls">
                                                        <li><a href="#" title="Editar" data-original-title="Editar" data-toggle="modal" data-target="#exampleModal" class="editar_devedor" data-id="<?= $devedor->id_devedor ?>"><i class="flaticon-edit-fill-2"></i></a></li>
                                                        <li><a href="#" title="Excluir" data-original-title="Delete"  data-toggle="modal" data-target="#DelModal" class="excluir_devedor" data-id="<?= $devedor->id_devedor ?>"><i class="flaticon-delete-fill"></i></a></li>
                                                    </ul>
                                                </td>
                                            </tr>

                                            <?php endforeach; ?>
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
        include 'modal-delete.php';
        include 'modal-devedor.php';
        include 'footer.php';
    ?>