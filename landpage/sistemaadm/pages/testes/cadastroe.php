<?php
    $codtreino = $_POST['codtreino'];
   $nome_exercicio = $_POST['exercicio'];
   $descricao = $_POST['descricao'];
  $execucao = $_POST['execucao'];
  $intervalo = $_POST['intervalo'];
  $serie = $_POST['qtdrep'] ;  
  $foto_exercicio = file_get_contents($_FILES['imgexercicio']['tmp_name']);
  $foto_base = base64_encode($foto_exercicio);
   
  include('tbanco.php');

   

   $sql = "INSERT INTO tbexercicio values(null,'$execucao','$serie','$foto_base','$descricao','$nome_exercicio','$intervalo','$codtreino')";

   $consulta = $conexao->query($sql);

   if($consulta == true){
    header("Location: ../tables/frmcade.php?cad=ok&id=$codtreino");
    exit();
   } else {
    header('Location: ../tables/frmcade.php?cad=erro');
    exit();
   }
?>