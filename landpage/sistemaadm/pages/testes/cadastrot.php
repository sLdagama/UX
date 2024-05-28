<?php
    $nome_treino = $_POST['nometreino'];
   include('tbanco.php');

   

   $sql = "INSERT INTO tbtreino values(null,'$nome_treino')";

   $consulta = $conexao->query($sql);

   if($consulta == true){
    header('Location: ../tables/frmcadtreino.php?cad=ok');
    exit();
   } else {
    header('Location: ../tables/frmcadtreino.php?cad=erro');
    exit();
   }
?>