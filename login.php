<?php
include 'includes/cabecalho.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $mysql = new BancodeDados();
    $mysql->conecta();
    
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = $mysql->sqlquery($sql, "login.php");
    $usuario = mysqli_fetch_array($resultado);
    
    if($usuario && password_verify($senha, $usuario['senha'])){
        $_SESSION['usuario'] = $usuario['nome'];
        $_SESSION['nivel'] = $usuario['nivel'];
        header('Location: index.php');
    } else {
        echo "<div class='mensagem erro'>Usuário ou senha inválidos!</div>";
    }
    
    $mysql->fechar();
}
?>

<h2>Login</h2>
<form method="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <label for="senha">Senha:</label>
    <input type="password" id="senha" name="senha" required>
    
    <button type="submit">Entrar</button>
</form>

<?php include 'includes/rodape.php'; ?>