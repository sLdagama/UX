<?php
  //recebem os dados que estão chegando por POST
  $email = $_POST['email'];
  $utilizador = "";
  $dominio = "";
  $senha = $_POST['senha'];
  
  for($i = 0;$i < strlen($email); $i++) {
    $char = $email[$i];
    if($char == "@") {
        $array = explode("@",$email);
        $utilizador = $array[0];
        $dominio = "@" . $array[1];
    }
}
  //fazendo conexão com o banco de dados
  include('tbanco.php');
  
  //criar sql de consulta
  $sql = "select * from tbpersonal where email = '$email'
          and senha_personal = '$senha'";
  //realizar a consulta
  $consulta = $conexao->query($sql);
  //testa se consulta deu certo
  if ($consulta == true){
	 //verifica se encontrou pelo menos uma linha
	 if($consulta->num_rows > 0){
		//criando sessão
    $linha = $consulta->fetch_array(MYSQLI_ASSOC);
		session_start();
    $_SESSION['codpersonal'] = $linha['codpersonal'];
    $_SESSION['login'] = 'ok';
    $_SESSION['nome_personal'] = $linha['nome_personal'];
        //fim da sessão		  
		header('Location: ../../principalp.php'); 
	 }else{
		header('Location: ../samples/login.php?login=erro'); 
	 }
	 
  }
?>