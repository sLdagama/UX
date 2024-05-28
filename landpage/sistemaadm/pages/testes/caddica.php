<?php
    $dica = $_POST['dica'];
    $id = (int)$_POST['id'];
    include('tbanco.php');

    $sql = "INSERT INTO tbdicausu values(null,$id,'$dica')";

    $consulta = $conexao->query($sql);

    if ($consulta == true) {
        header("Location: ../icons/dicauser.php?id=$id&dica=ok");
        exit(); // Importante para evitar que o script continue a ser executado após o redirecionamento
    } else {
        echo "Erro ao executar a consulta: " . $conexao->error; // Exibe mensagem de erro SQL
        // Ou redirecione para uma página de erro
        header('Location: ../icons/dicauser.php?dica=erro');
        exit(); // Importante para evitar que o script continue a ser executado após o redirecionamento
    }
?>