<nav>
    <ul class="lista" style="display: flex; gap: 15px;">
        <li><a href="index.php">Home</a></li>
        <li><a href="produtos/listar.php">Produtos</a></li>
        <?php if(isset($_SESSION['usuario'])): ?>
            <li><a href="logout.php">Sair</a></li>
            <li>Bem-vindo, <?php echo $_SESSION['usuario']; ?></li>
        <?php else: ?>
            <li><a href="login.php">Login</a></li>
        <?php endif; ?>
    </ul>
</nav>