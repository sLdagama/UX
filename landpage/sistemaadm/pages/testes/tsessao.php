<?php
    session_start();
	if(!$_SESSION['login']){
		header('Location: ../../../Fundação Bitelo-sistema/index.php?sessao=erro');
	}
?>