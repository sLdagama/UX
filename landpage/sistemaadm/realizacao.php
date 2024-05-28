<?php
include('pages/testes/tbanco.php');
session_start();
if(!isset($_SESSION['login'])) {
  header('Location: pages/samples/loginu.php?login=semsessao');
}
  $codusu = $_GET['id'];
  $sql = "select nome_usuario, foto_usuario from tbusuario where codusu = '$codusu'";
  $consulta = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="principalu.php"><img src="assets/images/logo.svg"></a>
          <a class="sidebar-brand brand-logo-mini" href="principalu.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          
          <li class="nav-item nav-category">
            <span class="nav-link">Navegação</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="principalu.php?id=<?php echo $codusu?>">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Treinos</span>
            </a>
          </li>
          <?php
                         
                              
                              $consulta = $conexao->query($sql);
                              $linha=$consulta->fetch_array(MYSQLI_ASSOC)
          ?>
          <li class="nav-item menu-items">
            <a class="nav-link" href="listardicasusu.php?id=<?php echo $codusu?>">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Dicas</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
              <span class="mdi mdi-menu"></span>
            </button>
            
            <ul class="navbar-nav navbar-nav-right">
              
              
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                  <?php
                     $foto = base64_decode($_SESSION['foto_usuario']);
                      echo '<td><img class="img-xs rounded-circle" src="data:image/jpeg;base64,'.base64_encode($foto).'"></td>';
                    ?>
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"><?php echo $_SESSION['nome_usuario']?></p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Perfil</h6>
                  <div class="dropdown-divider"></div>
                  
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="pages/testes/tsairu.php">
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
            
          <div class="row ">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Realização Treino</h4>
                    <p class="card-description"> Sempre confira as informações!</p>
                    <form class="forms-sample" action="pages/testes/datarealizacao.php"  method="POST" enctype="multipart/form-data">
                      
                    <div class="form-group">
                        
                        <input type="hidden" class="form-control" value="<?php echo $_SESSION['codusu']?>" id="id" name="id" readonly>
                      </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Data de realização do treino</label>
                        <input type="date" name="data" id="data" class="form-control">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Cadastre!</button>
                      
                      <button type="reset" class="btn btn-dark">Limpar</button>
                    </form>
                  </div>    
                </div>
              </div>
            </div>
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Data de realização</h4>
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
                            <th>Tipo do treino</th>
                            <th>Data de realização</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          
                              $sql = "select * from realizacao_treino
                              where codusu = '$codusu'";
                              $sql2 = "select tbtreino.*, tbusuario.* from tbtreino inner join tbusuario ON(tbusuario.codtreino = tbtreino.codtreino)
                              where tbusuario.codusu = '$codusu'";

                              $consulta = $conexao->query($sql);
                              $consulta2 = $conexao->query($sql2);

                              if ($consulta == true and $consulta2 == true) {
                                if($consulta->num_rows > 0) {
                                  while ($linha=$consulta->fetch_array(MYSQLI_ASSOC) and $linha2=$consulta2->fetch_array(MYSQLI_ASSOC)) {
                                    echo 
                                    '<tr>
                                      <td>
                                        <div class="form-check form-check-muted m-0">
                                          <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input">
                                          </label>
                                        </div>  
                                      </td>';
                                    echo '<td>'.$linha2['tipo_treino'].'</td>';
                                    echo '<td>'.$linha['data_realizacao'].'</td>
                                    </tr>';
                                    
                                  }
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
            
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">A fundação Corona agradece a sua presença.</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>