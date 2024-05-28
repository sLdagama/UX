<?php
    $codusu = $_POST['id'];
    $treino = $_POST['treino'];
   include('tbanco.php');

   

   $sql = "INSERT INTO tbtreino values(null,'$codusu','$treino')";

   $consulta = $conexao->query($sql);

   if($consulta == true){
    header("Location: ../tables/frmcadtreinousu.php?cad=ok&id=$codusu");    
    exit();
   } else {
    header('Location: ../tables/frmcadtreinousu.php?cad=erro');
    exit();
   }
?>