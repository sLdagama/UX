<?php
  //recebem os dados que estão chegando por GET
  $id = $_GET['id'];
  
  
  //fazendo conexão com o banco de dados
  include('tbanco.php');
  
  //criar sql do delete
  $sql = "delete from tbusuario where codusu = '$id'";
		  
  
  //realizar a consulta
  $consulta = $conexao->query($sql);
  
  //testa se consulta deu c

  if ($consulta == true){
		header('Location: ../icons/usuarios.php?delete=ok'); 
  }else{
		header('Location: ../icons/usuarios.php?delete=erro'); 
  }
?>









