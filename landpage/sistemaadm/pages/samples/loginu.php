<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  </head>
  <body>
    
    <div class="container-scroller">
      
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
            
              <div class="card-body px-5 py-5">
                
              <div class="text-center">
                                    <?php
                                      if(isset($_GET['login'])){
                                        if ($_GET['login']=='erro'){
                                          echo    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                               <strong>Atenção!</strong> Usuário ou senha inválidos!
                                               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                               </button>
                                             </div>';
                                        }
                                      }
                                      if(isset($_GET['login'])){
                                        if ($_GET['login']=='semsessao'){
                                          echo    '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                               <strong>Atenção!</strong> Faça login para continuar!
                                               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                               </button>
                                             </div>'; 
                                        }
                                      }
                                      if(isset($_GET['logout'])){
                                        if ($_GET['logout']=='ok'){
                                          echo    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                               <strong>Atenção!</strong> Saída realizada com sucesso!
                                               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                               </button>
                                             </div>';
                                        }
                                      }
                                    ?>
                                      
                                        <img src="../../assets/images/logo.svg" alt="" class="img-fluid" width="125" height="125">
                                        
                                    </div>
                                    <br>
                                   
                <form name="f-login" action="../testes/tloginu.php" method="POST">
                  <div class="form-group">
                    <label>Email (Usuário)</label>
                    <input type="email" class="form-control p_input" id="email" name="email">
                  </div>
                  <div class="form-group">
                    <label>Senha (Usuário)</label>
                    <input type="password" class="form-control p_input" name="senha" id="senha">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Enviar</button>
                  </div>
                  
                  
                </form>
                
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
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
    <!-- endinject -->
  </body>
</html>