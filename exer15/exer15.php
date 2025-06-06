<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteio de Desconto</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 400px;
        }
        h1 {
            color: #00b894;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        input {
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border 0.3s;
        }
        input:focus {
            border-color: #00b894;
            outline: none;
        }
        button {
            background: linear-gradient(45deg, #00b894 0%, #55efc4 100%);
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s;
        }
        button:hover {
            transform: translateY(-3px);
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            border-radius: 8px;
            font-weight: bold;
            background-color: #55efc4;
            color: #005a2b;
        }
        .btn-voltar {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background: #6c5ce7;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background 0.3s;
        }
        .btn-voltar:hover {
            background: #5649c0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🎁 Sorteio de Desconto</h1>
        
        <form method="post">
            <input type="number" name="preco" placeholder="Preço do produto" step="0.01" min="1" required>
            <button type="submit">Sortear Desconto</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $preco = $_POST["preco"];
            $desconto = rand(5, 25);
            $valorDesconto = $preco * ($desconto / 100);
            $precoFinal = $preco - $valorDesconto;
            
            echo "<div class='result'>";
            echo "Preço original: <strong>R$ " . number_format($preco, 2, ',', '.') . "</strong><br>";
            echo "Desconto sorteado: <strong>$desconto%</strong><br>";
            echo "Valor do desconto: <strong>R$ " . number_format($valorDesconto, 2, ',', '.') . "</strong><br>";
            echo "Preço final: <strong>R$ " . number_format($precoFinal, 2, ',', '.') . "</strong>";
            echo "</div>";
        }
        ?>

        <a href="../index.php" class="btn-voltar">← Voltar</a>
    </div>
</body>
</html>