<?php
    include('tbanco.php');

    $id = $_POST['id'];
    $nome_exercicio = $_POST['exercicio'];
    $descricao = $_POST['descricao'];
    $execucao = $_POST['execucao'];
    $intervalo = $_POST['intervalo'];
    $serie = $_POST['qtdrep'] ;  
    $foto_exercicio = file_get_contents($_FILES['imgexercicio']['tmp_name']);
    $foto_base = base64_encode($foto_exercicio);

    $sql = "UPDATE tbexercicio set repeticoes = $execucao, series = $serie, foto_exercicio = '$foto_base', descricao = '$descricao', nome_exercicio = '$nome_exercicio', intervalo=$intervalo where codexercicio = '$id'";

    $consulta = $conexao->query($sql);  

    if ($consulta == true) {
            header("Location: ../tables/frmalteratreino.php?update=ok&id=$id");
        } else {
            header('Location : ../tables/frmalteratreino.php?update=erro');
        }
?>