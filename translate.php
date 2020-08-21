<?php
// Inicia uma sessão (* sempre no topo da pagina)
session_start();
    
    if(!isset($_SESSION['idioma'])){
        $_SESSION['idioma']='pt.php';
    }else if(isset($_GET['idioma'])){
        include './'.$_GET['idioma'].'.php';
        $_SESSION['idioma']=$_GET['idioma'].'.php';
    }
?>