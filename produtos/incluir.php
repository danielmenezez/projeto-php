
<?php
include '../includes/cabecalho.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    
    $mysql = new BancodeDados();
    $mysql->conecta();
    
    $sql = "INSERT INTO produtos (nome, descricao, preco) VALUES ('$nome', '$descricao', $preco)";
    $resultado = $mysql->sqlquery($sql, "incluir.php");
    
    if($resultado){
        echo "<div class='mensagem sucesso'>Produto cadastrado com sucesso!</div>";
    }
    
    $mysql->fechar();
}
?>

<h2>Adicionar Novo Produto</h2>
<form method="POST">
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>
    
    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="descricao" required></textarea>
    
    <label for="preco">Preço:</label>
    <input type="number" id="preco" name="preco" step="0.01" required>
    
    <button type="submit">Salvar</button>
    <a href="listar.php">Cancelar</a>
</form>

<?php include '../includes/rodape.php'; ?>