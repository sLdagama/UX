<?php
    $nome = $_POST['nome'];
   $email = $_POST['email'];
   $senha = $_POST['senha'];
   $telefone = $_POST['telefone'];
   $treino = $_POST['treino'];
   $foto = file_get_contents($_FILES['img']['tmp_name']);
   $foto_base = base64_encode($foto);
   include('tbanco.php');

   $nome_M = strtoupper($nome);

   $sql = "INSERT INTO tbusuario values(null, '$nome','$senha','$foto_base','$email','$telefone','$treino')";

   $consulta = $conexao->query($sql);
    
   if($consulta == true){
    header('Location: ../icons/frmcadu.php?cad=ok');
    exit();
   } else {
    header('Location: ../icons/frmcadu.php?cad=erro');
    exit();
   }
?>