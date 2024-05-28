<?php
   session_start();
   session_destroy();
   header('Location: ../samples/login.php?logout=ok');
?>