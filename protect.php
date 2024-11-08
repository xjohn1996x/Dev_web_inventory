<?php

if(!isset($_SESSION)) {
  session_start();
}

if(!isset($_SESSION['id'])){
    die("você não pode acessar esta página!!! | Usúario não logado.<p><a href=\"index.php\">Entrar</a></p>");
}

?>