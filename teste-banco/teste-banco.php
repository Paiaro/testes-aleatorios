<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1em;
            background-color: #333;
            color: white;
        }

        nav ul {
            list-style-type: none;
            display: flex;
            gap: 1em;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        .banner {
            position: relative;
            text-align: center;
            color: white;
        }

        .banner img {
            width: 100%;
            height: auto;
        }

        .banner-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 2em;
            background: rgba(0, 0, 0, 0.5);
            padding: 0.5em;
        }

        .products {
            display: flex;
            flex-wrap: wrap;
            gap: 1em;
            padding: 2em;
        }

        .product {
            border: 1px solid #ddd;
            padding: 1em;
            width: calc(33.333% - 2em);
            box-sizing: border-box;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product img {
            width: 100%;
            height: auto;
        }

        .product:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 1em;
        }

        .social-links a {
            margin: 0 0.5em;
            color: white;
            text-decoration: none;
        }

        @media (max-width: 768px) {
            .product {
                width: calc(50% - 2em);
            }
        }

        @media (max-width: 480px) {
            .product {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Minha Loja</div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Loja</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
            </ul>
        </nav>
        <div class="cart-icon">🛒</div>
    </header>
    
    <main>
        <section class="banner">
            <img src="imagens/leite.jpg" alt="Promoção">
            <div class="banner-text">Nova Coleção</div>
        </section>
        
        <section class="products">
            <?php
            include 'produtos.php';
            foreach ($produtos as $produto) {
                $nome = htmlspecialchars($produto['nome'], ENT_QUOTES, 'UTF-8');
                $descricao = htmlspecialchars($produto['descricao'], ENT_QUOTES, 'UTF-8');
                $preco = number_format($produto['preco'], 2, ',', '.');
                $imagem = htmlspecialchars($produto['imagem'], ENT_QUOTES, 'UTF-8');

                echo "<div class='product'>";
                echo "<img src='imagens/{$imagem}' alt='{$nome}'>";
                echo "<h2>{$nome}</h2>";
                echo "<p>R$ {$preco}</p>";
                echo "<button>Adicionar ao carrinho</button>";
                echo "</div>";
            }
            ?>
        </section>
    </main>
    
    <footer>
        <p>© 2024 Minha Loja</p>
        <div class="social-links">
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
        </div>
    </footer>
</body>
</html>
