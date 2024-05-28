<?php
  //recebem os dados que estão chegando por POST
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  
  //fazendo conexão com o banco de dados
  include('tbanco.php');
  
  //criar sql de consulta
  $sql = "select * from tbusuario where email = '$email'
          and senha_usuario = '$senha'";
		  
  
  //realizar a consulta
  $consulta = $conexao->query($sql);
  
  //testa se consulta deu certo
  if ($consulta == true){
	 //verifica se encontrou pelo menos uma linha
	 if($consulta->num_rows > 0){
		//criando sessão 
		session_start();
        $linha = $consulta->fetch_array(MYSQLI_ASSOC);
        session_start();
        $_SESSION['login'] = 'ok';
        $_SESSION['codusu'] = $linha['codusu'];
        $_SESSION['foto_usuario'] = $linha['foto_usuario'];
        $_SESSION['nome_usuario'] = $linha['nome_usuario'];
        //fim da sessão		
		header('Location: ../../principalu.php?id='.$linha['codusu']); 
	 }else{
		header('Location: ../samples/loginu.php?login=erro'); 
	 }
	 
  }
?>