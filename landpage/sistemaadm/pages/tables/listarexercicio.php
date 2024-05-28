    <?php
    session_start();
    if(!isset($_SESSION['login'])) {
        header('Location: ../samples/login.php?login=semsessao');
    }

    $id = $_GET['id'];
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Fundação Corona (Personal)</title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End Plugin css for this page -->
        <!-- inject:css -->
        <!-- endinject -->
        <!-- Layout styles -->
        <link rel="stylesheet" href="../../assets/css/style.css">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="../../assets/images/favicon.png" />
    </head>
    <body>
        <div class=" container-scroller">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
            <a class="sidebar-brand brand-logo" href="principalp.php"><img src="../../assets/images/logo.svg"></a>
            <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <ul class="nav">
            
            <li class="nav-item nav-category">
                <span class="nav-link">Navegação</span>
            </li>
            <li class="nav-item menu-items">
                <a class="nav-link" href="../../principalp.php">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Inicial</span>
                </a>
            </li>
            
            
            <li class="nav-item menu-items">
                <a class="nav-link" href="../tables/treinos.php">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Treinos</span>
                </a>
            </li>
            
            <li class="nav-item menu-items">
                <a class="nav-link" href="../icons/usuarios.php">
                <span class="menu-icon">
                    <i class="mdi mdi-contacts"></i>
                </span>
                <span class="menu-title">Usuários</span>
                </a>
            </li>
            
            </ul>
        </nav>  
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_navbar.html -->
            <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="../../assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
                </button>
                <ul class="navbar-nav w-100">

                </ul>
                <ul class="navbar-nav navbar-nav-right">
                
                
                <li class="nav-item dropdown">
                    <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                    <div class="navbar-profile">
                        <img class="img-xs rounded-circle" src="../../assets/images/faces/face15.jpg" alt="">
                        <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $_SESSION['nome_personal']?></p>
                        <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                    </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                    <h6 class="p-3 mb-0">Perfil</h6>
                    <div class="dropdown-divider"></div>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item" href="../testes/tsairp.php">
                        <div class="preview-thumbnail">
                        <div class="preview-icon bg-dark rounded-circle">
                            <i class="mdi mdi-logout text-danger"></i>
                        </div>
                        </div>
                        <div class="preview-item-content">
                        <p class="preview-subject mb-1">Sair</p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    
                    </div>
                </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-format-line-spacing"></span>
                </button>
            </div>
            </nav>
            <!-- partial -->
            <div class="main-panel">
            <div class="content-wrapper">
                <div class="page-header">
                <h3 class="page-title"> Usuários</h3>
                <?php
                                            if(isset($_GET['dica'])){
                                                if($_GET['dica']=='ok'){
                                                    echo    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                                <strong>Atenção!</strong> Dica cadastrada com sucesso!
                                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>';  
                                                }
                                            }
                        if(isset($_GET['dica'])){
                            if($_GET['dica']=='erro'){
                            echo    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Atenção!</strong> Houve algum erro no cadastro da dica!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                                </div>';  
                            }
                        }

                                            ?>
                                            <li class="nav-item dropdown d-none d-lg-block">
                    <a class="nav-link btn btn-success create-new-button" id="createbuttonDropdown" href="frmcade.php?id=<?php echo $id?>">Cadastrar exercício</a>
                <nav aria-label="breadcrumb">
                    
                </nav>
                </div>
                <div class="row ">  
                <div class="col-12 grid-margin">
                    <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Listagem de Exercícios</h4>
                        <div class="table-responsive">
                        <table class="table">


                            
                            <thead>
                            <tr>
                                <th>
                                <div class="form-check form-check-muted m-0">
                                    <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input">
                                    </label>
                                </div>
                                </th>
                                <th> Foto </th>
                                <th> Nome</th>
                                <th>Descrição</th>
                                <th>Séries</th>
                                <th>Execuções</th>
                                <th>Intervalo(s)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                
                                include('../testes/tbanco.php');  

                                $sql = "select * from tbexercicio where codtreino = '$id'";

                                $consulta = $conexao->query($sql);

                                if ($consulta == true) {
                                    if($consulta->num_rows > 0) {
                                    while ($linha=$consulta->fetch_array(MYSQLI_ASSOC)) {
                                        echo 
                                        '<tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                            </div>
                                        </td>';
                                        $foto = base64_decode($linha['foto_exercicio']);
                                        echo '<td><img class="rounded-circle me-sm-2" src="data:image/jpeg;base64,'.base64_encode($foto).'"></td>';
                                        echo '<td>'.$linha['nome_exercicio'].'</td>';
                                        echo '<td>'.$linha['descricao'].'</td>';
                                        echo '<td>'.$linha['series'].'</td>';
                                        echo '<td>'.$linha['repeticoes'].'</td>';
                                        echo '<td>'.$linha['intervalo'].'</td>
                                        </tr>';
                                    }
                                    } else {
                                        echo 
                                        '<tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                            </div>
                                        </td>
                                        <td>Não Há exercícios salvos</td>
                                        <td>Não Há exercícios salvos</td>
                                        </tr>';
                                    }
                                }
                            ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>
                </div>
                </div>  
            </div>
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Fundação Corona agradece sua presença</span>
                
                </div>
            </footer>
            <!-- partial -->
            </div>
        </div>
        </div>
        <!-- plugins:js -->
        <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../../assets/js/off-canvas.js"></script>
        <script src="../../assets/js/hoverable-collapse.js"></script>
        <script src="../../assets/js/misc.js"></script>
        <script src="../../assets/js/settings.js"></script>
        <script src="../../assets/js/todolist.js"></script>
        
        <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <script src="../../assets/vendors/select2/select2.min.js"></script>
        <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../../assets/js/off-canvas.js"></script>
        <script src="../../assets/js/hoverable-collapse.js"></script>
        <script src="../../assets/js/misc.js"></script>
        <script src="../../assets/js/settings.js"></script>
        <script src="../../assets/js/todolist.js"></script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <script src="../../assets/js/file-upload.js"></script>
        <script src="../../assets/js/typeahead.js"></script>
        <script src="../../assets/js/select2.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>

        <script>
        $('#telefone').mask('(00) 0000-0000');
        </script>
        <!-- endinject -->
        <!-- Custom js for this page -->
        <!-- End custom js for this page -->
    </body>
    </html>