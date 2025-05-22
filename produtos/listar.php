<?php
include '../includes/cabecalho.php';
require '../config/conexao.php';

$mysql = new BancodeDados();
$mysql->conecta();

$sql = "SELECT * FROM produtos";
$resultado = $mysql->sqlquery($sql, "listar.php");

echo "<h2>Lista de Produtos</h2>";
echo "<a href='incluir.php'>Adicionar Novo Produto</a>";

echo "<table border='1' style='width:100%; margin-top:20px;'>";
echo "<tr><th>ID</th><th>Nome</th><th>Descrição</th><th>Preço</th><th>Ações</th></tr>";

while($produto = mysqli_fetch_array($resultado)){
    echo "<tr>";
    echo "<td>".$produto['id']."</td>";
    echo "<td>".$produto['nome']."</td>";
    echo "<td>".$produto['descricao']."</td>";
    echo "<td>R$ ".number_format($produto['preco'], 2, ',', '.')."</td>";
    echo "<td>
            <a href='editar.php?id=".$produto['id']."'>Editar</a> | 
            <a href='excluir.php?id=".$produto['id']."' onclick='return confirm(\"Tem certeza?\")'>Excluir</a>
          </td>";
    echo "</tr>";
}

echo "</table>";

$mysql->fechar();
include '../includes/rodape.php';
?>