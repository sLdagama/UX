<?php
    include('tbanco.php');

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $codexercicio = $_POST['codexercicio'];
    $foto = file_get_contents($_FILES['img']['tmp_name']);
    $foto_base = base64_encode($foto);
    $sql = "UPDATE tbusuario set nome_usuario = '$nome', senha_usuario = '$senha', foto_usuario = '$foto_base', email = '$email', telefone = '$telefone', codexercicio = '$codexercicio' where codusu = '$id'";
    
    $consulta = $conexao->query($sql);  

    if ($consulta == true) {
            header("Location: ../icons/frmalterau.php?update=ok&id=$id");
        } else {
            header('Location : ../icons/frmalterau.php?update=erro');
        }
?>