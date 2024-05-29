<?php
include('../testes/tbanco.php');
session_start();
if(!isset($_SESSION['login'])) {
  header('Location: ../samples/login.php?login=semsessao');
}

  if(!empty($_GET['id'])) {
    

    $id = $_GET['id'];

    $sql = "select * from tbusuario where codusu = '$id'";

    $consulta = $conexao->query($sql);

    if ($consulta->num_rows > 0) {
        while ($linha=$consulta->fetch_array(MYSQLI_ASSOC)) {
            $nome = $linha['nome_usuario'];
            $email = $linha['email'];
            $senha = $linha['senha_usuario']; 
            $telefone = $linha['telefone'];
            
        }
    } else {
        header('Location: usuarios.php');
    }
  }
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
            <a class="nav-link" href="usuarios.php">
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
  										   if(isset($_GET['update'])){
											   if($_GET['update']=='ok'){
												  echo    '<div class="alert alert-success alert-dismissible fade show" role="alert">
															  <strong>Atenção!</strong> Dados atualizados com sucesso!
															  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;</span>
															  </button>
															</div>';  
											   }
										   }
                       if(isset($_GET['update'])){
                        if($_GET['update']=='erro'){
                         echo    '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                               <strong>Atenção!</strong> Houve algum erro na atualização!
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                               <span aria-hidden="true">&times;</span>
                               </button>
                             </div>';  
                        }
                      }
										?>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="usuarios.php">Voltar</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Listagem dos usuários</li>
                </ol>
              </nav>
            </div>
            <div class="row ">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Editar usuário</h4>
                    <p class="card-description"> Sempre confira as informações!</p>
                    <form class="forms-sample" action="../testes/talterau.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputName1">Nome</label>
                        <input type="text" value="<?php echo $nome;?>" class="form-control" id="nome" name="nome" placeholder="Insira o nome do usuário" >
                      </div>
                      <div class="form-group">
                        <input type="hidden" value="<?php echo $id;?>" class="form-control" id="id" name="id" placeholder="Insira o nome do usuário" >
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Endereço de Email</label>
                        <input type="email" value="<?php echo $email;?>"class="form-control" id="email" name="email" placeholder="Insira o Email do usuário">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Senha</label>
                        <input type="text" value="<?php echo $senha;?>"class="form-control" id="senha" name="senha" placeholder="Insira a senha do usuário">
                      </div>
                      <div class="form-group">
                        <label for="">Telefone</label>
                        <input type="text" value="<?php echo $telefone;?>"class="form-control" id="telefone" name="telefone" placeholder="(xx) xxxx-xxxx">
                      </div>
                      <div class="form-group">
                        <label>Foto</label>
                        <input type="file" required="" name="img" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Insira sua foto">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Enviar</button>
                          </span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleSelectGender">Treino</label> 
                        <select id="treino" name="treino" class="form-control" id="exampleSelectGender">
                          <?php
                            include('../testes/tbanco.php');
														  
                            //criar sql de consulta
                            $sql = "select codtreino, tipo_treino from tbtreino";
                            $consulta = $conexao->query($sql);
                            if ($consulta == true){
                                //verifica se encontrou pelo menos uma linha
                                if($consulta->num_rows > 0){
                                   //recebendo valor da consulta 
                                   while($linha=$consulta->fetch_array(MYSQLI_ASSOC)){
                                         echo '<option value="'.$linha['codtreino'].'">'.$linha['tipo_treino'].'</option>';
                                   }
                                }
                            }
                          ?>
                        </select>
                      </div>
                      <button type="submit" name="update" class="btn btn-primary mr-2">Editar!</button>
                      <button type="reset" class="btn btn-dark">Limpar</button>
                    </form>
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