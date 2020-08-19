<?php
// Inicia uma sessão (* sempre no topo da pagina)
session_start();

    if(!isset($_SESSION['language'])){
        $_SESSION['language']='pt.php';
    }else if(isset($_GET['language'])){
        include 'traducoes/'.$_GET['idioma'].'.php';
    }
?>