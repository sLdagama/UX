<?php
   session_start();
   session_destroy();
   header('Location: ../samples/loginu.php?logout=ok');
?>