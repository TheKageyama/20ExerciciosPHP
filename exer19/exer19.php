<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censurador de Palavras</title>
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
            color: #d63031;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        input, textarea {
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: border 0.3s;
        }
        textarea {
            height: 100px;
            resize: vertical;
        }
        input:focus, textarea:focus {
            border-color: #d63031;
            outline: none;
        }
        button {
            background: linear-gradient(45deg, #d63031 0%, #ff7675 100%);
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
            background-color: #ff7675;
            color: #7f0000;
            text-align: left;
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
        <h1>🚫 Censurador de Palavras</h1>
        
        <form method="post">
            <textarea name="frase" placeholder="Digite a frase" required></textarea>
            <input type="text" name="palavra" placeholder="Palavra a censurar" required>
            <button type="submit">Censurar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $frase = $_POST["frase"];
            $palavra = $_POST["palavra"];
            $censurado = str_ireplace($palavra, '***', $frase);
            
            echo "<div class='result'>";
            echo "Frase original: <strong>" . htmlspecialchars($frase) . "</strong><br><br>";
            echo "Frase censurada: <strong>" . htmlspecialchars($censurado) . "</strong>";
            echo "</div>";
        }
        ?>

        <a href="../index.php" class="btn-voltar">← Voltar</a>
    </div>
</body>
</html>