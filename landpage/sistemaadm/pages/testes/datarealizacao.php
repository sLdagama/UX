<?php
   include('tbanco.php');
   $id_usu = $_POST['id'];
   $data = $_POST['data'];
   $sql = "INSERT INTO realizacao_treino values(null,'$data','$id_usu')";       

   $consulta = $conexao->query($sql);

   if($consulta == true){
    header("Location: ../../principalu.php?cad=ok&id=$id_usu");
    exit();
   } else { 
    header('Location: ../../principalu.php?cad=erro');
    exit();
   }
?>