<?php
function protegerDados($dado) {
    return htmlspecialchars(stripslashes(trim($dado)));
}

function formatarData($data, $formato = 'd/m/Y') {
    return date($formato, strtotime($data));
}

function estaLogado() {
    return isset($_SESSION['usuario']);
}

function ehAdmin() {
    return isset($_SESSION['nivel']) && $_SESSION['nivel'] == 2;
}

function redirecionarSeNaoLogado($pagina = 'login.php') {
    if(!estaLogado()) {
        header("Location: $pagina");
        exit;
    }
}

function redirecionarSeNaoAdmin($pagina = 'index.php') {
    if(!ehAdmin()) {
        header("Location: $pagina");
        exit;
    }
}
?>