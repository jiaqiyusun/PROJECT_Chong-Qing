<?php
// Inicia uma sessão (* sempre no topo da pagina)
session_start();
    
    if(!isset($_SESSION['idioma'])){
        $_SESSION['idioma']='pt.php';
    }else if(isset($_GET['idioma'])){
        include 'traducoes/'.$_GET['idioma'].'.php';
    }
?>