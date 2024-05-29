<?php
 $conexao = new mysqli('localhost','root','','dbacademiaux');

if(mysqli_connect_errno()){
    trigger_error(mysqli_connect_error());
    echo mysqli_connect_error();

}else{
    echo'';
}
?>